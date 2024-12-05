<?php
class Model_kategori extends CI_Model
{
    public function data_elektronik()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'elektronik'])->result_array();
    }
    public function data_pria()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'Pakaian Pria'])->result_array();
    }
    public function data_wanita()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'Pakaian Wanita'])->result_array();
    }
    public function data_anak()
    {

        return $this->db->get_where('tb_barang', ['kategori' => 'Pakaian Anak'])->result_array();

       /* $result = $this->db->get_where('tb_barang', ['kategori' => 'Pakaian Anak'])->result_array();
        if ($this->$result->num_rows() > 0) {
            return $result;
        } else {
            return 0;
        } */
    }
    public function data_olahraga()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'Olahraga'])->result_array();
    }
}