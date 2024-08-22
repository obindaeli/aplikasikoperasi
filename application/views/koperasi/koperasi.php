<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Koperasi</h1>
       
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                <div class="card-header">
                    <h4>Daftar Koperasi</h4>
                    <div class="card-header-action">
                        <div class="btn-group">
                            <a href="<?=base_url('Dashboard/tambahdesa')?>" class="btn btn-primary"> Tambah Data</a>
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
                                    <th>Nama Koperasi</th>
                                    <th>Jenis Koperasi</th>
                                    <th>Jumlah Anggota</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                      $no=1; 
                                      foreach($koperasi as $data) :?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++; ?> </td>
                                            
                                            <td><?php echo $data->nama_koperasi; ?> </td>
                                            <td><?php echo $data->jenis_koperasi; ?> </td>
                                            <td><?php echo $data->jumlah_anggota; ?> </td>
                                            <td></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('Koperasi/detailkoperasi/'); ?><?= $data->id_desa; ?>" class="badge badge-warning">
                                                        <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="<?= base_url('Koperasi/detailkoperasi/'); ?><?= $data->id_desa; ?>" class="badge badge-warning">
                                                        <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="<?= base_url('Dashboard/hapusdesa/'); ?><?= $data->id_desa; ?>" class="badge badge-danger tombol-hapus">
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