  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function _construct() {
		parent::_construct();
	}

		public function index()
	{
		$data['correcto'] = $this->session->flashdata('correcto');
    
		$this->load->view('/partes/header');
		if ($this->session->userdata('login')) {
			$this->load->view('/partes/navbar_cli');
		} else {
			$this->load->view('/partes/navbar');			
		}
		$this->load->view('/front/principal', $data);
		$this->load->view('/partes/footer');
	}

	public function comercializacion()
	{
		$this->load->view('/partes/header');
		if ($this->session->userdata('login')) {
			$this->load->view('/partes/navbar_cli');
		} else {
			$this->load->view('/partes/navbar');			
		}
		$this->load->view('front/comercializacion');
		$this->load->view('partes/footer');
	}
	
	

	
	public function productos()
	{
		$this->load->view('/partes/header');
		if ($this->session->userdata('login')) {
			$this->load->view('/partes/navbar_cli');
		} else {
			$this->load->view('/partes/navbar');			
		}
		$this->load->view('/front/productos');
		$this->load->view('/partes/footer');
	}

	
	public function quienesSomos()
	{
		$this->load->view('/partes/header');
		if ($this->session->userdata('login')) {
			$this->load->view('/partes/navbar_cli');
		} else {
			$this->load->view('/partes/navbar');			
		}
		$this->load->view('/front/quienesSomos');
		$this->load->view('/partes/footer');
	}

	
	public function terminos()
	{
		$this->load->view('/partes/header');
		if ($this->session->userdata('login')) {
			$this->load->view('/partes/navbar_cli');
		} else {
			$this->load->view('/partes/navbar');			
		}
		$this->load->view('/front/terminos');
		$this->load->view('/partes/footer');
	}
}

