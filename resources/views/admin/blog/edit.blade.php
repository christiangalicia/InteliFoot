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
            <form action="{{ route('blogUpdate',["id"=>$post->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" value="{{$post->titulo}}" name="titulo" id="titulo" class="form-control" placeholder="Ingrese el título" required>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <img src="{{$post->foto}}" alt="" width="100">  
                    <input type="file" name="foto" id="foto" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="post">Post</label>
                    <textarea name="post" id="editor1" class="form-control" 
                    rows="5"  required>
                    {{$post->post}}
                </textarea>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox"  {{$post->destacado ? "checked" : ""}} name="destacado" id="destacado" class="form-check-input">
                    <label for="destacado"
                   
                     class="form-check-label">Destacado</label>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar Publicación</button>
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
    <h1 class="heading-title">Blog</h1>
    <div class="breadcrumbs">
        <ul class="breadcrumbs-list mb-0">
            <li class="breadcrumbs-label">Tu estas aqui:</li>
            <li><a href="{{route('dashboard')}}">Dashboard</a><i class="fas fa-angle-right"></i></li>
            <li><a href="{{route('blogIndex')}}">Blog</a><i class="fas fa-angle-right"></i></li>
            <li class="current">Crear Publiacaion</li>
        </ul>
    </div><!--//breadcrumbs-->
</header><!--//page-heading--> 
@endsection