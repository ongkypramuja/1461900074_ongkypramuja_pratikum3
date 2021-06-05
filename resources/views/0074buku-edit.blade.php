<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('buku.index') }}">Buku</a>
            </li>
        </ul>
    </div>
</nav>
    <div class="container mt-3">
        <h2 class="mt-5">Form Buku</h2>
        
        <form action="{{ route('buku.update', $data->id) }}" method="post">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label for="">judul Buku</label>
                <input type="text" name="judul" id="" class="form-control" value="{{ $data->judul }}">
            </div>

            <div class="form-group">
                <label for="">Tahun Terbit</label>
                <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control" value="{{ $data->tahun_terbit }}">
            </div>

            <input type="submit" value="simpan" class="btn btn-success">
        </form>
    </div>
</body>

<script src="{{ URL::asset('js/app.js') }}"></script>
</html>