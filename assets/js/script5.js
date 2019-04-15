$ (function () {

$.datepicker.regional['es'] = {
 closeText: 'Cerrar',
 prevText: '< Ant',
 nextText: 'Sig >',
 currentText: 'Hoy',
 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
 weekHeader: 'Sm',
 altFormat: 'dd/mm/yy',
 dateFormat: 'yy-mm-dd',

 // dateFormat: 'dd/mm/yy',
 firstDay: 7,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);
$(function () {
$("#fecha").datepicker();
});

// ---------------------------------------------------------------------------- 
// bloquear ciertos dias ej: feriados 

var unavailableDates = ["16-3-2019","17-3-2019","23-3-2019","24-3-2019","30-3-2019",
"31-3-2019","2-4-2019","6-4-2019","7-4-2019","13-4-2019","14-4-2019",];


function unavailable(date) {
  dmy = date.getDate() + "-" + (date.getMonth()+1) + "-" + date.getFullYear();
  if ($.inArray(dmy, unavailableDates) < 0) {
    return [true,"","Book Now"];
  } 
  else {
    return [false,"","Booked Out"];
  }
}
// ----------------------------------------------------------------------------------

$("#datepicker") .datepicker ({
 minDate: 0,
 maxDate: "+1m",
 showAnim: 'fold',
 closeText: "Close",
 currentText: "Now",
 beforeShowDay: unavailable



 });

});



 


 







