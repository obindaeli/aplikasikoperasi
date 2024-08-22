      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pengguna</h1>
          </div>
          
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                    <h4>Daftar Pengguna</h4>
                    <div class="card-header-action">
                        <div class="btn-group">
                            <a href="<?=base_url('Dashboard/tambahpengguna')?>" class="btn btn-primary"> Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>                                 
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Role User</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                      $no=1; 
                                      foreach($pengguna as $row) :?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++; ?> </td>
                                            <td><?php echo $row->nama_user; ?> </td>
                                            <td class="text-center"><?php echo $row->username; ?> </td>
                                            <td class="text-center"><?php echo $row->role_id; ?> </td>
                                            <td class="text-center">
                                                <a href="<?= base_url('Dashboard/editpengguna/'); ?><?= $row->id_user; ?>" class="badge badge-warning">
                                                        <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="<?= base_url('Dashboard/hapuspengguna/'); ?><?= $row->id_user; ?>" class="badge badge-danger tombol-hapus">
                                                      <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?> 
                                </tbody>
                            </table>
                        </div>
                </div>
              </div>
            </div>
            
            </div>
        </div>
        </section>
    </div>
    