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

<!-- reportes exel y pdf  -->
<script src="<?= base_url()?>assets/dataTables-export/js/buttons.flash.min.js"></script>
<script src="<?= base_url()?>assets/dataTables-export/js/buttons.html5.min.js"></script>
<script src="<?= base_url()?>assets/dataTables-export/js/buttons.print.min.js"></script>
<script src="<?= base_url()?>assets/dataTables-export/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>assets/dataTables-export/js/jszip.min.js"></script>
<script src="<?= base_url()?>assets/dataTables-export/js/pdfmake.min.js"></script>
<script src="<?= base_url()?>assets/dataTables-export/js/vfs_fonts.js"></script>



<script>
  $(document).ready(function () {

     $('#example2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                title: "Listado de Turnos",
                exportOptions: {
                    columns: [ 0, 1,2, 3]
                }
            },
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
</body>
</html>

