  <!-- start footer Area --> 


      <script src="<?= base_url()?>assets/estilos/js/vendor/jquery-2.2.4.min.js"></script>
    <!--   <script src="<?= base_url()?>assets/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
      <script src="<?= base_url()?>assets/estilos/js/vendor/bootstrap.min.js"></script>      
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="<?= base_url()?>assets/estilos/js/easing.min.js"></script>      
      <script src="<?= base_url()?>assets/estilos/js/hoverIntent.js"></script>
      <script src="<?= base_url()?>assets/estilos/js/superfish.min.js"></script> 
      <script src="<?= base_url()?>assets/estilos/js/jquery.ajaxchimp.min.js"></script>
      <script src="<?= base_url()?>assets/estilos/js/jquery.magnific-popup.min.js"></script> 
      <script src="<?= base_url()?>assets/estilos/js/jquery-ui.js"></script>     
      <script src="<?= base_url()?>assets/estilos/js/owl.carousel.min.js"></script>            
      <script src="<?= base_url()?>assets/estilos/js/jquery.nice-select.min.js"></script>              
      <script src="<?= base_url()?>assets/estilos/js/mail-script.js"></script> 
      <script src="<?= base_url()?>assets/estilos/js/main.js"></script>  

      <script src="<?= base_url()?>assets/estilos/js/scripts.js"></script>  

      <script src="<?= base_url()?>assets/template/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url()?>assets/template/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script  src="<?= base_url()?>assets/template/plugins/iCheck/icheck.min.js"></script>

<!-- libreria jQuery -->

<script  src="<?= base_url()?>assets/estilos/js/scripts.js"></script>

      <footer class="footer-area section-gap">
        <div class="container">
           <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0" ><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Diseñado por  <i class="fa fa-heaart-o" aria-hidden="true"></i>  <a href="mailto:jose-l-alarcon@hotmail.com"> José L. Alarcon </a> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-4 col-sm-12 footer-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
        
            </div>
          </div>
        </div>
      </footer>
      <!-- End footer Area -->
<script>
  $(document).ready(function () {
    //-- Click on terms and conditions
        $(".term").click(function(){
            var ctrl = $(this).find("i");
            if (ctrl.hasClass("fa-check-square-o")){
                ctrl.attr("class","fa fa-square-o");
            }else{
                ctrl.attr("class", "fa fa-check-square-o");
            }
        }) 

        $("input").blur(function(){
            if ($(this).val() != ""){
                $(this).parent().css({"color":"black"});
                $(this).css({"border-bottom":"1px solid silver","color":"gray"});                 
            }
        })
        
        //--- CONTINUE ---
        $("form > p > a").click(function(){
            //-- Detect terms and conditions
            var term = false;
            if ($(".term > i").hasClass('fa-check-square-o')){
                term = true;
            }
            
            //-- only example
            var user = {};
            user.name = $("input[name='name']").val();
            user.id = $("input[name='id']").val();
            user.phone = $("input[name='phone']").val();
            user.email = $("input[name='email']").val();
            user.term = term;

            //-- Validator            
            $("input").each(function(e, valor){
                var error = false;
                if ($(this).val() == ""){
                    error = true;
                }
                if (error === true){
                    //-- with errors
                    $(this).parent().css({"color":"red"});
                    $(this).css({"border-bottom":"1px solid red"});
                }else{
                    //-- without errors
                    $(this).parent().css({"color":"black"});
                    $(this).css({"border-bottom":"1px solid silver","color":"gray"}); 
                }
            })

            //-- msg example
            $("body").append(JSON.stringify(user) + "<br>");
        })
    })

</script>
    
    </body>
  </html>