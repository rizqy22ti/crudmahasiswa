<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data ktm
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $ktm['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= $ktm['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" value="<?= $ktm['nim']; ?>" class="form-control" id="nim" placeholder="NIM">
                            <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" value="<?= $ktm['jurusan']; ?>" class="form-control" id="jurusan" placeholder="jurusan">
                            <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">tanggal lahir</label>
                            <input type="date" name="tanggal_lahir" value="<?= $ktm['tanggal_lahir']; ?>" class="form-control" id="tanggal_lahir" placeholder="tanggal_lahir">
                            <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" value="<?= $ktm['alamat']; ?>" class="form-control" id="alamat" placeholder="Alamat">
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <a href="<?= base_url('index.php/ktm') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah
                            ktm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>