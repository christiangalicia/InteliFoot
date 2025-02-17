@extends('layouts.app')

@section('content')

<div class="page-content">
    <div class="row page-row">
        <div class="news-wrapper col-xl-8 col-lg-7 col-12 mb-5">                         
            <article class="news-item page-row has-divider row">       
                <figure class="thumb col-lg-2 col-md-3 col-12">
                    <img class="img-fluid" src="assets/images/news/news-thumb-1.jpg" alt="" />
                </figure>
                <div class="details col-lg-10 col-md-9 col-12">
                    <h3 class="title"><a href="news-single.html">Morbi bibendum consectetuer vulputate sollicitudin</a></h3>
                    <p>Morbi bibendum consectetuer, vulputate, sollicitudin, primis ullamcorper vulputate sed risus dis feugiat vel gravida, class enim Mus aliquam ut donec sodales bibendum rutrum dis sit rutrum id eleifend. Dapibus potenti.</p>
                    <a class="btn btn-theme read-more" href="news-single.html">Read more<i class="fas fa-chevron-right"></i></a>
                </div>
            </article><!--//news-item-->
            <article class="news-item page-row has-divider row">       
                <figure class="thumb col-lg-2 col-md-3 col-12">
                    <img class="img-fluid" src="assets/images/news/news-thumb-2.jpg" alt="" />
                </figure>
                <div class="details col-lg-10 col-md-9 col-12">
                    <h3 class="title"><a href="news-single.html">Aenean eleifend ornare nisi id molestie</a></h3>
                    <p>Donec feugiat enim sit amet nisl scelerisque, at sodales eros ullamcorper. Vestibulum nisi nisi, mattis sit amet elementum tincidunt, auctor vel metus. Morbi posuere elit mauris, eu cursus velit faucibus varius. Vestibulum dapibus massa arcu, sed vulputate enim suscipit eget. Mauris euismod orci magna. Nullam et lacinia dui. Sed massa neque, auctor sed nibh vel, congue adipiscing justo.</p>
                    <a class="btn btn-theme read-more" href="news-single.html">Read more<i class="fas fa-chevron-right"></i></a>
                </div>
            </article><!--//news-item-->
            <article class="news-item page-row has-divider row">       
                <figure class="thumb col-lg-2 col-md-3 col-12">
                    <img class="img-fluid" src="assets/images/news/news-thumb-3.jpg" alt="" />
                </figure>
                <div class="details col-lg-10 col-md-9 col-12">
                    <h3 class="title"><a href="news-single.html">Quisque venenatis consequat commodo</a></h3>
                    <p>Curabitur bibendum gravida odio, nec tempus libero varius ut. Nullam augue nibh, posuere nec pretium in, sagittis id magna. Aenean tellus augue, fermentum a purus vitae, adipiscing accumsan enim. Curabitur in leo vel sapien egestas laoreet vitae quis est. Fusce malesuada nulla et elit dictum, et porttitor turpis blandit.</p>
                    <a class="btn btn-theme read-more" href="news-single.html">Read more<i class="fas fa-chevron-right"></i></a>
                </div>
            </article><!--//news-item-->
            <article class="news-item page-row has-divider row">       
                <figure class="thumb col-lg-2 col-md-3 col-12">
                    <img class="img-fluid" src="assets/images/news/news-thumb-4.jpg" alt="" />
                </figure>
                <div class="details col-lg-10 col-md-9 col-12">
                    <h3 class="title"><a href="news-single.html">Donec feugiat enim sit amet nisl scelerisque</a></h3>
                    <p>Vivamus faucibus ullamcorper nunc, non vulputate neque vulputate nec. Vivamus ut ante a diam scelerisque consequat. Maecenas nisl urna, condimentum ac justo a, adipiscing hendrerit magna. Fusce pharetra laoreet accumsan. Phasellus elit sapien, consequat vel sapien sit amet, condimentum vulputate odio.</p>
                    <a class="btn btn-theme read-more" href="news-single.html">Read more<i class="fas fa-chevron-right"></i></a>
                </div>
            </article><!--//news-item-->
            <article class="news-item page-row has-divider row">       
                <figure class="thumb col-lg-2 col-md-3 col-12">
                    <img class="img-fluid" src="assets/images/news/news-thumb-5.jpg" alt="" />
                </figure>
                <div class="details col-lg-10 col-md-9 col-12">
                    <h3 class="title"><a href="news-single.html">Ut eleifend dapibus ligula a ornare</a></h3>
                    <p>Sed hendrerit scelerisque posuere. Sed eu ipsum cursus, vulputate augue nec, lobortis felis. Integer pellentesque rhoncus metus, non aliquet urna pharetra sed. Quisque ultrices justo egestas urna condimentum accumsan.</p>
                    <a class="btn btn-theme read-more" href="news-single.html">Read more<i class="fas fa-chevron-right"></i></a>
                </div>
            </article><!--//news-item-->
            <article class="news-item page-row has-divider row">       
                <figure class="thumb col-lg-2 col-md-3 col-12">
                    <img class="img-fluid" src="assets/images/news/news-thumb-6.jpg" alt="" />
                </figure>
                <div class="details col-lg-10 col-md-9 col-12">
                    <h3 class="title"><a href="news-single.html">Pellentesque sollicitudin leo non lacinia mattis</a></h3>
                    <p>Morbi bibendum consectetuer, vulputate, sollicitudin, primis ullamcorper vulputate sed risus dis feugiat vel gravida, class enim Mus aliquam ut donec sodales bibendum rutrum dis sit rutrum id eleifend. Dapibus potenti.</p>
                    <a class="btn btn-theme read-more" href="news-single.html">Read more<i class="fas fa-chevron-right"></i></a>
                </div>
            </article><!--//news-item-->
            
            <nav class="pagination-container text-center">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" arial-label="previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1<span class="sr-only">(current)</span></a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul><!--//pagination-->
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