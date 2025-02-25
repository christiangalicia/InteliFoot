@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="row">
        <article class="contact-form col-xl-8 col-lg-7 col-12 mb-5">                            
            <h3 class="title">Get in touch</h3>
            <p>We’d love to hear from you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut erat magna. Aliquam porta sem a lacus imperdiet posuere. Integer semper eget ligula id eleifend. </p>
            <form>
                <div class="mb-3">
                    <label class="form-label" for="name">Nombre</label>
                    <input id="name" type="text" class="form-control" placeholder="Ingresa tu nombre">
                </div><!--//form-group-->
                <div class="mb-3">
                    <label class="form-label" for="email">Correo Electrónico<span class="required">*</span></label>
                    <input id="email" type="email" class="form-control" placeholder="Ingresa tu correo electrónico">
                </div><!--//form-group-->
                <div class="mb-3">
                    <label class="form-label" for="phone">Teléfono</label>
                    <input id="phone" type="tel" class="form-control" placeholder="Ingresa tu número de contacto">
                </div><!--//form-group-->
                <div class="mb-3">
                    <label class="form-label" for="message">Mensaje<span class="required">*</span></label>
                    <textarea id="message" class="form-control" rows="12" placeholder="Ingresa tu mensaje aquí..."></textarea>
                </div><!--//form-group-->
                <button type="submit" class="btn btn-theme">Enviar mensaje</button>
            </form>                 
        </article><!--//contact-form-->
        <aside class="page-sidebar col-xl-3 offset-xl-1 col-lg-4 offset-lg-1 col-12">
            <section class="widget has-divider">
                <h3 class="title">Download Prospectus</h3>
                <p>Donec pulvinar arcu lacus, vel aliquam libero scelerisque a. Cras mi tellus, vulputate eu eleifend at, consectetur fringilla lacus. Nulla ut purus.</p>
                <a class="btn btn-theme" href="#"><i class="fas fa-download"></i>Download now</a>
            </section><!--//widget-->   
            
            <section class="widget has-divider">
                <h3 class="title">Postal Address</h3>
                <p class="adr">
                    <span class="adr-group">       
                        <span class="street-address">College Green</span><br>
                        <span class="region">56 College Green Road</span><br>
                        <span class="postal-code">12345-1234</span><br>
                        <span class="country-name">US</span>
                    </span>
                </p>
            </section><!--//widget-->     
            
            <section class="widget">
                <h3 class="title">All Enquiries</h3>
                <p class="tel"><i class="fas fa-phone"></i>Tel: {{$contacto->telefono}}</p>
                <p class="email"><i class="fas fa-envelope"></i>Email: <a href="#">{{$contacto->correo}}</a></p>
            </section>   
        </aside><!--//page-sidebar-->
    </div><!--//page-row-->
    <div class="page-row py-5">
        <article class="map-section">
            <h3 class="title">How to find us</h3>
            <div class="gmap-wrapper mb-5" id="map">
                <!--//You need to embed your own google map below-->
                <!--//Ref: https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.985798395094!2d-2.6051732483185885!3d51.458417179527075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48718ddbdfd292fb%3A0x2f0b60f89b4b6d56!2sUniversity+of+Bristol!5e0!3m2!1sen!2suk!4v1469704137699" width="600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div><!--//gmap-wrapper-->
        </article><!--//map-->
    </div><!--//page-row-->
</div><!--//page-content-->
@endsection

@section('breadcrumbs')
<header class="page-heading d-flex flex-wrap justify-content-between align-items-center pb-2">
    <h1 class="heading-title">Contacto</h1>
    <div class="breadcrumbs">
        <ul class="breadcrumbs-list mb-0">
            <li class="breadcrumbs-label">Estas Aqui:</li>
            <li><a href="index.html">Inicio</a><i class="fas fa-angle-right"></i></li>
           <li class="current">Contacto</li>
        </ul>
    </div><!--//breadcrumbs-->
</header><!--//page-heading--> 
@endsection