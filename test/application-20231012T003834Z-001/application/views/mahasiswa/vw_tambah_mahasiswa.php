<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Mahasiswa
                </div>

                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>

                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM">
                        </div>
                        <div class="form-group">
                            <label for="jenis kelamin">Jenis Kelamin</label>
                            <select name="jenis kelamin" id="jenis kelamin" class="form-control">
                                <option values="">Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="prodi">Prodi</label>
                            <select name="prodi" id="prodi" class="form-control">
                                <option value="">Pilih Prodi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="asal sekolah">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah"
                                placeholder="Asal Sekolah">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="text" name="no_hp" class="form-control" id="asal_sekolah" placeholder="No HP">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                        <a href="<? base_url('mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                            Mahasiswa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    