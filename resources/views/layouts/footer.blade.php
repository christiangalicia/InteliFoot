<footer class="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
            <div class="footer-col col-lg-3 col-12 about">
                <div class="footer-col-inner">
                    <h3>About</h3>
                    <ul>
                        <li><a href="about.html"><i class="fas fa-caret-right"></i>FAQ</a></li>
                        <li><a href="contact.html"><i class="fas fa-caret-right"></i>Contacto</a></li>
                        <li><a href="privacy.html"><i class="fas fa-caret-right"></i>Aviso de Privacidad</a></li>
         
                    </ul>
                </div><!--//footer-col-inner-->
            </div><!--//foooter-col-->
            <div class="footer-col col-lg-6 col-12 mt-4 mt-lg-0 newsletter">
                <div class="footer-col-inner text-center">
                    <img width="300" class="logo" src="{{url('assets/images/logotipo.png')}}" alt="Logo">
                    
                </div><!--//footer-col-inner-->
            </div><!--//foooter-col--> 
            <div class="footer-col col-lg-3 col-12 mt-4 mt-lg-0 contact">
                <div class="footer-col-inner">
                    <h3>Contacto</h3>
                    <div class="row">
                        <p class="adr  col-lg-12 col-md-4 col-12">
                            <i class="fas fa-map-marker-alt float-start"></i>        
                            <span class="adr-group float-start">       
                                
                                <span class="region">Tehuacan Puebla</span><br>
                                <span class="postal-code">12345-1234</span><br>
                                <span class="country-name">MXN</span>
                            </span>
                        </p>
                        <p class="tel col-lg-12 col-md-4 col-12"><i class="fas fa-phone"></i>{{$contacto->telefono}}</p>
                        <p class="email col-lg-12 col-md-4 col-12"><i class="fas fa-envelope"></i><a href="#">{{$contacto->correo}}</a></p>  
                    </div> 
                </div><!--//footer-col-inner-->            
            </div><!--//foooter-col-->   
            </div>   
        </div>        
    </div><!--//footer-content-->
    <div class="bottom-bar">
        <div class="container">
            <div class="row">
                <small class="copyright col-lg-6 col-12">Copyright @ <a href="#">IntelliFoot.com</a></small>
                <ul class="social float-end col-lg-6 col-12">
                    <li><a href="#" ><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="#" ><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#" ><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="#" ><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li class="row-end"><a href="#" ><i class="fa-brands fa-instagram"></i></a></li> 
                </ul><!--//social-->
            </div><!--//row-->
        </div><!--//container-->
    </div><!--//bottom-bar-->
</footer>