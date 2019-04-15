$(document).ready(function(){

    $("#timepicker").timepicker({
     timeFormat: 'HH:mm',
     minTime : '18:00' ,
     maxTime : '20:00',
     interval: 15,
     dynamic: true,
     scrollbar: true,

    });
});