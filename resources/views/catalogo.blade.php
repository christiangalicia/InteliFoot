@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="row page-row">
        <div class="news-wrapper col-xl-8 col-lg-7 col-12 mb-5">                         
            <article class="news-item">
                <p class="meta text-muted">By: <a class="theme-link" href="#">Admin</a> | Posted: 3 days ago</p>
                <p class="featured-image mb-5"><img class="img-fluid" src="{{ url('assets/images/news/news-1.jpg') }}" alt="" /></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum pellentesque urna. Phasellus adipiscing et massa et aliquam. Ut odio magna, interdum quis dolor non, tristique vestibulum nisi. Nam accumsan convallis venenatis. Nullam posuere risus odio, in interdum felis venenatis sagittis. Integer malesuada porta fermentum. Sed luctus nibh sed mi auctor imperdiet. Cras et sapien rhoncus, pulvinar dolor sed, tincidunt massa. Nullam fringilla mauris non risus ultricies viverra. Donec a turpis non lorem pulvinar posuere.</p>

<p>Nulla facilisi. Aenean interdum iaculis odio, et suscipit lorem euismod et. Sed nec orci suscipit, accumsan mauris nec, vestibulum felis. Nam eu felis sem. Fusce ut odio ipsum. Duis orci ipsum, feugiat ac dignissim in, convallis quis tortor. Mauris semper tortor nec justo adipiscing volutpat. Donec suscipit rhoncus est, vitae pretium purus laoreet et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed iaculis risus felis, sit amet porta urna volutpat vel. Integer vestibulum, neque a condimentum fermentum, est nunc tincidunt nunc, eget sagittis turpis elit nec arcu. Curabitur tempus mauris vitae dignissim vehicula. Fusce vehicula malesuada aliquam.</p>

<p>Nullam consequat lectus eget fringilla ultricies. Suspendisse potenti. Morbi in malesuada nibh. Morbi vel tellus eu magna tempor mattis. Praesent ut turpis feugiat, dignissim ipsum et, pharetra orci. Nullam in congue felis. Donec commodo metus metus, at faucibus purus convallis ac. Nullam quis tortor urna. In commodo metus sed tempus venenatis. Integer euismod consectetur lobortis. Mauris blandit in massa in rhoncus. Aliquam sit amet sollicitudin nulla. Ut nec mauris facilisis, pretium enim et, tristique risus. Fusce a ligula in velit congue hendrerit eu eget tortor.</p>  
<ul class="custom-list-style my-5">
<li><i class="fas fa-check mr-2"></i>Lorem ipsum dolor sit amet.</li>
<li><i class="fas fa-check mr-2"></i>Aliquam tincidunt mauris eu risus.</li>
<li><i class="fas fa-check mr-2"></i>Ultricies eget vel aliquam libero.</li>
<li><i class="fas fa-check mr-2"></i>Lorem ipsum dolor sit amet.</li>
<li><i class="fas fa-check mr-2"></i>Aliquam tincidunt mauris eu risus.</li>
<li><i class="fas fa-check mr-2"></i>Ultricies eget vel aliquam libero.</li>
</ul>
<p>Nullam consequat lectus eget fringilla ultricies. Suspendisse potenti. Morbi in malesuada nibh. Morbi vel tellus eu magna tempor mattis. Praesent ut turpis feugiat, dignissim ipsum et, pharetra orci. Nullam in congue felis. Donec commodo metus metus, at faucibus purus convallis ac. Nullam quis tortor urna. In commodo metus sed tempus venenatis. Integer euismod consectetur lobortis. Mauris blandit in massa in rhoncus. Aliquam sit amet sollicitudin nulla. Ut nec mauris facilisis, pretium enim et, tristique risus. Fusce a ligula in velit congue hendrerit eu eget tortor.</p> 
<p class="box">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id nulla at libero ultricies tempus. Duis porta justo quam, ut ultrices felis posuere sit amet. Sed imperdiet bibendum est, sit amet sagittis ante sagittis eu. Ut consequat volutpat sapien sed lobortis. Nullam laoreet vitae justo nec dignissim. <a href="#">Integer fringilla a purus sit amet laoreet.</a>
</p>                       
            </article><!--//news-item-->
        </div><!--//news-wrapper-->
        <aside class="page-sidebar  col-xl-3 offset-xl-1 col-lg-4 offset-lg-1 col-12">                    
            <section class="widget has-divider">
                <h3 class="title">Latest News</h3>
                <article class="news-item row gx-3 align-items-center ">       
                    <figure class="thumb col-auto">
                        <img src="{{ url('assets/images/news/news-thumb-1.jpg') }}" alt="" >
                    </figure>
                    <div class="details col-8">
                        <h4 class="title"><a href="news-single.html">Morbi bibendum consectetuer vulputate sollicitudin</a></h4>
                    </div>
                </article><!--//news-item-->
                <article class="news-item row gx-3 align-items-center">       
                    <figure class="thumb col-auto">
                        <img src="{{ url('assets/images/news/news-thumb-2.jpg') }}" alt="" >
                    </figure>
                    <div class="details col-8">
                        <h4 class="title"><a href="news-single.html">Sed tincidunt urna eget turpis pretium hendrerit</a></h4>
                    </div>
                </article><!--//news-item-->
                <article class="news-item row gx-3 align-items-center">       
                    <figure class="thumb col-auto">
                        <img src="{{ url('assets/images/news/news-thumb-3.jpg') }}" alt="" >
                    </figure>
                    <div class="details col-8">
                        <h4 class="title"><a href="news-single.html">Duis scelerisque erat iaculis</a></h4>
                    </div>
                </article><!--//news-item-->
                <article class="news-item row gx-3 align-items-center">       
                    <figure class="thumb col-auto">
                        <img src="{{ url('assets/images/news/news-thumb-4.jpg') }}" alt="" >
                    </figure>
                    <div class="details col-8">
                        <h4 class="title"><a href="news-single.html">Duis scelerisque erat iaculis</a></h4>
                    </div>
                </article><!--//news-item-->
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
    <h1 class="heading-title">Deportivo</h1>
    <div class="breadcrumbs">
        <ul class="breadcrumbs-list mb-0">
            <li class="breadcrumbs-label">Estas Aqui:</li>
            <li><a href="/inicio">Inicio</a><i class="fas fa-angle-right"></i></li>
            <li><a href="#">Catalogo</a><i class="fas fa-angle-right"></i></li>
           <li class="current">Deportivo</li>
        </ul>
    </div><!--//breadcrumbs-->
</header><!--//page-heading--> 
@endsection