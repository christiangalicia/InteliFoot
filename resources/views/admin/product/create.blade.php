@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md-8">
            <form action="{{ route('productStore') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto" required>
            </div>

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="editor1" name="descripcion" rows="5" placeholder="Descripción del producto" required></textarea>
            </div>

            <div class="form-group">
                <label for="talla">Talla</label>
                <select class="form-control" id="talla" name="talla" required>
                    <option value="ch">CH</option>
                    <option value="md">MD</option>
                    <option value="gd">GD</option>
                </select>
            </div>

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" placeholder="Precio del producto" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="destacado">Destacado</label>
                <select class="form-control" id="destacado" name="destacado" required>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="category">Categoría</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="">Seleccione una categoría</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->nombre }}</option>
                    @endforeach
                </select>
            </div>
                <button type="submit" class="btn btn-primary">Crear Publicación</button>
            </form>
            </div>
        </div>
    </div>
    <br><hr>
@endsection

@section("script")
<script src="{{url("assets/ckeditor/ckeditor.js")}}"></script>
<script>

    CKEDITOR.replace( 'editor1' );
    
</script>
@endsection

@section('breadcrumbs')
<header class="page-heading d-flex flex-wrap justify-content-between align-items-center pb-2">
    <h1 class="heading-title">Producto</h1>
    <div class="breadcrumbs">
        <ul class="breadcrumbs-list mb-0">
            <li class="breadcrumbs-label">Tu estas aqui:</li>
            <li><a href="{{route('dashboard')}}">Dashboard</a><i class="fas fa-angle-right"></i></li>
            <li><a href="{{route('productIndex')}}">Producto</a><i class="fas fa-angle-right"></i></li>
            <li class="current">Crear Producto</li>
        </ul>
    </div><!--//breadcrumbs-->
</header><!--//page-heading--> 
@endsection