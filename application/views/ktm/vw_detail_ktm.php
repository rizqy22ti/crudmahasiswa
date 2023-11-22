<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="h3 mb-4 text-gray-800">
                <?php echo $judul; ?>
            </h1>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12">
                            Detail ktm
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <h2 class="card-title">
                                    <?= $ktm['nama']; ?>
                                </h2>
                                <div class="col-md-4">NIM</div>
                                <div class="col-md-2">:</div>
                                <div class="col-md-6">
                                    <?= $ktm['nim']; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">Jurusan</div>
                                <div class="col-md-2">:</div>
                                <div class="col-md-6">
                                    <?= $ktm['jurusan']; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">tanggal lahir</div>
                                <div class="col-md-2">:</div>
                                <div class="col-md-6">
                                    <?= $ktm['tanggal_lahir']; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">alamat</div>
                                <div class="col-md-2">:</div>
                                <div class="col-md-6">
                                    <?= $ktm['alamat']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer justify-content-center">
                            <a href="<?= base_url('index.php/ktm') ?>" class="btn btn-danger">Tutup</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>