<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Panelcontrol extends CI_Controller {
	/**
	 * ===============================================================
	 * Constructor del controlador Panelcontrol
	 * Carga el helper url
	 * ===============================================================
	**/
    public function __construct() {
        parent::__construct();
		$this->load->helper('url');
    }
	/**
	 * ===============================================================
	 * Funcion en la que cargamos el helper "url" y el modelo
	 * "post_model" y obtenemos desde base de datos todos los
	 * posts.
	 * 
	 * Dependiendo de si se ha registrado como administrador
	 * cargamos la vista panelcontrol_view o redirigimos a la
	 * principal.
	 * ===============================================================
	**/	
    public function index()
    {
		$this->load->helper('url');
		$this->load->model("post_model", "principal");
		$vars['query'] = $this->principal->getPosts();
		if($this->session->userdata('logged_in'))
		{    	
			$vars['login']="si";
	        $this->load->view('panelcontrol_view',$vars);			
		}
		else{
	    	$vars['username'] = "anonimo";
			$vars['login']='no';	
			$this->load->view('headers/librerias',$vars);
			$this->load->view('main',$vars);
			$this->load->view('footer');			
		}
    }
}
?>