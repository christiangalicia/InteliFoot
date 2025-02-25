<header class="header">  
    <div class="top-bar d-none d-lg-block">
        <div class="container">     
            <div class="row">   
                <ul class="social-icons col-md-6 col-12">
                    <li><a href="{{$contacto->x}}" ><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="{{$contacto->facebook}}" ><i class="fa-brands fa-facebook-f"></i></a></li>
    
                    <li class="row-end"><a href="{{$contacto->instagram}}" ><i class="fa-brands fa-instagram"></i></a></li>             
                </ul><!--//social-icons-->
                <form class="col-md-6 col-12 search-form" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search the site...">
                    </div>
                    <button type="submit" class="btn btn-theme">Go</button>
                </form>    
            </div><!--//row-->     
        </div>      
    </div><!--//to-bar-->
    <div class="header-main container">
        <div class="row justify-content-center justify-content-lg-between">
            <h1 class="logo mb-0 col-auto text-center text-lg-start">
                <a href="index.html"><img id="site-logo" src="{{url("assets/images/logotipo.png ")}}" alt="Logo"></a>
               <span style="font-size: 20px;">Donde cada paso es inteligente.</span>
            </h1><!--//logo-->           
            <div class="info d-none d-lg-flex col-auto flex-column align-items-end">
                
                <ul class="menu-top d-none d-lg-block">
                    <li class="divider"><a href="index.html">Inicio</a></li>
                    <li class="divider"><a href="faq.html">FAQ</a></li>
                    <li><a href="contact.html">Contacto</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="registrar.html">Registrar</a></li>
                </ul><!--//menu-top-->
              
                <div class="contact d-none d-lg-block">
                    <p class="phone"><i class="fas fa-phone"></i>Call us today {{$contacto->telefono}}</p> 
                    <p class="email"><i class="fas fa-envelope"></i><a href="#">{{$contacto->correo}}</a></p>
                </div><!--//contact-->
            </div><!--//info-->
        </div><!--//row-->
    </div><!--//header-main-->
</header>