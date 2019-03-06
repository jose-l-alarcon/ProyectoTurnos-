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

 <section >

<div class="wrapper">


   <!-- <form class="form-signin" action="<?php echo base_url();?>login/auth/login" method="post">    
    <br/>   
      
       <div class="panel-heading">
        <center>
        <h3 class="panel-title">Iniciar sesión</h3>
      </center>

      <br/> -->
      

 <!-- --------------------- en el caso de ingresar datos incorrectos-----------------      -->
    <?php if($this->session->flashdata("error")):?>
      
      <div class="alert alert-danger">

       <?php echo $this->session->flashdata("error")?> 
      <?php endif; ?>   
     </div>
<!-- --------------------------------------------------------------------------------------------- -->

      <input type="email" class="form-control" placeholder="Correo electronico" required="" autofocus="" name="email">
      <br/>
      <input type="password" class="form-control"  placeholder="Contraseña" required="" autofocus="" name="password"> 
      
      <!-- <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label> -->
       <a href="#">¿Olvidó su contraseña?</a><br>
       <br/>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>  

      <br/> 

    
       <a href="<?php echo base_url();?>invitado/RegistroPaciente" class="text-center">¿Aún no tiene una cuenta? Cree una.</a>
    </form>
  </div>   

    
   </section>
      <!-- End top-category-widget Area -->



       