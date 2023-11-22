<div id="layoutSidenav_content">
            
         <div class="container-fluid px-3">
             <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
             <div class="row">
                 <div class="col-md-6"><a href="<?= base_url() ?>index.php/ktm/tambah" class="btn btn-info mb-2">Tambah ktm</a></div>
             </div>
             <div class="col-md-12">
                <?= $this->session->flashdata('message'); ?>
                 <table class="table">
                     <thead>
                         <tr>
                             <td>No</td>
                             <td>Nama</td>
                             <td>Nim</td>
                             <td>jurusan</td>
                             <td>Aksi</td>
                         </tr>
                     </thead>
                     <tbody>
                     <?php $i = 1; ?>
                            <?php foreach ($ktm as $us) : ?>
                                <tr>
                                    <td><?= $i; ?>.</td>
                                    <td><?= $us['nama']; ?></td>
                                    <td><?= $us['nim']; ?></td>
                                    <td><?= $us['jurusan']; ?></td>
                                    <td>
                                        <a href="<?= base_url('index.php/ktm/hapus/') . $us['id']; ?>" class="btn btn-outline-danger">Hapus</a>
                                        <a href="<?= base_url('index.php/ktm/edit/') . $us['id']; ?>" class="btn btn-outline-warning">Edit</a>
                                        <a href="<?= base_url('index.php/ktm/detail/') . $us['id'] ;?>" class="btn btn-outline-info">Detail</a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                     </tbody>
                 </table>
             </div>
         </div>