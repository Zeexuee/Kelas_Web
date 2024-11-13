<?php

  class Dashboard extends CI_Controller{
  	public function index (){

  	$data['barang'] = $this->model_barang->tampil_data()->result();
  	$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
  	}
  

	 public function tambah_ke_keranjang($id)
    {
        // Mencari barang berdasarkan ID
        $barang = $this->model_barang->find($id);

        // Jika barang tidak ditemukan
        if ($barang === null) {
            show_404(); // Menampilkan halaman 404 jika barang tidak ditemukan
        }

        // Menyiapkan data untuk dimasukkan ke keranjang
        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,  // Jumlah item yang ditambahkan
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg,
        );

        // Menambahkan barang ke keranjang
        $this->cart->insert($data);

        // Redirect ke halaman dashboard setelah item ditambahkan
        redirect('dashboard');
    }

    public function detail_keranjang()
    {

        $data['judul'] = 'Detail Keranjang Belanja';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

}
?>   