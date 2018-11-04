<!DOCTYPE html>
  <html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Inicio</title>

      <script src="<?= base_url()?>plantilla/js/vendor/jquery-2.2.4.min.js"></script>
      <script src="<?= base_url()?>plantilla/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="<?= base_url()?>plantilla/js/vendor/bootstrap.min.js"></script>      
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="<?= base_url()?>plantilla/js/easing.min.js"></script>      
      <script src="<?= base_url()?>plantilla/js/hoverIntent.js"></script>
      <script src="<?= base_url()?>plantilla/js/superfish.min.js"></script> 
      <script src="<?= base_url()?>plantilla/js/jquery.ajaxchimp.min.js"></script>
      <script src="<?= base_url()?>plantilla/js/jquery.magnific-popup.min.js"></script> 
      <script src="<?= base_url()?>plantilla/js/jquery-ui.js"></script>     
      <script src="<?= base_url()?>plantilla/js/owl.carousel.min.js"></script>            
      <script src="<?= base_url()?>plantilla/js/jquery.nice-select.min.js"></script>              
      <script src="<?= base_url()?>plantilla/js/mail-script.js"></script> 
      <script src="<?= base_url()?>plantilla/js/main.js"></script>  
     
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="<?= base_url()?>plantilla/css/linearicons3.css">
      <link rel="stylesheet" href="<?= base_url()?>plantilla/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?= base_url()?>plantilla/css/bootstrap.css">
      <link rel="stylesheet" href="<?= base_url()?>plantilla/css/magnific-popup.css">
      <link rel="stylesheet" href="<?= base_url()?>plantilla/css/nice-select.css">              
      <link rel="stylesheet" href="<?= base_url()?>plantilla/css/animate.min.css">
      <link rel="stylesheet" href="<?= base_url()?>plantilla/css/jquery-ui.css">      
      <link rel="stylesheet" href="<?= base_url()?>plantilla/css/owl.carousel.css">
      <link rel="stylesheet" href="<?= base_url()?>plantilla/css/main7.css">

    </head>
    <body>  
        <header id="header" id="home">
          <div class="header-top">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
                     <h6 class="text-uppercase">Dra. Teresita Santillán</h6>
                     <h6 class="text-uppercase">Dermatóloga</h6>
                </div>
                <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                <a class="btns" href="tel:+953 012 3654 896">Tel: 0379 446-4373 </a> 
                  <a class="icons" href="tel:+953 012 3654 896">
                    <span class="lnr lnr-phone-handset"></span>
                  </a>
                  <a class="icons" href="mailto:support@colorlib.com">
                    <span class="lnr lnr-envelope"></span>
                  </a>    
                </div>
              </div>                  
            </div>
        </div>
          <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li class="menu-active"><a href="index.html">Inicio</a></li>
                  <li><a href="services.html">Obras Sociales y Prepagas</a></li>
                  <li class="menu-has-children"><a href="">Tratamientos</a>
                    <ul>
                      <li><a href="blog-home.html">Blog Home</a></li>
                      <li><a href="blog-single.html">Blog Single</a></li>
                    <li class="menu-has-children"><a href="">Level 2</a>
                      <ul>
                        <li><a href="#">Item One</a></li>
                        <li><a href="#">Item Two</a></li>
                      </ul>
                    </li>                       
                    </ul>
                   <li><a href="services.html">Institucional</a></li>
                  </li>                           
                  <li><a href="contact.html">Contacto</a></li>
                </ul>
              </nav><!-- #nav-menu-container -->
              <div class="menu-social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
          </div>          
            </div>
          </div>
        </header><!-- #header -->

      <!-- Inicio banner Area -->
    <section class="banner-area relative about-banner" id="home"> 
        <div class="overlay overlay-bg"></div>
        <div class="container">       
          <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
              <h1 class="text-white">
                Contáctenos        
              </h1> 
              <p class="text-white link-nav"><a href="index.html">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.html"> Contacto </a></p>
            </div>  
          </div>
        </div>
      </section>

      <!-- End banner Area -->
    <section class="contact-page-area section-gap">
        <div class="container">
          <div class="row">
            <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
            <div class="col-lg-4 d-flex flex-column address-wrap">
              <div class="single-contact-address d-flex flex-row">
                <div class="icon">
                  <span class="lnr lnr-home"></span>
                </div>
                <div class="contact-details">
                  <h5>General Belgrano 1255 
                       </h5>
                  <p>
                    Corrientes CORRIENTES 3400
                  </p>
                </div>
              </div>
              <div class="single-contact-address d-flex flex-row">
                <div class="icon">
                  <span class="lnr lnr-phone-handset"></span>
                </div>
                <div class="contact-details">
                  <h5>Teléfono:</h5>
                  <p>(0379)446 4373</p> 
                </div>
              </div>
              <div class="single-contact-address d-flex flex-row">
                <div class="icon">
                  <span class="lnr lnr-envelope"></span>
                </div>
                <div class="contact-details">
                  <h5>santillantere@gmail.com</h5>
                  <p>Envíenos su consulta en cualquier momento!</p>
                </div>
              </div>                            
            </div>
            <div class="col-lg-8">
              <form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
                <div class="row"> 
                  <div class="col-lg-6 form-group">
                    <input name="name" placeholder="Ingrese su Nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
                  
                    <input name="email" placeholder="Ingrese su E-mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                    <input name="subject" placeholder="Ingrese asunto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
                  </div>
                  <div class="col-lg-6 form-group">
                    <textarea class="common-textarea form-control" name="message" placeholder="Introducir mensaje" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>       
                  </div>
                  <div class="col-lg-12">
                    <div class="alert-msg" style="text-align: left;"></div>
                    <button class="genric-btn primary circle" style="float: right;">Enviar mensaje</button>                     
                  </div>
                </div>
              </form> 
            </div>
          </div>
        </div>  
      </section>
      <!-- End contact-page Area -->
      <!-- start footer Area -->    
      <footer class="footer-area section-gap">
        <div class="container">
           <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0" ><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heaart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">jose Alarcon </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-4 col-sm-12 footer-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
           <!--    <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-behance"></i></a> -->
            </div>
          </div>
        </div>
      </footer>
      <!-- End footer Area -->

     
    </body>
  </html>