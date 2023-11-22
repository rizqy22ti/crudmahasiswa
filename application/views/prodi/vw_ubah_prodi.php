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
                    <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama Prodi</label>
                            <input type="text" name="nama" value="<?= $prodi['nama']; ?>" class="form-control" id="nama" placeholder="Nama Prodi">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="nim">Ruangan</label>
                            <input type="text" name="ruangan" value="<?= $prodi['ruangan']; ?>" class="form-control" id="ruangan" placeholder="Ruangan">
                            <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis kelamin">Jurusan</label>
                            <input type="text" name="jurusan" value="<?= $prodi['jurusan']; ?>" class="form-control" id="jurusan" placeholder="Jurusan">
                            <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Akreditasi</label>
                            <select name="akreditasi" value="<?= $prodi['akreditasi']; ?>" id="akreditasi" class="form-control">
                                <option value="">Pilih Akreditasi</option>
                                <option value="A" <?php if ($prodi['akreditasi'] == "A") {
                                                                echo "selected";
                                                            }?>>A</option>
                                <option value="B"<?php if ($prodi['akreditasi'] == "B") {
                                                                echo "selected";
                                                            }?>>B</option>
                            </select>
                            <?= form_error('Akreditasi', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="prodi">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" value="<?= $prodi['nama_kaprodi']; ?>" class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi">
                            <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="asal sekolah">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>" class="form-control" id="tahun_berdiri"
                                placeholder="Tahun Berdiri">
                                <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Output Lulusan</label>
                            <input type="text" name="output_lulusan" value="<?= $prodi['output_lulusan']; ?>" class="form-control" id="output_lulusan" placeholder="Output Lulusan">
                            <?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group mb-2 ">
							<img src="<?= base_url('assets/img/prodi/') . $prodi['gambar'] ?>" style="width: 100px;"
								class="img-tumbnail" alt="">
							<div class="custom-file">
								<input type="file" name="gambar"
								id="gambar" class="custom-file-input form-control" placeholder="Gambar">
								<label for="output_lulusan">Choose File</label>
								<?= form_error('gambar', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
						</div>
                        <a href="<?= base_url('index.php/prodi') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    