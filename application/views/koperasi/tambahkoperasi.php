<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Koperasi</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url('Koperasi/koperasi')?>">Koperasi</a></div>
              <div class="breadcrumb-item">Tambah Koperasi</div>
            </div>
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Koperasi</h4>
                       
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Koperasi/tambahkoperasi'); ?>" method="POST">
                           
                            <div class="form-group col-8">
                                <label>Nama Koperasi</label>
                                <input type="text" class="form-control" name="a" autocomplete="off">
                            </div>
                            

                            <div class="form-group col-8">
                                <label>Jenis Koperasi</label>
                                <select name="b" id="" class="form-control" required>
                                  <option value="" disabled selected hidden>[PILIH JENIS KOPERASI]</option>
                                  <?php 
                                    foreach ($jenis as $row ): 
                                      echo '<option value="'.$row->id_jenis_koperasi.'">'.$row->jenis_koperasi.'</option>
                                      ';
                                      endforeach;                                  
                                  ?>
                                </select>
                            </div>

                            <div class="form-group col-8">
                                <label>Nama Ketua</label>
                                <input type="text" class="form-control" name="c" autocomplete="off">
                            </div>

                            <div class="form-group col-8">
                                <label>Nama Sekretaris</label>
                                <input type="text" class="form-control" name="d" autocomplete="off">
                            </div>

                            <div class="form-group col-8">
                                <label>Nama Bendahara </label>
                                <input type="text" class="form-control" name="e" autocomplete="off">
                            </div>

                            <div class="form-group col-8">
                                <label>Nama Pengawas </label>
                                <input type="text" class="form-control" name="f" autocomplete="off">
                            </div>

                            <div class="form-group col-8">
                                <label>Jumlah Anggota </label>
                                <input type="number" class="form-control" name="g" autocomplete="off">
                            </div>
                            
                            <div class="form-group col-8">
                                <label>Alamat </label>
                                <input type="text" class="form-control" name="h" autocomplete="off">
                            </div>

                            <div class="form-group col-8">
                                <label>Kecamatan</label>
                                <select name="i" id="" class="form-control" required>
                                  <option value="" disabled selected hidden>[PILIH KECAMATAN]</option>
                                  <?php 
                                    foreach ($kecamatan as $row ): 
                                      echo '<option value="'.$row->id_kecamatan.'">'.$row->nama_kecamatan.'</option>
                                      ';
                                      endforeach;                                  
                                  ?>
                                </select>
                            </div>
                            <div class="form-group col-8">
                                <label>Desa</label>
                                <select name="j" id="" class="form-control" required>
                                  <option value="" disabled selected hidden>[PILIH DESA]</option>
                                  <?php 
                                    foreach ($desa as $row ): 
                                      echo '<option value="'.$row->id_desa.'">'.$row->nama_desa.'</option>
                                      ';
                                      endforeach;                                  
                                  ?>
                                </select>
                            </div>
                            
                
                            <div class="form-group col-4">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <button class="btn btn-danger" type="reset">Batal</button>
                            </div>
                        </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>