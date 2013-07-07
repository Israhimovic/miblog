<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Principal extends CI_Controller {
	/**
	 * ===============================================================
	 * Constructor del controlador Principal
	 * Carga el helper url
	 * ===============================================================
	**/		
	function __construct() {
	 	parent::__construct();
		$this->load->helper('url');
	}
	/**
	 * ===============================================================
	 * Funcion dependiendo si la sesion esta iniciada o no carga la
	 * vista principal con unos valores $vars u otros para poder 
	 * configurar la vista.
	 * 
	 * A través de post_model obtenemos todos los posts de nuestra
	 * BBDD.
	 * ===============================================================
	**/		
	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
		    $session_data = $this->session->userdata('logged_in');
		    $vars['username'] = $session_data['username'];
			$vars['login']='si';
			$this->load->helper('url');
			$this->load->model("post_model", "principal");
			$vars['query'] = $this->principal->getPosts();
						
			$this->load->view('headers/librerias',$vars);
			$this->load->view('main',$vars);
			$this->load->view('footer');
		}
		else
	    {
	    	$vars['username'] = "anonimo";
			$this->load->helper('url');
			$this->load->model("post_model", "principal");
			$vars['query'] = $this->principal->getPosts();
			$vars['login']='no';	
			$this->load->view('headers/librerias',$vars);
			$this->load->view('main',$vars);
			$this->load->view('footer');
	    }
	}
	
	function logout()
	{
	    $this->session->unset_userdata('logged_in');
	    session_destroy();
	    redirect('principal', 'location');
	}
}

/* End of file principal.php */
/* Location: ./application/controllers/principal.php */ ?>