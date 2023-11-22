<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Prodi
                </div>

                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama Prodi</label>

                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Prodi">
                        </div>
                        <div class="form-group">
                            <label for="nim">Ruangan</label>
                            <input type="text" name="nim" class="form-control" id="nim" placeholder="Ruangan">
                        </div>
                        <div class="form-group">
                            <label for="jenis kelamin">Jurusan</label>
                            <input type="text" name="nim" class="form-control" id="nim" placeholder="Jurusan">
                        </div>
                        <div class="form-group">
                            <label for="email">Akreditasi</label>
                            <select name="prodi" id="prodi" class="form-control">
                                <option value="">Pilih Akreditasi</option>
                                <option value="Teknik Informatika">A</option>
                                <option value="Sistem Informasi">B</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="prodi">Nama Kaprodi</label>
                            <input type="text" name="nim" class="form-control" id="nim" placeholder="Nama Kaprodi">
                        </div>
                        <div class="form-group">
                            <label for="asal sekolah">Tahun Berdiri</label>
                            <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah"
                                placeholder="Tahun Berdiri">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Output Lulusan</label>
                            <input type="text" name="no_hp" class="form-control" id="asal_sekolah" placeholder="Output Lulusan">
                        </div>
                        <a href="<? base_url('mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    