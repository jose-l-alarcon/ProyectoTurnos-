<div class="container mt-2  ">
     <a class="btn btn-primary" href="<?php echo base_url("pedidos"); ?>">Volver</a>
    <div id="bill_info">
        <div align="center">
            <h2 id="h2" align="center">Info de Compra</h2>

            <table class="table" border="0" cellpadding="2px" >
                <?php
                    foreach($facturas as $row){
                        echo '<tr>';
                        echo '<th scope="row">'.$row->id.'</th>';
                        echo '<td>'.$row->nombre.'</td>';
                        echo '<th>'.$row->precio.'</th>';
                        echo '<th>'.$row->cantidad.'</th>';
                        echo '<th>'.$row->total.'</th>';
                    }
                ?>
                <tr>
                    <td colspan="4">Total Compra:</td>
                    <td><strong>$<?php echo $factura->total; ?></strong></td>
                </tr>
            </table>
        </div>
       
    </div>
 </div>       
