<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\carwash;
use App\Models\detailTransaksi;
use App\Models\pelanggan;
use App\Models\paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postlogin(request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($data)) {
            return redirect()->route('home');
        }
        return redirect()->route('login')->with('notif', 'Email atau Password salah');
    }

    public function home()
    {
        $paket = paket::all();
        return view('home', compact('paket'));
    }

    public function pilih(paket $paket)
    {
        return view('pilih', compact('paket'));
    }

    public function postpilih(Request $request)
    {
        $request->validate([
            'noTelp' => 'required',
            'nama' => 'required',
            'namaPaket' => 'required',
            'harga' => 'required',
        ]);

        carwash::create([
            'noTelp' => $request->noTelp,
            'nama' => $request->nama,
            'namaPaket' => $request->namaPaket,
            'harga' => $request->harga,
        ]);

        return redirect()->route('report');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function report()
    {
        $data = carwash::all();
        return view('report', compact('data'));
    }


    public function printInvoice(carwash $carwash)
    {
        $invoice = [
            'invoice' => $carwash
        ];
        $pdf = PDF::loadView('template-invoice', $invoice);
        return $pdf->download('INV - ' . $carwash->nama . '.pdf');
    }

    public function searchDate(Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $start_date = \Carbon\Carbon::parse($start_date)->startOfDay();
        $end_date = \Carbon\Carbon::parse($end_date)->endOfDay();

        $data = carwash::whereBetween('created_at', [$start_date, $end_date])->get();

        return view('report', compact('data'));
    }

    public function exportPdf(Request $request)
    {

        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $start_date = \Carbon\Carbon::parse($start_date)->startOfDay();
        $end_date = \Carbon\Carbon::parse($end_date)->endOfDay();

        $data = carwash::whereBetween('created_at', [$start_date, $end_date])->get();

        $pdf = PDF::loadView('template-pdf', compact('data'));

        return $pdf->download('data_pelanggan.pdf');
        
    }
}
