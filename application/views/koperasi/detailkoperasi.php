<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Koperasi</h1>
       
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                <div class="card-header">
                    <h4>Data Koperasi</h4>
                </div>
                    <div class="card-body">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                        <div class="table">
                            <table class="table table-striped" id="table">                   
                                <tr>
                                    <td width="30%">Nama Koperasi</td>
                                    <td width="2%">:</td>
                                    <td><?php echo $detail->nama_koperasi ?></td>
                                </tr>
                                <tr>
                                    <td width="30%">Ketua Koperasi</td>
                                    <td width="2%">:</td>
                                    <td><?php echo $detail->ketua ?></td>
                                </tr>
                                <tr>
                                    <td width="30%">Sekretaris Koperasi</td>
                                    <td width="2%">:</td>
                                    <td><?php echo $detail->sekretaris ?></td>

                                </tr>
                                <tr>
                                    <td width="30%">Bendahara Koperasi</td>
                                    <td width="2%">:</td>
                                    <td><?php echo $detail->bendahara ?></td>
                                </tr>
                                <tr>
                                    <td width="30%">Pengawas Koperasi</td>
                                    <td width="2%">:</td>
                                    <td><?php echo $detail->pengawas ?></td>
                                </tr>
                                <tr>
                                    <td width="30%">Jumlah Anggota</td>
                                    <td width="2%">:</td>
                                    <td><?php echo $detail->jumlah_anggota ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td width="2%">:</td>
                                    <td><?php echo $detail->alamat ?></td>
                                </tr>
                                <tr>
                                    <td>Desa</td>
                                    <td width="2%">:</td>
                                    <td><?php echo $detail->id_desa ?></td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td width="2%">:</td>
                                    <td><?php echo $detail->id_kecamatan ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Data RAT</h4>
                </div>
                    <div class="card-body">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                    <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>                                 
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Tahun RAT</th>
                                    <th>Modal Usaha</th>
                                    <th></th>
                                    <th>Volume Usaha</th>
                                    <th>Sisa Hasil Usaha</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                      $no=1; 
                                      foreach($rat as $data) :?>
                                        <tr class="text-center">
                                            <td class="text-center"><?php echo $no++; ?> </td>
                                            <td><?php echo $data->tahun_rat; ?> </td>
                                            <td><?php echo $data->modal_koperasi; ?> </td>
                                            <td></td>
                                            <td><?php echo $data->volume_usaha; ?> </td>
                                            <td><?php echo $data->sisa_hasil; ?> </td>
                                        </tr>
                                    <?php endforeach; ?> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
          </div>
          
        </section>
      </div>