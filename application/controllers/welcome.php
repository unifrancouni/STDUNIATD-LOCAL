<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users');
		$this->load->library('Session');

	}

	public function index()
	{
		$s = $this->session->userdata('sNombreUsuario');
		if(empty($s)){
			/*$newdata = array(
			'sNombreUsuario' => 'unifrancouni',
			'email' => 'unifrancouni@gmail.com'
			);
			$this->session->set_userdata($newdata);
			echo 'Logueado !';*/
			//Aca iria el login

			redirect(base_url().'index.php/boxlogin');

		}
		else
		{
			//$user_data = $this->session->userdata('sNombreUsuario');
			//echo 'Sesion iniciada como: '.$user_data.'<br>';

			redirect(base_url().'index.php/noticias');
		}

		//$data = array('Registros'=>$this->users->getUsers());
        //$this->load->view('a',$data);


	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */