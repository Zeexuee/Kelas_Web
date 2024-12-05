<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Tambah Barang</title>
</head>
<body>
<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang">
        <i class="fas fa-plus fa-sm"></i> Tambah Barang
    </button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php $no = 1; foreach ($barang as $brg) : ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo htmlspecialchars($brg->nama_brg); ?></td>
                <td><?php echo htmlspecialchars($brg->keterangan); ?></td>
                <td><?php echo htmlspecialchars($brg->kategori); ?></td>
                <td><?php echo htmlspecialchars($brg->harga); ?></td>
                <td><?php echo htmlspecialchars($brg->stok); ?></td>
                <td><?php echo anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>'); ?></td>
                <td><?php echo anchor ('data_barang/edit/' .$brg->id_brg , '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                <td><?php echo anchor ('data_barang/hapus/' .$brg->id_brg , '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>' ) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('data_barang/tambah_aksi'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                    <option>Elektronik</option>
                    <option>Pakaian Pria</option>
                    <option>Pakaian Wanita</option>
                    <option>Pakaian Anak</option>
                    <option>Olahraga</option>
                </select>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Gambar Produk</label><br>
                <input type="file" name="gambar" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
