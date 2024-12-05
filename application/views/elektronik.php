<div class="container-fluid">

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



     <div class="row text-center mt-3">
        <?php foreach ($elektronik as $el) : ?>
        <div class="col card ml-3" style="width: 16rem;">
            <img src="<?= base_url('uploads/' . $el['gambar']) ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-1"><?= $el['nama_brg']; ?></h5>
                <small><?= $el['keterangan']; ?></small> <br>
                <span class="badge badge-pill badge-success mb-3">Rp.<?= number_format($el['harga'], 0, ',', '.'); ?></span>
                <?= anchor('dashboard/tambah_ke_keranjang/' . $el['id_brg'], '<div class="btn btn-sm btn-primary">Tambah ke keranjang</div>') ?>
                <a href="<?= base_url('dashboard/detail/' . $el['id_brg']) ?>" class="btn btn-sm btn-success mb-0">Detail</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div> 