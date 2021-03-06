
      <!-- Inicio banner Area -->
    <section class="banner-area relative about-banner" id="home"> 
        <div class="overlay overlay-bg"></div>
        <div class="container">       
          <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
              <h1 class="text-white">
                Contáctenos        
              </h1> 
              <p class="text-white link-nav"><a href="index.html">Inicio </a>  <span class="fa fa-hand-o-right"></span>  <a href="contact.html"> Contacto </a></p>
            </div>  
          </div>
        </div>
      </section>

      <!-- End banner Area -->
    <section class="contact-page-area section-gap">
        <div class="container">
          <div class="row">
            <div class="map-wrap" style="width:100%; height: 445px;" id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.9076183444818!2d-58.83766668507447!3d-27.472135282889976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456ca211004bed%3A0x56b68383056585b6!2sBelgrano+1255%2C+W3400AAZ+Corrientes!5e0!3m2!1ses!2sar!4v1553261570975" width="100%" height="445px"  frameborder="0" style="border:0" allowfullscreen></iframe>   
            </div>
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
                    <input name="name" placeholder="Ingrese su Nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su nombre'" class="common-input mb-20 form-control" required="" type="text">
                  
                    <input name="email" placeholder="Ingrese su E-mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su E-mail'" class="common-input mb-20 form-control" required="" type="email">

                    <input name="subject" placeholder="Ingrese asunto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese asunto'" class="common-input mb-20 form-control" required="" type="text">
                  </div>
                  <div class="col-lg-6 form-group">
                    <textarea class="common-textarea form-control" name="message" placeholder="Introducir mensaje" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Introducir mensaje'" required=""></textarea>       
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
  