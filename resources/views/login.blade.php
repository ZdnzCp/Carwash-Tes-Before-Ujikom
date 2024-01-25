<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login</title>
</head>
<body class="bg-dark">
    <div class="container mt-5 col-4">
        <div class="card mt-5 bg-warning">
            <h1 style="text-align: center;" class="mt-2">LOGIN</h1>
            <form action="{{ route('postlogin') }}" class="form-group" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="email">Masukan Email</label>
                <input type="email" class="form-control bg-dark text-warning" name="email">
                <label for="password" class="mt-3">Masukan Password</label>
                <input type="password" class="form-control bg-dark text-warning" name="password"> 
                @if (Session::has('notif'))
                    <p style="color: red">{{ Session::get('notif') }}</p>
                @endif
                <button class="btn btn-dark mt-3 mb-3 text-warning">Login</button>
            </form>
        </div>
    </div>
</body>
</html>