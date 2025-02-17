<div class="main-nav-wrapper">
    <div class="container">
        <nav class="main-nav navbar navbar-expand-lg" role="navigation">    
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button><!--//nav-toggle-->
            <div class="navbar-toggler-label d-lg-none">MENU</div>
                      
            <div class="navbar-collapse collapse" id="navbar-collapse">  
                
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="active nav-link" href="{{ url('/') }}">Inicio</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tienda <i class="fas fa-angle-down"></i></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('catalogo/deportivos') }}">Deportivos Inteligentes</a>
                            <a class="dropdown-item" href="{{ url('/urbanos') }}">Urbanos Conectados</a>
                            <a class="dropdown-item" href="{{ url('/ninos') }}">Para Niños </a>     
                            <a class="dropdown-item" href="{{ url('/lujo') }}">De Lujo </a>             
                        </div><!--//dropdown-menu-->
                    </li>
                   
                    <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/tecnologia') }}">Tecnologia</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/nosotros') }}">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contacto') }}">Contacto</a></li>
                </ul><!--//nav-->
                <form class="mobile-search-form d-lg-none mb-3" role="search">
                    <div class="row gx-0">
                        <div class="col-10">
                            <input type="text" class="form-control" placeholder="Search the site...">
                        </div>
                        <div class="col-auto">
                             <button type="submit" class="btn btn-theme">Go</button>
                        </div>
                    </div>
                </form><!--//mobile-search-form-->
            </div><!--//navabr-collapse-->
        
        </nav><!--//main-nav-->
    </div><!--//container-->
</div>