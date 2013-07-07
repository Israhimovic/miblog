<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Eliminar extends CI_Controller {
	/**
	 * ===============================================================
	 * Constructor del controlador Eliminar
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
	 * los pasa a la vista msgeliminar.
	 * 
	 * @param integer $cod se le pasa el codigo del post.
 	 * @param integer $pantalla se le pasa la pantalla desde la cual ha
	 * sido llamado el controlador.
	 * ===============================================================
	**/	
	public function index($cod,$pantalla)
	{
		$vars['codigo'] = $cod;
		$vars['pantalla'] = $pantalla;
		$this->load->view('msgeliminar',$vars);
	}
	/**
	 * ===============================================================
	 * Funcion que obtiene el codigo del post y pantalla y 
	 * elimina el post.
	 * 
	 * @param integer $cod se le pasa el codigo del post.
 	 * @param integer $pantalla se le pasa la pantalla desde la cual ha
	 * sido llamado el controlador.
	 * 
	 * Se carga el modelo "post_model" para acceder a la funcion
	 * baja para eliminar el post de BBDD.
	 * ===============================================================
	**/		
	public function eliminarpost($cod,$pantalla){
		$this->load->model("post_model", "principal");
		$this->principal->baja($cod);
		//mostramos la vista de nuevo.
		$this->load->helper('url');
		if($pantalla==0){
			redirect('principal','location');			
		}elseif($pantalla==1){
			redirect('panelcontrol','location');
		}
	}
}

/* End of file eliminar.php */
/* Location: ./application/controllers/eliminar.php */?>