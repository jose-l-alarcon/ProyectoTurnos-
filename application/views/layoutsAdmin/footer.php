<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy;<script>document.write(new Date().getFullYear());</script></strong> Todos los derechos reservados
  </footer>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
 <script src="<?= base_url()?>assets/template/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
 <script src="<?= base_url()?>assets/template/bootstrap/dist/js/bootstrap.min.js"></script>


 
<!-- SlimScroll -->
 <script src="<?= base_url()?>assets/template/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
 <script src="<?= base_url()?>assets/template/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
 <script src="<?= base_url()?>assets/template/dist/js/adminlte.min.js"></script>


<script src="<?= base_url()?>assets/template/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/template/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


 <script src="<?= base_url()?>assets/js/confirmaciones.js"></script> 

 <!-- reportes exel y pdf  -->
<script src="<?= base_url()?>assets/dataTables-export/js/buttons.flash.min.js"></script>
<script src="<?= base_url()?>assets/dataTables-export/js/buttons.html5.min.js"></script>
<script src="<?= base_url()?>assets/dataTables-export/js/buttons.print.min.js"></script>
<script src="<?= base_url()?>assets/dataTables-export/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>assets/dataTables-export/js/jszip.min.js"></script>
<script src="<?= base_url()?>assets/dataTables-export/js/pdfmake.min.js"></script>
<script src="<?= base_url()?>assets/dataTables-export/js/vfs_fonts.js"></script>

<!-- graficos  -->
<script src="<?= base_url()?>assets/highCharts/exporting.js"></script>
<script src="<?= base_url()?>assets/highCharts/highcharts.js"></script>
<script src="<?= base_url()?>assets/js/chart.js"></script>



<script>
  $(document).ready(function () {

    var base_url= "<?php echo base_url();?>";


      $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: "Listado de Pacientes",
                exportOptions: {
                    columns: [ 0, 1,2, 3, 4, 5 ]
                }
            },
            {
                extend: 'pdfHtml5',
                title: "Listado de Pacientes",
                exportOptions: {
                    columns: [ 0, 1,2, 3, 4, 5 ]
                }
                
            }
        ],

        language: {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        }
    });

     $('#example2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: "Listado de Turnos",
                exportOptions: {
                    columns: [ 0, 1,2, 3]
                }
            },
            {
                extend: 'pdfHtml5',
                title: "Listado de Turnos",
                exportOptions: {
                    columns: [ 0, 1,2, 3 ]
                }
                
            }
        ],

        language: {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        }
    });
 

    $('#example1').DataTable(
    	{
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        }
    });
  })

</script>

<script> 
 $(document).ready(function () {

var base_url= "<?php echo base_url();?>";

datagrafico();

function datagrafico(){

 namesMonth = ["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Set","Oct","Nov","Dic"];

     $.ajax({
            url:"<?php echo base_url();?>reportes/reporte_grafico/getData";
            type:"POST",
            data:{year: "2019"},
            dataType:"json",
            success:function(data){
                var meses = new Array();
                var cantidad = new Array();
                $each(data, function(key ,value){
                   meses.push(namesMonth[value.mes - 1]);
                   valor = Number(value.cantidad);
                   cantidad.push(valor);
                });
                graficar(meses,cantidad); 
            }
        }); 
}


function graficar(meses,cantidad){
 Highcharts.chart('grafico', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Cantidad de turnos por mes'
    },
    subtitle: {
        text: 'Año 2019'
    },
    xAxis: {
        categories: meses,
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Cantidad'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} Cant.</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Meses',
        data: cantidad,
    }]
});

}



});
</script>




</body>
</html>
