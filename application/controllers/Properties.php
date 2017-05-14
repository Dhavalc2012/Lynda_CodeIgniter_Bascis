<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Properties extends CI_Controller
{
   public function index()
   {
	//Commenting this because we have autoload helper 
	//$this->load->helper('url');
   	$data['user_name'] = 'Dhaval';
   	$data['status_group'] = ['All', 'Available', 'Unavailable'];
	$data['properties'] = $this->Property->all();   
   	$this->load->view('layouts/header');
   	$this->load->view('layouts/foundation_nav');
   	$this->load->view('properties/index', $data);
   	$this->load->view('layouts/footer');
   }
   public function show($id){
	   $data["id"] = $id;
	 //  $this->load->model('Property');
	   $data["name"] =  $this->Property->get();
	   $version = $this->Property->get_version();
	   $data['version'] = $version->conn_id->server_info;
	   $this->load->view('properties/show', $data);
   }
   public function db_test(){
	  // $this->load->model('Property');
	   $this->Property->connection_test();
   }
}
