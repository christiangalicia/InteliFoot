@extends('layouts.app')

@section('content')
<div class="featured-courses tabbed-info page-row">             
    <ul class="nav nav-tabs">
      <li class="nav-item"><a class="nav-link " href="#tab1" data-bs-toggle="tab">Sensores IoT</a></li>
      <li class="nav-item"><a class="nav-link" href="#tab2" data-bs-toggle="tab">Moonwalkers</a></li>
      <li class="nav-item"><a class="nav-link" href="#tab3" data-bs-toggle="tab">Industrial 4.0</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="tab1">
          <div class="row text-center">
            Calzado equipado con sensores IoT que monitorean la postura, presión plantar, ritmo cardíaco y patrones de movimiento. Los datos se sincronizan con una app móvil para ofrecer recomendaciones personalizadas de entrenamiento, corrección de postura o prevención de lesiones.
          </div><!--//row-->
      </div>
      <div class="tab-pane" id="tab2">
          <div class="row text-center">
            Zapatos con ruedas motorizadas y tecnología de inteligencia artificial que triplican la velocidad al caminar. Diseñados para desplazamientos urbanos, se adaptan al ritmo del usuario y evitan colisiones mediante sensores de proximidad.
          </div><!--//row-->
      </div>
      <div class="tab-pane" id="tab3">
          <div class="row text-center">
            Calzado industrial fabricado con impresión 3D y materiales avanzados (poliuretano termoplástico, nailon reforzado), adaptado a las necesidades específicas de cada trabajador. Incluye sensores IoT para detectar riesgos como temperaturas extremas o fugas químicas.
          </div><!--//row-->
      </div>
    </div>
</div><!--//featured-courses-->
@endsection

@section('breadcrumbs')
<header class="page-heading d-flex flex-wrap justify-content-between align-items-center pb-2">
    <h1 class="heading-title">Tecnologia</h1>
    <div class="breadcrumbs">
        <ul class="breadcrumbs-list mb-0">
            <li class="breadcrumbs-label">Estas Aqui:</li>
            <li><a href="index.html">Inicio</a><i class="fas fa-angle-right"></i></li>
           <li class="current">Tecnologia</li>
        </ul>
    </div><!--//breadcrumbs-->
</header><!--//page-heading--> 
@endsection