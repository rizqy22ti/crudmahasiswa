<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Pinjaman
                </div>

                <div class="card-body">
                    <form action="<?= base_url(); ?>index.php/pinjaman/update" method="POST">
                    <input type="hidden" name="id" value="<?= $pinjaman['id']; ?>">
                        <div class="form-group">
                            <label for="nik">nik</label>
                            <input type="text" name="nik" value="<?= $pinjaman['nik']; ?>" class="form-control" id="nik" placeholder="nik">
                        </div>
                        <div class="form-group">
                            <label for="nama">nama</label>
                            <input type="text" name="nama" value="<?= $pinjaman['nama']; ?>" class="form-control" id="nama" placeholder="nama">
                        </div>
                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <input type="text" name="alamat" value="<?= $pinjaman['alamat']; ?>" class="form-control" id="alamat" placeholder="alamat">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">no hp</label>
                            <input type="text" name="no_hp" value="<?= $pinjaman['no_hp']; ?>" class="form-control" id="no_hp" placeholder="no_hp">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" name="email" value="<?= $pinjaman['email']; ?>" class="form-control" id="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label for="besar_pinjaman">besar pinjaman</label>
                            <input type="text" name="besar_pinjaman" value="<?= $pinjaman['besar_pinjaman']; ?>" class="form-control" id="besar_pinjaman" placeholder="besar_pinjaman">
                        </div>
                        <div class="form-group">
                            <label for="durasi">durasi</label>
                            <input type="text" name="durasi" value="<?= $pinjaman['durasi']; ?>" class="form-control" id="durasi" placeholder="durasi">
                        </div>
                        <a href="<? base_url() ?>index.php/pinjaman" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah
                            Pinjaman</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    