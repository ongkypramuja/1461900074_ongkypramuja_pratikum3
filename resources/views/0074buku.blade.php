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
        <h2 class="mt-5">Buku</h2>
        
        <a href="{{ route('buku.create') }}" class="btn btn-success m2 p2"> Create </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Buku</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col"></th>
                 
                </tr>
            </thead>
            <tbody>
                
            @foreach($data as $item)
			<tr>
                <td>{{ $loop->iteration }} </td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->tahun_terbit }}</td>
                <td>
                    <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-primary btn-sm">edit</a>
                    
                    <form method="POST" action="{{ route('buku.destroy', $item->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="submit" class="btn btn-danger delete-buku  btn-sm" value="delete">
                    </form>
                </td>
            </tr>
			@endforeach
            </tbody>
        </table>
    </div>
</body>

<script src="{{ URL::asset('js/app.js') }}"></script>
</html>