<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lemon">
</head>
<style>

    .img-card-top{
        margin-left: 100px;
        height: 150px;
    }

    h1{
        font-family: 'Lemon', sans-serif;
    }    

    .card {
    box-shadow: 0 4px 8px black;
    transition: transform 0.2s;
    border-radius: 8px;
    overflow: hidden;
    width: 400px;
    }

    .card:hover {
    transform: scale(1.05);
    }

    .card-title {
    font-weight: bold;
    margin-bottom: 8px;
    }

    .card-description {
    font-size: 1rem;
    color: black;
    margin-bottom: 16px;
    }

    .card-button {
    display: inline-block;
    padding: 8px 16px;
    font-size: 1rem;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    background-color: black;
    color: #fff;
    border-radius: 4px;
    transition: background-color 0.3s;
}

</style>
<body>
    @include('nav')
    <div class="container mt-5">
        <div class="row">
            <h1 style="text-align: center" class="mt-3">PAKET CARWASH CABANG OSAKA</h2>
            @foreach ($paket as $p)
            <div class="card mx-3 mt-5">
                <div class="card-body">
                    <h2 class="card-title" style="text-align: center">{{ $p->paket }}</h2>
                    <img src="{{ $p->gambar }}" alt="" class="img-card-top">
                    <div class="card-body">
                        <p class="card-text mt-3 " style="font-weight: bold">Harga : Rp.{{ number_format($p->harga, 0, ',', '.') }}</p>
                        <p class="card-description">{{ $p->deskripsi }}</p>
                    </div>
                    <a href="{{ route('pilih', $p->id) }}" class="btn btn-warning d-flex w-100 card-button">Pilih</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>