<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-12">
                    Detail Pinjaman
                </div>
                <div class="card-body">
                    <div class="row">
                        <h2 class="card-title">
                            <?= $pinjaman['nik']; ?>
                        </h2>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <?= $pinjaman['nama']; ?>
                        </h6>
                        <div class="col-md-4">NIM</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $pinjaman['alamat']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Jenis Kelamin</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $pinjaman['no_hp']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Prodi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $pinjamna['email']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Asal Sekolah</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $pinjamna['besar_pinjaman']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">No HP</div>
                        <div class="col-md-2">:</div>
                    <div class="col-md-6">
                        <?= $pinjaman['durasi']; ?>
                    </div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('index.php/pinjaman') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>