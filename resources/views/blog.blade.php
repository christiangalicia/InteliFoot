@extends('layouts.app')

@section('content')

<div class="page-content">
    <div class="row page-row">
        <div class="news-wrapper col-xl-8 col-lg-7 col-12 mb-5">   
            @foreach ($posts as $post )
            <article class="news-item page-row has-divider row">       
                <figure class="thumb col-lg-2 col-md-3 col-12">
                    <img class="img-fluid" src="{{$post->foto}}" alt="" />
                </figure>
                <div class="details col-lg-10 col-md-9 col-12">
                    <h3 class="title"><a href="news-single.html">{{$post->titulo}}</a></h3>
                    <p>{{ Str::words($post->post, 25, ' ...'); }}</p>
                    <a class="btn btn-theme read-more" href="{{ route('post', ['id' => $post->id, 'slug' => Str::slug($post->titulo)]) }}">Leer Más<i class="fas fa-chevron-right"></i></a>
                </div>
            </article><!--//news-item-->
            @endforeach                      
           
           
            <nav class="pagination-container text-center">
               {{$posts->onEachSide(3)->links('pagination::bootstrap-5') }}
            </nav>
            
        </div><!--//news-wrapper-->
        <aside class="page-sidebar col-xl-3 offset-xl-1 col-lg-4 offset-lg-1 col-12">                    
            <section class="widget has-divider">
                <h3 class="title">Arcu Aliquet Quam Vel</h3>
                <p>Maecenas nisl urna, condimentum ac justo a, adipiscing hendrerit magna. Fusce pharetra laoreet accumsan. Phasellus elit sapien, consequat vel sapien sit amet, condimentum vulputate odio. Aliquam fringilla justo quis est placerat, eu imperdiet lorem cursus. Curabitur pretium nulla lorem, sed egestas ante vestibulum dignissim.</p>
            </section><!--//widget-->
            <section class="widget has-divider">
                <h3 class="title">Upcoming Events</h3>
                <article class="events-item row page-row">                                    
                        <div class="date-label-wrapper col-auto">
                            <p class="date-label">
                                <span class="month">FEB</span>
                                <span class="date-number">18</span>
                            </p>
                        </div><!--//date-label-wrapper-->
                        <div class="details col-auto">
                            <h5 class="title">Open Day</h5>  
                            <p class="time text-muted">10:00am - 18:00pm<br />East Campus</p>                  
                        </div><!--//details-->                                    
                </article>
                <article class="events-item row page-row">
                    <div class="date-label-wrapper col-auto">
                        <p class="date-label">
                            <span class="month">SEP</span>
                            <span class="date-number">06</span>
                        </p>
                    </div><!--//date-label-wrapper-->
                    <div class="details col-auto">
                        <h5 class="title">E-learning at College Green</h5>   
                        <p class="time text-muted">10:00am - 16:00pm<br />Learning Center</p>                
                    </div><!--//details-->
                </article>
                <article class="events-item row page-row">
                    <div class="date-label-wrapper col-auto">
                        <p class="date-label">
                            <span class="month">JUN</span>
                            <span class="date-number">23</span>
                        </p>
                    </div><!--//date-label-wrapper-->
                    <div class="details col-auto">
                        <h5 class="title">Career Fair</h5>   
                        <p class="time text-muted">09:45am - 16:00pm<br />Library</p>                
                    </div><!--//details-->
                </article>
            </section><!--//widget-->
           
        </aside>
    </div><!--//page-row-->
</div><!--//page-content-->
@endsection

@section('breadcrumbs')
<header class="page-heading d-flex flex-wrap justify-content-between align-items-center pb-2">
    <h1 class="heading-title">Blog</h1>
    <div class="breadcrumbs">
        <ul class="breadcrumbs-list mb-0">
            <li class="breadcrumbs-label">Tu estas aqui:</li>
            <li><a href="index.html">Inicio</a><i class="fas fa-angle-right"></i></li>
            <li class="current">Blog</li>
        </ul>
    </div><!--//breadcrumbs-->
</header><!--//page-heading--> 
@endsection

@e