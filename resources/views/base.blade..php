@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Ejemplo</h1>
                <p>Este es un ejemplo de una vista.</p>
            </div>
        </div>
    </div>
@endsection

@section('breadcrumbs')
<header class="page-heading d-flex flex-wrap justify-content-between align-items-center pb-2">
    <h1 class="heading-title">Nosotros</h1>
    <div class="breadcrumbs">
        <ul class="breadcrumbs-list mb-0">
            <li class="breadcrumbs-label">Estas Aqui:</li>
            <li><a href="index.html">Inicio</a><i class="fas fa-angle-right"></i></li>
           <li class="current">Ejemplo</li>
        </ul>
    </div><!--//breadcrumbs-->
</header><!--//page-heading--> 
@endsection