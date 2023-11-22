<div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <div class="row">
                        </div>
                        <div class="col-md-12">
                            
                            <h5 class="card-title"><?= $user['nama']; ?></h5>
                            <div class="card-body">
                            <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="card-img" style="width:100px;">    
                            </div>
            <p class="card-text"><?= $user['email']; ?></p>
            <p class="card-text"><small class="text-muted">Anggota Sejak <?= date('d F Y', $user['date_created']); ?></small></p>
             </div>
         </div>
                </div>
            </main>