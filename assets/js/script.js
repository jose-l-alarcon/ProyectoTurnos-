
 $(document).ready(function(){

// var base_url= "<?php echo base_url();?>";

$(document).on('click', '.btn-view', function(){

     var id = $(this).val(); 
     var nombre = $(this).val(nombre);

     alert (id +''+ nombre);
   



      //  $.ajax({

      //  url: 'Administrador/Secretaria/view' + id,
      //  type: "POST",
     
      //  success:function(resp)

      //   {

      // console.log(resp);
      //   }
    

// $(document).on("click", ".btn-view", function(){
//     alert($(this).prop("id"));
//      });
// });

});
})

// function alert()
//     {
//     var mensaje;
//     var opcion = confirm("Clicka en Aceptar o Cancelar");
//     if (opcion == true) {
//         mensaje = "Has clickado OK";
//   } else {
//       mensaje = "Has clickado Cancelar";
//   }
//   document.getElementById("ejemplo").innerHTML = mensaje;
// }

