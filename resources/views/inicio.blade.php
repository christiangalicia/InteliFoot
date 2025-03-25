@extends('layouts.app')

@section('content')
<div id="promo-carousel" class="promo-carousel carousel slide">
    <div class="carousel-indicators">
        @foreach ($slider as $s )
        <button type="button" data-bs-target="#promo-carousel" data-bs-slide-to="{{$loop->index}}" 
            class="{{$loop->first ? 'active': ''}}" aria-current="true" aria-label="Slide {{$loop->index+1}}"></button>
        @endforeach
       
    </div>
    <div class="carousel-inner slides">

        @foreach ($slider as $s )
        <div class="carousel-item {{$loop->first ? 'active': ''}}" style="background-image: url({{$s["slider"]}});">
            <div class="carousel-caption text-start">
                @if ($s["titulo"] != "")
                <span class="main" >{{$s["titulo"]}}</span>
                @endif
                <br />
                @if($s["subtitulo"] != "")
                <span class="secondary" >{{$s["subtitulo"]}}</span>
                @endif
            </div>
        </div>
        @endforeach


      

    </div><!--//carousel-inner-->
    <button class="carousel-control-prev d-none d-lg-inline-block" type="button" data-bs-target="#promo-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
    <button class="carousel-control-next d-none d-lg-inline-block" type="button" data-bs-target="#promo-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div><!--//promo-carousel-->
<section class="promo box box-dark">     
    <div class="row gx-5 justify-content-between align-content-center">  
        <div class="col-lg-9 col-12 mb-2 mb-lg-0">
            <h1 class="section-heading">¡Descubre el futuro del calzado! 🚀</h1>
            <p>Compra ahora y convierte cada paso en una experiencia inteligente. 👉 Solo hoy: Envío gratis + Guía de conectividad IoT"  </p>   
        </div>  
        <div class="col-lg-3 col-12 mb-2">
            <button class="button">
                Comprar
                <svg class="icon" viewBox="0 0 24 24" fill="currentColor">
                  <path
                    fill-rule="evenodd"
                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
            
        </div>
    </div><!--//row-->
</section><!--//promo-->

<section id="productosDestacados">
    <div class="page-row">
        <h1 class="section-heading text-highlight">Productos Destacados</h1>
    </div>
    <div class="row ">
        @foreach ($productos as $producto )
        <div class="col-md-4 col-12 text-center">
            <div class="album-cover">
                <a href="#"><img class="img-fluid" src="{{$producto->foto}}" alt="" /></a>
                <div class="desc">
                    <h4><small><a href="#">{{$producto->nombre}}</a></small></h4>
                    <p>{{ Str::words(strip_tags($producto->descripcion), 25, ' ...'); }}</p>
                </div>
            </div>
        </div>
        @endforeach
       
        
    </div>
</section>

<section class="news">
    <h1 class="section-heading text-highlight"><span class="line">Ultimas Publicacion</span></h1>     
   
    <div class="section-content ">
        <div id="news-carousel" class="news-carousel carousel slide">
            <div class="carousel-inner">
                <div class="item carousel-item active"> 
                    @foreach ($posts as $post )
                        @if($loop->index  == 0 || $loop->index  == 3)
                            <div class="row">
                        @endif
                        <div class="col-lg-4 col-12 news-item">
                            <h2 class="title"><a href="{{route("post",["id"=>$post->id,'slug' => Str::slug($post->titulo)])}}">{{$post->titulo}}</a></h2>
                            <img class="thumb2" src="{{$post->foto}}"  alt="" />
                            {{ Str::words(strip_tags($post->post), 30, ' ...') }}
                            <a class="read-more" href="{{route("post",["id"=>$post->id,'slug' => Str::slug($post->titulo)])}}">Leer Más<i class="fas fa-chevron-right"></i></a>                
                        </div><!--//news-item-->
                        @if($loop->index  == 2 || $loop->index  == 5)
                            </div>
                        @endif
                        
                    @endforeach
                   
                </div><!--//item-->
               
            </div><!--//carousel-inner-->
        </div><!--//news-carousel-->  
    </div><!--//section-content-->     
</section><!--//news-->

@endsection

@section('breadcrumbs')

@endsection