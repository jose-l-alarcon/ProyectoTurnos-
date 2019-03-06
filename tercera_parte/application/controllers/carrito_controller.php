		
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Carrito_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('carrito_model');
		$this->load->model('producto_model');
	}
	public function total_items(){
		if ($this->cart->total_items()) {
			return $this->cart->total_items();
		}else{
			return 0;
		}
	}

	public function index()
	{
		$this->load->view('partes/header');
		$this->load->view('partes/navbar_cli');
		$this->load->view('carrito');
  		$this->load->view('partes/footer');
	}
	//Agrega elemento al carrito
	function add($id)
	{
		$producto = $this->producto_model->select_producto_id($id);
  
			$insert_data =array();
			foreach ($producto as $item){

			$insert_data = array(
			'id' => $id,
			'name' => $item->nombre,
			'price' => $item->precio,
			'qty' => 1
			);	
			}
					
            

        // Inserta elemento al carrito
		$this->cart->insert($insert_data);
	      
        // Redirige a la misma página que se encuentra
		echo $this->total_items();
	}

	
	//Elimina elemento del carrito o el carrito entero
	function remove($id="all") {
        //Si $rowid es "all" destruye el carrito
		if ($id==="all")
		{
			$this->cart->destroy();
		}
		else //Sino destruye sola fila seleccionada
		{ 
			$data = array(
				'rowid'   => $id,
				'qty'     => 0
				);
            // Actualiza los datos
			$this->cart->update($data);
		}
		
        // Redirige a la misma página que se encuentra
		redirect(base_url('carrito'));
	}
	function actualizar_carrito($rowid,$cant){        
	    // Recibe los datos del carrito, calcula y actualiza
	    $data = array(
				'rowid'   => $rowid,
				'qty'     => $cant
				);
            // Actualiza los datos
			$this->cart->update($data);
		echo $this->cart->get_item($rowid)["subtotal"];
	}
		//Muestra los detalles de la venta y confirma(función guarda_compra())
	function muestra_compra(){
		if ($this->session->userdata('nombre')) {
			if (!$this->total_items()) {
				redirect(base_url("ver_productos"));
			}
		$data = array('titulo' => 'Confirmar compra');
		$data['nombre'] =$this->session->userdata('nombre');
		$data['apellido'] =$this->session->userdata('apellido');
		$data['email'] =$this->session->userdata('email');
		$data['direccion'] =$this->session->userdata('direccion');
		
		$this->load->view('partes/header');
		$this->load->view('partes/navbar_cli');
		$this->load->view('compra_view', $data);
		$this->load->view('partes/footer');
	}else{
		redirect(base_url("iniciar"));
	}
    }
    //Guarda los datos de la venta en la base de datos    
    public function guarda_compra()
	{
		if ($this->session->userdata('nombre')) {
		$data['id'] = $this->session->userdata('id');
		$total = $this->input->post('total_venta');

		
		$venta = array(
			'fecha' 		=> date('Y-m-d'),
			'usuario_id' 	=> $data['id'],
			'total'	=> $total
		);	
		$venta_id = $this->carrito_model->insert_venta($venta);
		
		
		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$venta_detalle = array(
					'venta_id' 		=> $venta_id,
					'producto_id' 	=> $item['id'],
					'cantidad' 		=> $item['qty'],
					'precio' 		=> $item['price'],
					'total' 		=> $item['subtotal']
					);	
            
            	$cust_id = $this->carrito_model->insert_venta_detalle($venta_detalle);

            	//Descuenta del stock y lo guarda en la base de datos
            	$producto = $this->producto_model->get_producto($item['id']);
            	foreach ($producto as $row) 
				{
					$stock = $row->stock;
				}

            	$stock_edit = $stock - 	$item['qty'];

            	$stock_nuevo = array(
            		'stock'	=> $stock_edit
            		);

            	$modifica = $this->producto_model->actualizar_producto($stock_nuevo, $item['id']);

			endforeach;
		endif;


        $this->load->view('partes/header');
        $this->load->view('partes/navbar_cli');
		$this->load->view('compralista_view');
		$this->load->view('partes/footer');

		$final = $this->cart->destroy();
		}else{
		redirect(base_url("login"));
	}

	}

}