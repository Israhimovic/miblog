<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	/**
	 * ===============================================================
	 * Funcion que carga el helper de sistema form y carga la 
	 * vista de nuestro formulario "login_view".
	 * ===============================================================
	**/
	function index()
	{
		$this->load->helper(array('form'));
		$this->load->view('login_view');
	}

}

?>