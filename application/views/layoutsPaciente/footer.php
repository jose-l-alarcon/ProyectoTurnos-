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

 <!-- js para alertas de confirmacion -->

  <script src="<?= base_url()?>assets/js/alertify/alertify.min.js"></script> 



 
<!-- SlimScroll -->
 <script src="<?= base_url()?>assets/template/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
 <script src="<?= base_url()?>assets/template/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
 <script src="<?= base_url()?>assets/template/dist/js/adminlte.min.js"></script>


<script src="<?= base_url()?>assets/template/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/template/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

 <script src="<?= base_url()?>assets/js/confirmaciones.js"></script> 

<!-- ---------- script calendario ---------------------- -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- --------------------------------------------------------   -->

<!-- ------------------js de calendario y hora  -->
 <script src="<?= base_url()?>assets/js/script6.js"></script>

<script>


  $(document).ready(function () {
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
    $('.sidebar-menu').tree();
  })
</script>


</body>
</html>
