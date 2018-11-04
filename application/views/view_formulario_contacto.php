<h1>Datos del Paciente</h1>

<br/></br>

<?php 

// <!-- atributos de cada columna de la tabla paciente , despues solamente se le pasa la variable $input_con_nombre -->
$input_apellido = array(
              'name'        => 'apellido',
              'id'          => 'apellido',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
            );

$input_nombre = array(
              'name'        => 'nombre',
              'id'          => 'nombre',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
            );


$input_domicilio = array(
              'name'        => 'domicilio',
              'id'          => 'domicilio',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
            );

$input_ocupacion = array(
              'name'        => 'ocupacion',
              'id'          => 'ocupacion',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
            );

$opciones_obra_social = array(
            
            '0'  => 'Ninguna',
            '1'  => 'Medifé',
            '2'  => 'Omint',
            '3'  => 'Sancor Salud',

            );

$input_telefono = array(
              'name'        => 'telefono',
              'id'          => 'telefono',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
            );

$input_fecha_nacimiento = array(
              'name'        => 'fecha_nacimiento',
              'id'          => 'fecha_nacimiento',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
            );


$input_edad = array(
              'name'        => 'edad',
              'id'          => 'edad',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
            );

$input_email = array(
              'name'        => 'email',
              'id'          => 'email',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
            );


$input_estado = array(
              'name'        => 'estado',
              'id'          => 'estado',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
            );
?>



<?php echo form_open()  ?>

<?php echo form_label('Apellido') ?>
</br>
<?php echo form_input('$input_apellido') ?>
</br>

<?php echo form_label('Nombre') ?>
</br>
<?php echo form_input('$input_nombre') ?>
</br>

<?php echo form_label('Domicilio') ?>
</br>
<?php echo form_input('$input_domicilio') ?>
</br>

<?php echo form_label('Ocupación') ?>
</br>
<?php echo form_input('$input_ocupacion') ?>
</br>

<?php echo form_label('Obra Social') ?>
</br>
<?php echo form_dropdown('obra_social', $opciones_obra_social) ?>
</br>

<?php echo form_label('Telefono') ?>
</br>
<?php echo form_input('$input_Telefono') ?>
</br>

<?php echo form_label('Fecha Nacimiento') ?>
</br>
<?php echo form_input('$input_fecha_nacimiento') ?>
</br>



<?php echo form_label('Edad') ?>
</br>
<?php echo form_input('$input_edad') ?>
</br>


<?php echo form_label('Email') ?>
</br>
<?php echo form_input('$input_email') ?>
</br>


<?php echo form_label('Estado') ?>
</br>
<?php echo form_input('$input_estado') ?>
</br>


</br>
<?php echo form_submit ('btn_enviar' , 'Guardar') ?>


<?php echo form_close() ?>



<!-- <form action="" method="post" accept-charset="utf-8">
	
	<label for=""> Nombre </label>
	<input type="text" name="nombre"/>
	
</form> -->
<!-- usando helper es igual a usar codigo html pero ahorrando lineas de codigo y de forma mas organizada , resulta un sitio mas portatil en el caso de que las URL cambien -->