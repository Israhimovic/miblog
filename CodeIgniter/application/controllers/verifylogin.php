<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {
	/**
	 * ===============================================================
	 * Constructor del controlador VerifyLogin
	 * Carga el modelo post_model
	 * ===============================================================
	**/		
	function __construct()
	{
	   parent::__construct();
	   $this->load->model('post_model','',TRUE);
	}
	/**
	 * ===============================================================
	 * Funcion que carga la librería form_validation de codeIgniter
	 * y se le indican las reglas de validacion de usuario.
	 * 
	 * Luego redirige a la pagina principal.
	 * ===============================================================
	**/		
	function index()
	{
	   //This method will have the credentials validation
	   $this->load->library('form_validation');
	
	   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
	
	   if($this->form_validation->run() == FALSE)
	   {
	   		redirect('principal','location');
	   }
	   else
	   {
	     redirect('principal', 'location');
	   }
	}
	/**
	 * ===============================================================
	 * Funcion que recibe el password y el usuario devuelve true o 
	 * false dependiendo si se valida la contraseña.
	 * @param string $password se le pasa la contraseña
	 * @return boolean Devuelve el resultado de la validacion.
	 * ===============================================================
	**/		
	function check_database($password)
	{
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');
		//query the database
		$result = $this->post_model->login($username, $password);
		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
			   $sess_array = array(
			     'id' => $row->id,
			     'username' => $row->username
			   );
			   $this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Usuario o contraseña erroneos.');
			return false;
		}
	}
}
?>