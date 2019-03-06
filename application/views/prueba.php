<!-- Material form register -->
<section class="banner-area relative about-banner" id="home"> 
        <div class="overlay overlay-bg"></div>
        <div class="container">       
          <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
              <h1 class="text-white">
               Usuarios     
              </h1> 
              <p class="text-white link-nav"><a href="<?php echo base_url();?>invitado/IniciarSesion">Iniciar sesión </a>  <span class="fa fa-arrows-h"></span>  <a href="<?php echo base_url();?>invitado/RegistroPaciente"> Crear cuenta </a></p>
            </div>  
          </div>
        </div>
      </section>

<section>

<div class="container-contact100">
        <div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

        <div class="wrap-contact100">
            <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
                <span class="contact100-form-title-1">
                    Contact Us
                </span>

                <span class="contact100-form-title-2">
                    Feel free to drop us a line below!
                </span>
            </div>

            <form class="contact100-form validate-form">
                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Full Name:</span>
                    <input class="input100" type="text" name="name" placeholder="Enter full name">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Email:</span>
                    <input class="input100" type="text" name="email" placeholder="Enter email addess">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Phone is required">
                    <span class="label-input100">Phone:</span>
                    <input class="input100" type="text" name="phone" placeholder="Enter phone number">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <span class="label-input100">Message:</span>
                    <textarea class="input100" name="message" placeholder="Your Comment..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        <span>
                            Submit
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>


</section>