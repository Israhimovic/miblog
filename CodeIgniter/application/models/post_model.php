<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Post_model extends CI_Model {
		function __construct()
		{
			parent::__construct();
		}
		/**
		 * ===============================================================
		 * Función que la ejecutas y devuelve todos los posts.
		 *
		 * @return query $q Devuelve todos los posts de la BBDD de la tabla
		 * posts ordenador por codigo de posts descendentemente.
		 * ===============================================================
		**/
		function getPosts()
		{
			$this->db->order_by("cod_post", "desc");
			$q = $this->db->get('posts');
			return $q;
		}
		/**
		 * ===============================================================
		 * Función que la ejecutas e inserta en la base de datos el post.
		 * @param array $data Obtiene los datos para insertar en BBDD.
		 * ===============================================================
		**/			
		function insert($data) {
			$this->db->set('titulo', $data['titulo']);
			
			$this->db->set('desc', $data['desc']);

			$this->db->set('autor', $data['autor']);

			$this->db->set('marca', $data['marca']);				

			$this->db->set('modelo', $data['modelo']);	
				
			$this->db->insert('posts');
		}
	}
?>