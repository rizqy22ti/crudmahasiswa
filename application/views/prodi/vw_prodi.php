<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid p-4">
            <h1 class="h3 mb-4 text-gray-800">
                <?php echo $judul; ?>
            </h1>
            <div class="col-md-6"><a href="<?= base_url() ?>index.php/prodi/tambah" class="btn btn-info mb-2">Tambah
                    Prodi</a></div>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <table class="table p-5">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Prodi</td>
                    <td>Ruangan</td>
                    <td>Jurusan</td>
                    <td>Akreditasi</td>
                    <td>Nama Kaprodi</td>
                    <td>Tahun Berdiri</td>
                    <td>Output Lulusan</td>
                    <td>Gambar</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($prodi as $us): ?>
                    <tr>
                        <td>
                            <?= $i ?>
                        </td>
                        <td>
                            <?= $us['nama']; ?>
                        </td>
                        <td>
                            <?= $us['ruangan']; ?>
                        </td>
                        <td>
                            <?= $us['jurusan']; ?>
                        </td>
                        <td>
                            <?= $us['akreditasi']; ?>
                        </td>
                        <td>
                            <?= $us['nama_kaprodi']; ?>
                        </td>
                        <td>
                            <?= $us['tahun_berdiri']; ?>
                        </td>
                        <td>
                            <?= $us['output_lulusan']; ?>
                        </td>
                        <td>
                            <img src="<?= base_url('assets/img/prodi/') . $us['gambar'] ?>" style="width: 100px;" class="img-tumbnail" alt="">
                        </td>
                        <td>
                            <a href="<?= base_url('index.php/prodi/hapus/') . $us['id']; ?>"
                                class="btn btn-outline-danger">Hapus</a>
                            <a href="<?= base_url('index.php/prodi/edit/') . $us['id']; ?>"
                                class="btn btn-outline-warning">Edit</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>
</div>
</div>