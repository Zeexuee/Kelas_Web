<?php

  class Dashboard_admin extends CI_Controller{
  	public function index (){

  
  	$this->load->view('templates/header1');
		$this->load->view('templates/sidebar1');
		$this->load->view('admin/dashboard');
		$this->load->view('templates/footer1');
  	}
  }


?>