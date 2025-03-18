<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head> 

<body class="home-page">
    <div class="wrapper">
        <!-- ******HEADER****** --> 
       @include('admin.layouts.header')
        <!--//header-->
        
     
        
        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                @yield('breadcrumbs')
                @yield('content')
                

                </div>
        </div><!--//content-->
    </div><!--//wrapper-->
    
    <!-- ******FOOTER****** --> 
    @include('admin.layouts.footer')
    <!--//footer-->
    
    

 
    <!-- Javascript -->          
    @include('layouts.scripts')  
    
</body>
</html> 

