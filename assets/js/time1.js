$ (function () {

 // var frutas = [ 18, 19, 20 ];

 $('#timepicker').pickatime({

// Translations and clear button
// Time limits

format: 'HH:i',
min: [18,0],
max: [20,0],
editable: false,
interval: 15,
closeOnSelect: true,
closeOnClear: true,

 



 });
});

