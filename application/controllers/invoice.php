<?php

class invoice extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Invoice';
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('templates/header1', $data);
        $this->load->view('templates/sidebar1');
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates/footer1');
    }



    public function detail($id)
    {
        $data['judul'] = 'Detail Invoice';
        $data['invoice'] = $this->model_invoice->getInvoicebyId($id);
        $data['pesanan'] = $this->model_invoice->getPesananbyId($id);
        $this->load->view('templates/header1', $data);
        $this->load->view('templates/sidebar1');
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('templates/footer1');
    }
} 