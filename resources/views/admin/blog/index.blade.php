@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="col-md-8">
                <a href="{{ route('blogCreate')}}" class="btn btn-primary btn-sm">Nueva Publiacion</a>
                <table class="table stripe">
                    <tr>
                        <th>TITULO</th>
                        <th>FECHA</th>
                        <th>ACCIONES</th>
                    </tr>
               @foreach ($posts as $post)
                   <tr>
                    <td>{{$post->titulo}}
                        <br> <img src="{{$post->foto}}" alt="" width="100">
                    </td>
                    <td>{{$post->created_at}}</td>
                    <td>
                        <a href="{{ route('blogEdit', $post->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('blogDestroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este post?')">Eliminar</button>
                        </form>
                    </td>
                   </tr>
               @endforeach
                </table>
            </div>
        </div>
    </div>
    <br><hr>
@endsection

@section('breadcrumbs')
<header class="page-heading d-flex flex-wrap justify-content-between align-items-center pb-2">
    <h1 class="heading-title">Blog</h1>
    <div class="breadcrumbs">
        <ul class="breadcrumbs-list mb-0">
            <li class="breadcrumbs-label">Tu estas aqui:</li>
            <li><a href="{{route('dashboard')}}">Dashboard</a><i class="fas fa-angle-right"></i></li>
            <li class="current">Blog</li>
        </ul>
    </div><!--//breadcrumbs-->
</header><!--//page-heading--> 
@endsection