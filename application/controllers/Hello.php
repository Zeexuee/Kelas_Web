<?php

class Hello extends CI_Controller {
  
   public function index(){
     $this->load->model('m_sewa');
     $data ['mahasiswa'] = $this->m_sewa->get_data();

     $this->load->view('view_mahasiswa',$data);
   }
} 

?>