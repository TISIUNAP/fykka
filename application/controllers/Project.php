<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata("login")!="!s10g!n"){
			redirect(site_url('sistema'));
		}
		$this->load->model("mgeneral");
	}

	public function index(){
		$this->load->view("project/new_project");

	}

	public function new_project(){

		$data = array(
			'userdata' => $this->mgeneral->get_data("usuarios",array('usu_ide' =>$this->session->userdata("ide") )),
			 );
		$this->load->view("project/new_project",$data);
	}

	public function guardar_proyecto(){

		$data = array(
			'pro_nombre' => $_POST["name"] , 
			'pro_descripcion' => $_POST["descripcion"] , 
			'pro_fecha_creacion' => $_POST["start"] , 
			'pro_encargado' => $this->session->userdata("ide"), 
			
		);
		$result=$this->mgeneral->insertar("proyecto",$data);
		return print_r($result);
	}
	public function list_project(){
		$data = array(
			'proyectos' => $this->mgeneral->get_data("proyecto",array('pro_encargado' =>$this->session->userdata("ide") )),
			 );
		$this->load->view("project/list_project",$data);

	}

	
}
