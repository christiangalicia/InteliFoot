@extends('layouts.app')

@section('content')
<div class="team-wrapper col-xl-8 col-lg-7 col-12 mb-5">        
    <div class="row page-row" >
        <figure class="thumb col-xl-3 col-lg-4 col-12">
            <img class="img-fluid" src="assets/images/team/team-1.jpg" alt="" />
        </figure>
        <div class="details col-xl-9 col-lg-8 col-12">
            <h3 class="title">Dr. Dan Scarsbrook</h3>
            <h4>Principle</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquam, tellus id pellentesque viverra, metus lacus lobortis augue, sed malesuada urna sapien id orci. Maecenas pharetra mauris quis tincidunt egestas. Sed condimentum felis quis nulla varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam diam diam, porttitor quis mollis non, suscipit id tellus. Nullam a ultrices sem, vel tincidunt felis. Sed eu suscipit erat. Nam malesuada, leo porta rhoncus blandit, ipsum tellus fringilla mi, ac pretium nisl turpis sit amet purus. Mauris pellentesque tincidunt lacus commodo lobortis. Nulla consectetur scelerisque molestie.</p>                                 
        </div>                               
    </div>
    <div class="row page-row" >
        <figure class="thumb col-xl-3 col-lg-4 col-12">
            <img class="img-fluid" src="assets/images/team/team-4.jpg" alt="" />
        </figure>
        <div class="details col-xl-9 col-lg-8 col-12">
            <h3 class="title">Dr. Tracey Adams</h3>
            <h4>Deputy Principle</h4>
            <p>Pellentesque eu bibendum massa. Morbi et metus adipiscing libero lobortis accumsan ac eget turpis. Duis vehicula, velit sit amet vehicula gravida, nibh dui cursus risus, eget tristique tortor dolor id ligula. Integer id iaculis ante. In massa dolor, consequat quis sodales vel, cursus sed ligula. Sed neque est, pharetra ac enim ut, dignissim molestie tellus. Cras luctus est sit amet dui condimentum, eu varius tellus molestie. Curabitur eleifend faucibus pharetra. Mauris non elit dui.</p>                                    
        </div>                               
    </div>
    <div class="row page-row" >
        <figure class="thumb col-xl-3 col-lg-4 col-12">
            <img class="img-fluid" src="assets/images/team/team-3.jpg" alt="" />
        </figure>
        <div class="details col-xl-9 col-lg-8 col-12">
            <h3 class="title">Ms. Lisa Richards</h3>
            <h4>Assistant Principle</h4>
            <p>Donec justo magna, mattis a ipsum in, pretium aliquet dolor. Vestibulum rhoncus dolor placerat diam laoreet dictum. Integer auctor augue eget nibh ultrices, vitae fermentum est vehicula. Nullam suscipit metus felis. Ut arcu ante, mollis quis urna in, facilisis placerat leo. Duis auctor diam at quam laoreet, vitae blandit mi fermentum. Fusce mollis pellentesque sem, non eleifend nisl. Suspendisse nisi nulla, consectetur sed pellentesque vitae.</p>                                    
        </div>                               
    </div>
    <div class="row page-row" >
        <figure class="thumb col-xl-3 col-lg-4 col-12">
            <img class="img-fluid" src="assets/images/team/team-2.jpg" alt="" />
        </figure>
        <div class="details col-xl-9 col-lg-8 col-12">
            <h3 class="title">Ms. Debbie Heal</h3>
            <h4>Assistant Principle</h4>
            <p>Suspendisse tempus, nibh vel facilisis eleifend, ante lorem ultricies erat, id blandit mauris felis ac elit. Mauris et placerat massa. Duis nec tellus dui. Nullam facilisis lectus a nunc feugiat interdum. Fusce et sem a diam accumsan aliquam. Fusce eu hendrerit massa. Integer eget facilisis metus. Quisque vel lectus sed neque cursus auctor vitae sed nisi. Integer augue mauris, scelerisque sit amet suscipit sit amet, scelerisque in felis. Aenean lacus magna, vestibulum eu pulvinar sed, posuere nec neque.</p>                                    
        </div>                               
    </div>
</div><!--//team-wrapper-->
@endsection

@section('breadcrumbs')
<header class="page-heading d-flex flex-wrap justify-content-between align-items-center pb-2">
    <h1 class="heading-title">Nosotros</h1>
    <div class="breadcrumbs">
        <ul class="breadcrumbs-list mb-0">
            <li class="breadcrumbs-label">Estas Aqui:</li>
            <li><a href="index.html">Inicio</a><i class="fas fa-angle-right"></i></li>
           <li class="current">Nosotros</li>
        </ul>
    </div><!--//breadcrumbs-->
</header><!--//page-heading--> 
@endsection