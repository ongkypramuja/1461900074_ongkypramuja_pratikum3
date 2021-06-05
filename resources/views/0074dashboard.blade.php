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
                <a class="nav-link" href="{{url('buku')}}">Buku</a>
            </li>
        </ul>
    </div>
</nav>
    <div class="container mt-3">
        <h2 class="mt-5">Table Rak Buku</h2>
        <form action="{{ url('/') }}" method="">
            <div class="d-flex justify-content-between pt-2">
                <div class="mr-2 mb-2">
                    <input type="text" name="search" id="" class="form-control">
                </div>
                <div class="mr-2 mb-2">
                    <input type="submit" value="apply" class="btn btn-success btn-sm">
                </div>
            </div>
        </form>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Jenis</th>
                 
                </tr>
            </thead>
            <tbody>
                
            @foreach($data as $item)
			<tr>
                <td>{{ $loop->iteration }} </td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->tahun_terbit }}</td>
                <td>{{ $item->jenis }}</td>
                
            </tr>
			@endforeach
            </tbody>
        </table>
    </div>
</body>

<script src="{{ URL::asset('js/app.js') }}"></script>
</html>