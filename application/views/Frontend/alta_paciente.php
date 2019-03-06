<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/formularioEstilos/registroEstilos.css"">
    <title>Registro de pacientes</title>
</head>

<body>
    <div class="container" id="advanced-search-form">
        <h2><strong>Dra. Teresita Santillán</strong>: <small>Registro de pacientes</small> </h2>  
        <form action="<?php echo base_url();?>invitado/Alta_paciente/registrarUsuario" method="post">

            <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" placeholder="Apellido" name="apellido" id="apellido">
            </div>

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
            </div>

            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="text" class="form-control" placeholder="Edad" name="edad" id="edad">
            </div>

            <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" placeholder="Teléfono" name="telefono" id="telefono">
            </div>

            <div class="form-group">
                <label for="domicilio">Domicilio</label>
                <input type="text" class="form-control" placeholder="Domicilio" name="domicilio" id="domicilio">
            </div>

            <div class="form-group">
                <label for="obra_social">Obra Social</label>
                <input type="text" class="form-control" placeholder="Obra social" name="obra_social" id="obra_social">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email">
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
            </div>

             <div class="form-group">
                <label for="password">Repetir contraseña</label>
                <input type="password" name="password2" id="password" class="form-control" placeholder="Repetir contraseña">
            </div>

                    <button type="submit" class="btn btn-success btn-lg">Registrarse</button><a href="<?php echo base_url();?>invitado/Welcome/index">Volver a inicio</a><a href="<?php echo base_url();?>invitado/loginUsuario/index" style="float:right">Iniciar sesión</a> 
         
        </form>
    </div>
</body>

</html>