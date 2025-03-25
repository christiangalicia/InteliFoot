@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="row page-row">
        <div class="news-wrapper col-xl-8 col-lg-7 col-12 mb-5">                         
            <article class="news-item">
                @foreach ($catalogo->products as $producto )
                <div class="album-cover">
                    <a href="#"><img class="img-fluid" src="{{$producto->foto}}" alt="" /></a>
                    <div class="desc">
                        <h4><small><a href="#">{{$producto->nombre}}</a></small></h4>
                        <p>{{ Str::words(strip_tags($producto->descripcion), 25, ' ...'); }}</p>
                    </div>
                </div>
                @endforeach
                                    
            </article><!--//news-item-->
        </div><!--//news-wrapper-->
     
        
    </div><!--//page-row-->
</div><!--//page-content-->
@endsection

@section('breadcrumbs')
<header class="page-heading d-flex flex-wrap justify-content-between align-items-center pb-2">
    <h1 class="heading-title">{{$catalogo->nombre}}</h1>
    <div class="breadcrumbs">
        <ul class="breadcrumbs-list mb-0">
            <li class="breadcrumbs-label">Estas Aqui:</li>
            <li><a href="{{route("inicio")}}">Inicio</a><i class="fas fa-angle-right"></i></li>
            <li><a href="#">Catalogo</a><i class="fas fa-angle-right"></i></li>
           <li class="current">{{$catalogo->nombre}}</li>
        </ul>
    </div><!--//breadcrumbs-->
</header><!--//page-heading--> 
@endsection