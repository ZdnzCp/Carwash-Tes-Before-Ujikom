<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\carwash;
use App\Models\paket;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
        paket::create([
            'gambar'=>'img/Osaka.jpeg',
            'paket'=>'PAKET 1',
            'harga'=>25000,
            'deskripsi'=>'Kelebihan dari paket 1 adalah  mobil anda akan dibersihkan
            hanya pada bagian tertentu seperti pada bagian bawah dan bagian atap saja. ini hanya berlaku buat yang mau hemat'
        ]);

        paket::create([
            'gambar'=>'img/chiyokacamata.jpeg',
            'paket'=>'PAKET 2',
            'harga'=>30000,
            'deskripsi'=>'Kelebihan dari paket 2 adalah mobil anda akan dibersihkan pada bagian atap, depan dan bagian bawah
            paket 2 menawarkan hal yang sangat menarik tapi lebih menarik mah paket 3 bro.'
        ]);

        paket::create([
            'gambar'=>'img/osakaberduit.jpeg',
            'paket'=>'PAKET 3',
            'harga'=>50000,
            'deskripsi'=>'Kelebihan dari paket 3 adalah mobil anda akan bersih kinclong seperti ubin mesjid 
            jadi paket 3 lebih direkomendasikan daripada paket 1 & 2. buat yang kaya kaya aja'
        ]);

        


        User::create([
            'name'=>'zaidan',
            'role'=>'admin',
            'email'=>'zaidanbg2@gmail.com',
            'password'=>bcrypt('123')
        ]);

    }
}
