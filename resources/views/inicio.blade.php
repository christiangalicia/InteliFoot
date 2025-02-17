@extends('layouts.app')

@section('content')
<div id="promo-carousel" class="promo-carousel carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#promo-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#promo-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner slides">
        <div class="carousel-item slide-1 active">
            <div class="carousel-caption text-start">
                <span class="main" >Titulo principal</span>
                <br />
                <span class="secondary" >Contenido Adicional</span>
            </div>
        </div>
        <div class="carousel-item slide-2">
            <div class="carousel-caption text-start">
               
            </div>
        </div>

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
        <div class="col-md-4 col-12 text-center">
            <div class="album-cover">
                <a href="producto.html"><img class="img-fluid" src="assets/images/productos/p1.jpg" alt="" /></a>
                <div class="desc">
                    <h4><small><a href="#">UrbanLink Series: Estilo y conexión en cada paso</a></small></h4>
                    <p>Zapatos que combinan moda urbana con tecnología de vanguardia. Los UrbanLink Series se conectan a tu teléfono para notificarte llamadas, mensajes y direcciones GPS, todo mientras mantienes un estilo impecable.</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-12 text-center">
            <div class="album-cover">
                <a href="producto.html"><img class="img-fluid" src="assets/images/productos/p2.jpg" alt="" /></a>
                <div class="desc">
                    <h4><small><a href="#">SafeTech Work: Protección inteligente para ambientes desafiantes</a></small></h4>
                    <p>Zapatos industriales diseñados para entornos de alto riesgo. Los SafeTech Work incluyen sensores IoT que detectan caídas, temperaturas extremas y riesgos químicos.</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-12 text-center">
            <div class="album-cover">
                <a href="producto.html"><img class="img-fluid" src="assets/images/productos/p3.jpg" alt="" /></a>
                <div class="desc">
                    <h4><small><a href="#">NexStep Pro: Domina tu entrenamiento con tecnología IoT</a></small></h4>
                    <p>¡Lleva tu rendimiento al siguiente nivel! Los NexStep Pro son zapatos deportivos diseñados para atletas y amantes del fitness. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news">
    <h1 class="section-heading text-highlight"><span class="line">Ultimas Publicacion</span></h1>     
    <div class="carousel-controls">
        <a class="prev" href="#news-carousel" data-bs-slide="prev"><i class="fas fa-caret-left"></i></a>
        <a class="next" href="#news-carousel" data-bs-slide="next"><i class="fas fa-caret-right"></i></a>
    </div><!--//carousel-controls--> 
    <div class="section-content ">
        <div id="news-carousel" class="news-carousel carousel slide">
            <div class="carousel-inner">
                <div class="item carousel-item active"> 
                    <div class="row">
                        <div class="col-lg-4 col-12 news-item">
                            <h2 class="title"><a href="post.html">StepTech Revolution: Tus Zapatos Ahora Son Tu Entrenador Personal</a></h2>
                            <img class="thumb2" src="assets/images/news/new1.jpg"  alt="" />
                            <p>Acabamos de lanzar los StepTech Pro, zapatos deportivos con sensores IoT que miden en tiempo real tu velocidad, postura y calorías quemadas.</p>
                            <a class="read-more" href="post.html">Leer Más<i class="fas fa-chevron-right"></i></a>                
                        </div><!--//news-item-->
                        <div class="col-lg-4 col-12 news-item">
                            <h2 class="title"><a href="post.html">UrbanLink X: Nunca Más Te Pierdes en la Ciudad</a></h2>
                            <img class="thumb2" src="assets/images/news/new2.jpg"  alt="" />
                            <p>Los zapatos UrbanLink X están agotándose rápidamente. Con GPS integrado y alertas de tráfico en tiempo real</p>
                            <a class="read-more" href="post.html">Leer Más<i class="fas fa-chevron-right"></i></a>                
                        </div><!--//news-item-->
                        <div class="col-lg-4 col-12 news-item">
                            <h2 class="title"><a href="post.html">SafeTech Alert: La Tecnología que Protege a los Trabajadores</a></h2>
                            <img class="thumb2" src="assets/images/news/new3.jpg"  alt="" />
                            <p>Presentamos los SafeTech Work 2.0, zapatos industriales con sensores IoT que detectan caídas, fugas químicas y riesgos eléctricos. ¡</p>
                            <a class="read-more" href="post.html">Leer Más<i class="fas fa-chevron-right"></i></a>                
                        </div><!--//news-item-->
                    </div><!--//row-->
                </div><!--//item-->
               
            </div><!--//carousel-inner-->
        </div><!--//news-carousel-->  
    </div><!--//section-content-->     
</section><!--//news-->

@endsection

@section('breadcrumbs')

@endsection