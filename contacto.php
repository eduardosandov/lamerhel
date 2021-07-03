<!DOCTYPE html>
<html lang="en">
<head>

     <title>LabLamerhel</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/estilos.css">


     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
     <link rel="stylesheet" href="css/templatemo-stylee.css">

     <!-- Additional CSS Files -->
     <link rel="stylesheet" href="assets/css/fontawesome.css">
     <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
     <link rel="stylesheet" href="assets/css/animated.css">
     <link rel="stylesheet" href="assets/css/owl.css">
</head>
<script type="text/javascript">
     (function () {
       var options = {
         facebook: "lamerhel", // Facebook page ID
         whatsapp: "+52 9991940078", // WhatsApp number
         call_to_action: "", // Call to action
         button_color: "#33cc33", // Color of button
         position: "right", // Position may be 'right' or 'left'
         order: "facebook,whatsapp", // Order of buttons
       };
       var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
       var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
       s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
       var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
     })();
   </script>
   
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>               
          </div>
     </section>
     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">
               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>
                    <img href="index.html" src="./images/logo-navbar.png" alt="">
               </div>
               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="./index.html" class="smoothScroll">INICIO</a></li>
                         <li><a href="./index.html#about" class="smoothScroll">NOSOTROS</a></li>
                         <li><a href="./index.html#portafolio" class="smoothScroll">SERVICIOS</a></li>
                         <li><a href="./index.html#appointment" class="smoothScroll">CONTACTO</a></li>                         
                    </ul>
               </div>
          </div>
     </section>

     <!-- HOME -->
     

     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">
                    <div class="col-md-6 col-sm-6">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post">
                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>CONTACTO</h2>
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Nombres</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Correo</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                   </div>
                                   <div class="col-md-12 col-sm-12">
                                        <label for="select">Selecciona algun servicio</label>
                                        <select name="asunto" class="form-control">
                                             <option>-	Análisis microbiológicos de alimentos</option>
                                             <option>-	Análisis microbiológicos de superficies y ambientes</option>
                                             <option>-	Análisis microbiológicos de agua</option>
                                             <option>-	Asesoría</option>
                                             <option>-	Otros</option>
                                        </select>
                                   </div>
                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Celular</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Telefono">
                                        <label for="msg">Mensaje</label>
                                        <textarea class="form-control" rows="5" id="msg" name="msg" placeholder="Mensaje"></textarea>
                                        <input type="submit" class="form-control" id="btnSend" name="enviar">Enviar</button>
                                   </div>
                              </div>
                        </form>
                        <?php 
                        include("enviar.php")
                        ?>
                    </div>
               </div>
          </div>
     </section>

     <!-- GOOGLE MAP -->
     <section id="google-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.85238533764087!2d-89.62408128663103!3d20.96704112845531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56715cab450d17%3A0x5dfc155715abeb09!2zTcOpcmlkYSwgWXVjLg!5e0!3m2!1ses!2smx!4v1619667332652!5m2!1ses!2smx" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     </section>           


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="footer-top">
               <div class="container">
                 <div class="row">
         
                   <div class="col-lg-4 col-md-4 footer-contact">
                     <h3 class="wow fadeInUp" data-wow-delay="0.4s">Dirección</h3>
                     <p>
                         Calle 87, No. 408,   <br>
                         Nueva Kukulcán. C.P 97195,<br>
                         Mérida, Yucatán  <br><br>
                       <strong>Telefonos:</strong> 999 374 67 63 /  <br>
                       999 31 62 39
                       <br>
                       <strong>Email:</strong> atencionaclientes@lamerhel.com<br>
                     </p>
                   </div>
         
                   <div class="col-lg-4 col-md-4 footer-links">
                     <h3 class="wow fadeInUp" data-wow-delay="0.4s">Accesos</h3>
                     <ul>
                       <li><i class="bx bx-chevron-right"></i> <a href="#home">Inicio</a></li>
                       <li><i class="bx bx-chevron-right"></i> <a href="#team">Quienes Somos</a></li>
                       <li><i class="bx bx-chevron-right"></i> <a href="#hero">Servicios</a></li>
                       <li><i class="bx bx-chevron-right"></i> <a href="#servicee">Parametros</a></li>
                       <li><i class="bx bx-chevron-right"></i> <a href="./contacto.html">Contacto</a></li>
                     </ul>
                   </div>
         

                   <div class="col-md-4 col-sm-4"> 
                    <div class="footer-thumb">
                         <div class="opening-hours">
                              <h3 class="wow fadeInUp" data-wow-delay="0.4s">Horario de Servicios</h3>
                              <p>Lunes - Viernes <span>06:00 AM - 10:00 PM</span></p>
                              <p>Sabado <span>09:00 AM - 08:00 PM</span></p>
                              <p>Domingo <span>Cerrado</span></p>
                         </div> 
     
                         <ul class="social-icon">
                              <li><a href="https://www.facebook.com/lamerhel/" class="fa fa-facebook-square" attr="facebook icon"></a></li>                              
                              <li><a href="https://instagram.com/laboratorio_lamerhel" class="fa fa-instagram"></a></li>
                         </ul>
                    </div>
               </div>

         
                 </div>
               </div>
             </div>

             

          <div class="container">
               <div class="row">
                    
                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-12 col-sm-12 text-align-center">                              
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>                            
                         </div>                                                                               
                                 
               </div>
               <div class="row">
                    <div class="col-md-12 col-sm-12 text-align-center">
                         <div class="copyright-text"> 
                              <p>Copyright &copy; 2021 Lamerhel                                                                 
                         </div>
                    </div>  
               </div>
          </div>

     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>