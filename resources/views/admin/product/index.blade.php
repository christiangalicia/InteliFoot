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
                <a href="{{ route('productCreate')}}" class="btn btn-primary btn-sm">Nueva Producto</a>
                <table class="table stripe">
                    <tr>
                        <th>NOMBRE</th>
                        <th>CATEGORIA</th>
                        <th>ACCIONES</th>
                    </tr>
               @foreach ($products as $product)
                   <tr>
                    <td>{{$product->nombre}}
                        <br> <img src="{{$product->foto}}" alt="" width="100">
                    </td>
                    <td>{{$product->catalogo->nombre}}</td>
                    <td>
                        <a href="{{ route('productEdit', $product->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('productDestroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este Producto?')">Eliminar</button>
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
    <h1 class="heading-title">Productos</h1>
    <div class="breadcrumbs">
        <ul class="breadcrumbs-list mb-0">
            <li class="breadcrumbs-label">Tu estas aqui:</li>
            <li><a href="{{route('dashboard')}}">Dashboard</a><i class="fas fa-angle-right"></i></li>
            <li class="current">Productos</li>
        </ul>
    </div><!--//breadcrumbs-->
</header><!--//page-heading--> 
@endsection