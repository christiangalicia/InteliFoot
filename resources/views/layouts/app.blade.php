<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head> 

<body class="home-page">
    <div class="wrapper">
        <!-- ******HEADER****** --> 
       @include('layouts.header')
        <!--//header-->
        
        <!-- ******NAV****** -->
        @include('layouts.nav')
        <!--//main-nav-container-->
        
        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                @yield('breadcrumbs')
                @yield('content')
                

                </div>
        </div><!--//content-->
    </div><!--//wrapper-->
    
    <!-- ******FOOTER****** --> 
    @include('layouts.footer')
    <!--//footer-->
    
    

 
    <!-- Javascript -->          
    @include('layouts.scripts')  

</body>
</html> 

