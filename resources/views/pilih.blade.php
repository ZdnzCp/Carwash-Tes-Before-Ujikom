<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Pilih</title>
</head>
<style>
    .form-control {
        box-shadow: 0 2px 4px black;
        transition: transform 0.2s;
        border-radius: 8px;
        overflow: hidden;
    }

    .form-control:hover {
        transform: scale(1.05);
    }

    .btn {
        box-shadow: 0 2px 4px black;
        transition: transform 0.2s;
        border-radius: 8px;
        overflow: hidden;
    }

    .btn:hover {
        transform: scale(1.05);
    }
</style>

<body>
    <div class="container mt-5">
        <div class="card col-6 mx-auto">
            <div class="card-body">
                <h1 class="text-center">FORM PEMBAYARAN</h1>
                <div class="col-md-7 mx-auto">
                    <form action="{{ route('postpilih') }}" class="form-group" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <label for="" class="mt-3">No Telp.</label>
                        <input type="text" class="form-control mt-1" required name="noTelp">
                        <label for="" class="mt-3">Nama</label>
                        <input type="text" class="form-control mt-1" required name="nama">
                        <label for="" class="mt-3">Paket</label>
                        <input type="text" readonly class="form-control mt-1" name="namaPaket"
                            value="{{ $paket->paket }}">
                        <label for="" class="mt-3">Harga</label>
                        <input type="text" readonly class="form-control mt-1" name="harga" id="harga"
                            value="{{ $paket->harga }}">
                        <label for="" class="mt-3">Nominal yang Diberikan</label>
                        <input type="text" class="form-control mt-1" required id="nominal"
                            oninput="hitungPengurangan()" name="nominal">
                        <label for="" class="mt-3">Kembalian yang Diberikan</label>
                        <input type="text" class="form-control mt-1" required readonly id="kembalian"
                            name="kembalian">
                        <a href="/home" class="btn btn-dark mt-3">Kembali</a>
                        <button type="submit" class="btn btn-primary mt-3">Bayar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
<script>
    function hitungPengurangan() {
        var harga = parseFloat(document.getElementById('harga').value);
        var nominal = parseFloat(document.getElementById('nominal').value);

        var kembalian = nominal - harga;

        // Set nilai hasil ke input dengan id 'kembalian'
        document.getElementById('kembalian').value = kembalian;
    }
</script>



</body>

</html>
