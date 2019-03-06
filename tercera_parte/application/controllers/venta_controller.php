
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Venta_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('venta_model');
	}

	function mostrar_factura($id){
		if ($this->session->userdata('perfil_id') > 1){
				redirect(base_url('')); 
			}
		$dat['facturas'] =$this->venta_model->get_facturas($id);
		$dat['factura'] =$this->venta_model->get_factura($id)[0];
  		$this->load->view('partes/header');
  		$this->load->view('partes/navbar_adm');
		$this->load->view('factura_view',$dat);
  		$this->load->view('partes/footer');
	}
}