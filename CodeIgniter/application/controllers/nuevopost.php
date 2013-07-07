<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Nuevopost extends CI_Controller {
	/**
	 * ===============================================================
	 * Constructor del controlador Nuevopost
	 * Carga el helper url
	 * ===============================================================
	**/	
	function __construct() {
	 	parent::__construct();
		$this->load->helper('url');
	}
	/**
	 * ===============================================================
	 * Funcion que carga le helper url y la vista del formulario
	 * de creacion de un nuevo post.
	 * ===============================================================
	**/	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('newpost');
	}
	/**
	 * ===============================================================
	 * Funcion que se encarga de obtener los datos del formulario y
	 * los almacena en base de datos.
	 * 
	 * Obtiene los datos de la marca y modelo del dispositivo para 
	 * almacenarlo en base de datos también a través de la libreria
	 * wurfl.
	 * 
	 * La interaccion con la base de datos se realiza a través del 
	 * modelo creado "post_model".
	 * ===============================================================
	**/
	public function guardarpost() {
		//echo "Recibo los datos:<br/><pre>";
		//var_dump($_POST);
		//echo "</pre>";
		//recogemos los datos por POST
		$data['titulo'] = $this->input->post('titulo');
		$data['desc'] = $this->input->post('textareadesc');
		$data['autor'] = $this->input->post('autor');
		$data['cod_post'] = $this->input->post('id');
		$this->load->library('wurfl');
		$data['modelo'] =$this->wurfl->dameModelo();
		$data['marca'] =$this->wurfl->dameMarca();		
		//cargamos el modelo y llamamos a la función update()
		$this->load->model("post_model", "principal");
		$this->principal->insert($data);
		//volvemos a cargar la primera vista
		$this->load->helper('url');
		redirect('/principal/index','location');
		//header('Location: /CodeIgniter/index.php/principal/index');		
	}
}

/* End of file nuevopost.php */
/* Location: ./application/controllers/nuevopost.php */?>
