<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.css">
<h1> Hola Mundo </h1>
<a href="<?= base_url() ?>CodigoEjemplo"> link </a>

<?php
 if (empty($listado)) {
     // si la funcion de ese modelo se encuentra vacia que retorne tabla vacia
        echo "Tabla vacia" ;
    } 

     else {

     	echo "Tabla con resultados";
     }

?>