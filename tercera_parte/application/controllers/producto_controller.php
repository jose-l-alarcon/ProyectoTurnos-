<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Producto_controller extends CI_Controller {
		function __construct() {
			parent::__construct();
       	 $this->load->library('pagination');
			$this->load->model('producto_model');
			$this->load->model('venta_model');
			$this->load->model('efecto_model');
		}

		
		public function agregar_producto() {
			if ($this->session->userdata('perfil_id') > 1){
				redirect(base_url('')); 
			}

			if ($this->session->userdata('login')) {
			
			$data['efecto'] = $this->producto_model->select_efecto();
			$this->load->view('/partes/header');
			$this->load->view('/partes/navbar_adm');
			$this->load->view('/agregar_producto', $data);
			$this->load->view('/partes/footer');
			}else{
                redirect(base_url('login'));     
            }
		}
		function gestionar_productos() {
			if ($this->session->userdata('perfil_id') > 1){
				redirect(base_url('')); 
			}
			if ($this->session->userdata('login')) {
			$data['correcto'] = $this->session->flashdata('correcto');

			$data['productos'] = $this->producto_model->select_producto();
			$this->load->view('/partes/header');
			$this->load->view('/partes/navbar_adm');
			$this->load->view('/gestionar_producto_view', $data);
			$this->load->view('/partes/footer');
			}else{
                redirect(base_url('login'));     
            }
		}

		function ver_productos() {
			 $params = array();
			 $params['efectos'] = $this->efecto_model->select_efecto();
	        $limit_per_page = 9;
	        $start_index = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
	        $total_records = $this->producto_model->get_total();
	 
	        if ($total_records > 0) 
	        {
	            // get current page records
	            $params["producto"] = $this->producto_model->get_current_page_records($limit_per_page, $start_index);
	             
	            $config['base_url'] = base_url('ver_productos');
	            $config['total_rows'] = $total_records;
	            $config['per_page'] = $limit_per_page;
	            $config["uri_segment"] = 2;
	             
	            $this->pagination->initialize($config);
	             
	            // build paging links
	            $params["links"] = $this->pagination->create_links();
	        }
	        if ($this->session->userdata('login')) 
	        {
	        	$this->load->view('/partes/header');
			$this->load->view('/partes/navbar_cli');
			$this->load->view('/catalogo_view', $params);
			$this->load->view('/partes/footer');
	       
		} else {
	         $this->load->view('/partes/header');
			$this->load->view('/partes/navbar');
			$this->load->view('/catalogo_view', $params);
			$this->load->view('/partes/footer');
		}
	}

		function index($id=0){
			$params = array();
			 $params['efectos'] = $this->efecto_model->select_efecto();
	        $limit_per_page = 9;
	        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	        $total_records = $this->producto_model->get_total_by_effect($id);
			 $params["producto"] = false;
	        if ($total_records > 0) 
	        {
	            // get current page records
	            $params["producto"] = $this->producto_model->get_current_page_records_by_effect($limit_per_page, $start_index, $id);
	             
	            $config['base_url'] = base_url('/efecto/'.$id);
	            $config['total_rows'] = $total_records;
	            $config['per_page'] = $limit_per_page;
	            $config["uri_segment"] = 3;
	             
	            $this->pagination->initialize($config);
	             
	            // build paging links
	            $params["links"] = $this->pagination->create_links();
	        }

			$this->load->view('/partes/header');
			$this->load->view('/partes/navbar_cli');
			$this->load->view('/catalogo_view', $params);
			$this->load->view('/partes/footer');
			
		}


		public function registrar_producto() {
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('marca', 'Marca', 'required');
			$this->form_validation->set_rules('efecto', 'Seleccionar un efecto',
			 'required|callback_select_validate');
			$this->form_validation->set_rules('precio', 'Precio', 'required');
			$this->form_validation->set_rules('stock', 'Stock', 'required|integer');			
			$this->form_validation->set_rules('imagen', 'Seleccionar una imagen', 'callback_validar_imagen');
			$this->form_validation->set_message('integer', 'El campo %s debe poseer solo numeros enteros'); 
			$this->form_validation->set_message('required', 'El campo %s es obligatorio');
			if($this->input->post('estado')) {
				$estado=1;
			} else {
				$estado=0;
			}			
			if ($this->form_validation->run() == FALSE) {
				$this->agregar_producto(); 
			} else {
				$this->guardar_producto(); 
			}
		}
		function validar_imagen($imagen) {
			$nombre_imagen = $_FILES['imagen']['name'];
			return true;
			if (empty($nombre_imagen)) {
				$this->form_validation->set_message('validar_imagen', 'Seleccionar una imagen'); 
				return false; 
			} else {
				return true;
			}
		}
		function select_validate($categoria) {
			if($categoria=="ninguno"){
				$this->form_validation->set_message('select_validate', 'Seleccione una categoria');
				return false; 
			} else { 
				return true; 
			} 
		} 
		function guardar_producto() { 
			$config['upload_path'] = './uploads'; 
			$config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG'; 
			$config['remove_spaces'] = TRUE; 
			$config['max_size'] = '1024'; 
			$this->load->library('upload', $config); 
			if (!$this->upload->do_upload('imagen')) {
				echo "<script type=\"text/javascript\">alert('No se pudo cargar el archivo');</script>"; 
				$this->agregar_producto(); 
			} else { 
				if($this->input->post('estado')){
                    $estado= 1;
				}else{  
                    $estado= 0;
				} 
				$data = array(  
					'nombre' => $this->input->post('nombre'), 
					'marca' => $this->input->post('marca'),					 
					'efecto'=> $this->input->post('efecto'),					
					'precio'=> $this->input->post('precio'),
					'stock' => $this->input->post('stock'),  
					'imagen' => $_FILES['imagen']['name'],
					'estado' => $estado
				);
				$this->load->model('producto_model'); 
				$this->producto_model->guardar_producto($data); 

           		$this->session->set_flashdata('correcto', 'Producto agregado!');
				redirect(base_url('gestionar_productos')); 
			} 
		} 
		
		function editar_producto($id=NULL) {
			if ($this->session->userdata('perfil_id') > 1){
				redirect(base_url('')); 
			}
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('marca', 'Marca', 'required');
			$this->form_validation->set_rules('precio', 'Precio');
			$this->form_validation->set_rules('stock', 'Stock', 'required|integer');			
			$this->form_validation->set_rules('imagen', 'Seleccionar una imagen', 'callback_validar_imagen');
			$this->form_validation->set_message('integer', 'El campo %s debe poseer solo numeros enteros'); 
			$this->form_validation->set_message('required', 'El campo %s es obligatorio');	
			if($this->input->post('estado')) {
				$estado=1;
			} else {
				$estado=0;
			}		
			if ($this->form_validation->run() == FALSE) {
				$this->load->model('producto_model');
				$producto = $this->producto_model->get_producto($id);
				foreach($producto as $row) {
				$data['id'] = $row->id;
				$data['nombre'] = $row->nombre;
				$data['marca'] = $row->marca;
				$data['stock']= $row->stock;
				$data['precio'] = $row->precio;
				$data['estado']= $row->estado;
				$data['imagen']= $row->imagen;
				}
				$this->load->view('/partes/header');
				$this->load->view('/partes/navbar_adm');
				$this->load->view('/gestionar_producto_edicion', $data);
				$this->load->view('/partes/footer');
			} else {
				$data = array(
				'nombre'=> $this->input->post('nombre'),
				'marca' => $this->input->post('marca'),
				'stock' => $this->input->post('stock'),
				'precio'=> $this->input->post('precio'),
				'estado'=> $this->input->post('estado'),
				);
				if ($_FILES['imagen']['name']) {
					$data['imagen']= $_FILES['imagen']['name'];
					$config['upload_path'] = './uploads'; 
					$config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG'; 
					$config['remove_spaces'] = FALSE; 
					$config['max_size'] = '1024'; 
					$this->load->library('upload', $config); 
					if (!$this->upload->do_upload('imagen')) {
						echo "<script type=\"text/javascript\">alert('No se pudo cargar el archivo');</script>"; 
						$this->editar_producto($id); 
					}
				}

				$this->load->model('producto_model');
				$this->producto_model->actualizar_producto($data, $id);
				$this->session->set_flashdata('correcto', 'Producto actualizado!');

				redirect(base_url('gestionar_productos')); 
			}
		}
		
		function ver_producto($id=NULL) {
			$this->load->model('producto_model');
			$producto = $this->producto_model->select_producto_id($id);
			foreach($producto as $row) {
			$data['id'] = $row->id;
			$data['nombre'] = $row->nombre;
			$data['marca'] = $row->marca;
			$data['stock']= $row->stock;
			$data['precio'] = $row->precio;
			$data['estado']= $row->estado;
			$data['efecto']= $row->efecto;
			$data['imagen'] = $row->imagen;
			}
			$this->load->view('/partes/header');
			$this->load->view('/partes/navbar_cli');
			$this->load->view('/producto_view', $data);
			$this->load->view('/partes/footer');
		}


		function eliminar_producto($id=NULL) {
			$data = array(
				'estado'=> '0'
			);
			$this->load->model('producto_model');
			$this->producto_model->actualizar_producto($data, $id);
			redirect(base_url('gestionar_productos'));
		}
		function activar_producto($id=NULL) {
			$data = array(
				'estado'=> '1'
			);
			$this->load->model('producto_model');
			$this->producto_model->actualizar_producto($data, $id);
			redirect(base_url('gestionar_productos'));
		}

		function modificar_stock($id,$stock){
			    $producto = $this->producto_model->get_producto($id);
            	$stock_nuevo = array(
            		'stock'	=> $stock
            		);

            	$modifica = $this->producto_model->update_producto($id, $stock_nuevo);
            	redirect(base_url('admin'));
		}
		function cantidad_producto($id){
			$producto = $this->producto_model->get_producto($id);
			foreach ($producto as $row){
					$stock = $row->stock;
				}

			echo $stock;
		}

		function pedidos(){
			if ($this->session->userdata('perfil_id') > 1){
				redirect(base_url('')); 
			}
			$params = array();
	        $limit_per_page = 7;
	        $start_index = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
	        $total_records = $this->venta_model->get_total();
	 
	        if ($total_records > 0) 
	        {
	            // get current page records
	            $params["ventas"] = $this->venta_model->get_current_page_records($limit_per_page, $start_index);
	             
	            $config['base_url'] = base_url('pedidos');
	            $config['total_rows'] = $total_records;
	            $config['per_page'] = $limit_per_page;
	            $config["uri_segment"] = 2;
	             
	            $this->pagination->initialize($config);
	             
	            // build paging links
	            $params["links"] = $this->pagination->create_links();
	        }
			$data['ventas']= $this->venta_model->get_ventas();
			$this->load->view('/partes/header');
			$this->load->view('/partes/navbar_adm');
			$this->load->view('pedidos_view', $params);
			$this->load->view('/partes/footer');
		}
		function pedidos_fecha(){
			if ($this->session->userdata('perfil_id') > 1){
				redirect(base_url('')); 
			}
			$data['ventas']= $this->venta_model->get_ventas($this->input->post('fecha'));
			$this->load->view('/partes/header');
			$this->load->view('/partes/navbar_adm');
			$this->load->view('pedidos_view', $data);
			$this->load->view('/partes/footer');
		}

		function ver_productos_nombre() {
			if ($this->session->userdata('perfil_id') > 1){
				redirect(base_url('')); 
			}
			if ($this->session->userdata('login')) {
			$this->load->model('producto_model');
			$data['productos'] = $this->producto_model->get_prod_name($this->input->post('nombre'));
			$this->load->view('/partes/header');
			$this->load->view('/partes/navbar_adm');
			$this->load->view('/gestionar_producto_view', $data);
			$this->load->view('/partes/footer');
			}else{
				redirect('login');
			}
		}
	}