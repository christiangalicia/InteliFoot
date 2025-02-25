@extends('layouts.app')

@section('content')

<div class="page-content">
    <div class="row page-row">
        <div class="news-wrapper col-xl-12 col-lg-12 col-12 mb-5">   
            
            <article class="news-item page-row has-divider row">       
                
                
                    <img class="img-fluid" src="{{$post->foto}}" alt="" />
                
                    
                <div class="details col-lg-10 col-md-9 col-12">
                    
                    
                    <p>{{$post->post}}</p>
                    
                </div>
            </article><!--//news-item-->
                            
           
           
           
            
        </div><!--//news-wrapper-->
      
    </div><!--//page-row-->
</div><!--//page-content-->
@endsection

@section('breadcrumbs')
<header class="page-heading d-flex flex-wrap justify-content-between align-items-center pb-2">
    <h1 class="heading-title">{{$post->titulo}}</h1>
    <div class="breadcrumbs">
        <ul class="breadcrumbs-list mb-0">
            <li class="breadcrumbs-label">Tu estas aqui:</li>
            <li><a href="index.html">Inicio</a><i class="fas fa-angle-right"></i></li>
            <li class="current">Blog</li>
        </ul>
    </div><!--//breadcrumbs-->
</header><!--//page-heading--> 
@endsection