<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Laporan RAT</h1>
       
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                <div class="card-header">
                    <h4>Daftar RAT</h4>
                    <div class="card-header-action">
                        <div class="btn-group">
                            <a href="<?=base_url('Koperasi/tambahrat')?>" class="btn btn-primary"> Tambah RAT</a>
                            <a href="<?=base_url('Koperasi/Report')?>" class="btn btn-warning"> Report RAT </a>
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
                                    <th>Tahun RAT</th>
                                    <th></th>
                                    <th>Nama Koperasi</th>
                                    <th>Modal Usaha</th>
                                    <th>Volume Usaha</th>
                                    <th>Sisa Hasil Usaha</th>   
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                      $no=1; 
                                      foreach($rat as $data) :?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++; ?> </td>
                                            <td><?php echo $data->tahun_rat; ?> </td>
                                            <td></td>
                                            <td><?php echo $data->nama_koperasi; ?> </td>
                                            <td><?php echo $data->modal_koperasi; ?> </td>
                                            <td><?php echo $data->volume_usaha; ?> </td>
                                            <td><?php echo $data->sisa_hasil; ?> </td>
                                           
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