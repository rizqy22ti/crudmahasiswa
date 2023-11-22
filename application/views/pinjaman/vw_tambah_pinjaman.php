<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Pinjaman
                </div>

                <div class="card-body">
                    <form action="<?= base_url(); ?>index.php/pinjaman/upload" method="POST">
                        <div class="form-group">
                            <label for="nama">nik</label>

                            <input type="text" name="nik" class="form-control" id="nik" placeholder="nik">
                        </div>
                        <div class="form-group">
                            <label for="nim">nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="nama">
                        </div>
                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="alamat">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">no hp</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp"
                                placeholder="No Hp">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label for="besar_pinjaman">besar pinjaman</label>
                            <input type="text" name="besar_pinjaman" class="form-control" id="besar_pinjaman" placeholder="besar_pinjaman">
                        </div>
                        <div class="form-group">
                            <label for="durasi">Durasi</label>
                            <input type="text" name="durasi" class="form-control" id="durasi" placeholder="durasi">
                        </div>
                        <a href="<? base_url() ?>index.php/pinjaman" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                            Pinjaman</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    