<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Editpost extends CI_Controller {
	/**
	 * ===============================================================
	 * Constructor del controlador Editpost
	 * Carga el helper url
	 * ===============================================================
	**/
	function __construct() {
	 	parent::__construct();
		$this->load->helper('url');
	}
	
	/**
	 * ===============================================================
	 * Funcion que obtiene el codigo del post y pantalla y
	 * obtiene los datos del post desde BBDD y los pasa a la vista
	 * modificar.
	 * @param integer $cod se le pasa el codigo del post.
 	 * @param integer $pantalla se le pasa la pantalla desde la cual ha
	 * sido llamado el controlador.
	 * ===============================================================
	**/
	public function index($cod,$pantalla)
	{
		$vars['pantalla']=$pantalla;
		$this->load->model("post_model");
		$vars['query'] = $this->post_model->getPost($cod);
		$this->load->helper('url');
		$this->load->view('modificar',$vars);
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
	 * 
	 * Una vez guardado dependiendo de que pantalla ha llamado al 
	 * contorlador redirigimos a una pagina u otra.
	 * ===============================================================
	**/
	public function guardarpost() {
		//recogemos los datos por POST
		$data['titulo'] = $this->input->post('titulo');
		$data['desc'] = $this->input->post('textareadesc');
		$data['cod_post'] = $this->input->post('id');
		$this->load->library('wurfl');		
		$data['modelo'] =$this->wurfl->dameModelo();
		$data['marca'] =$this->wurfl->dameMarca();	
		//cargamos el modelo y llamamos a la función update()
		$this->load->model("post_model", "principal");
		$this->principal->update($data);
		//volvemos a cargar la primera vista
		$this->load->helper('url');
		if($this->input->post('pantalla')==0){
			redirect('/principal/index','location');			
			//header('Location: /principal/index');
		}elseif($this->input->post('pantalla')==1){			
			redirect('/panelcontrol/index','location');			
		}

	}
}
/* End of file editpost.php */
/* Location: ./application/controllers/editpost.php */?>
