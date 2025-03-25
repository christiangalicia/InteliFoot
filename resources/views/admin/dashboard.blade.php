@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Dashboard</h1>
                <p>Welcome to the admin dashboard</p>

                <div class="card page-row">
                    <div class="card-header">
                        <h3 class="card-title"><a href="{{route("blogIndex")}}">Blog</a> <span class="badge badge-success float-end">Blog</span></h3>
                        
                    </div>
                    <div class="card-body">
                        <p>Seccion Blog, para actualizar agregar y eliminar publicaciones </p>
                       
                    </div>
                    
                   
                </div>
                <div class="card page-row">
                    <div class="card-header">
                        <h3 class="card-title"><a href="{{route("productIndex")}}">Catalogo de productos</a> <span class="badge badge-success float-end">Blog</span></h3>
                        
                    </div>
                    <div class="card-body">
                        <p>Seccion Catalago de productos, para actualizar agregar y eliminar publicaciones </p>
                       
                    </div>
                    
                   
                </div>
                <div class="card page-row">
                    <div class="card-header">
                        <h3 class="card-title"><a href="#">Catalogo</a> <span class="badge badge-success float-end">Blog</span></h3>
                        
                    </div>
                    <div class="card-body">
                        <p>Seccion Catalogo, para actualizar agregar y eliminar publicaciones </p>
                       
                    </div>
                    
                   
                </div>

            </div>
        </div>
    </div>
    <br><hr>
@endsection

@section('breadcrumbs')

@endsection