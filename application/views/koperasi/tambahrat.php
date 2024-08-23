<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>RAT</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url('Koperasi/rat')?>">Koperasi</a></div>
              <div class="breadcrumb-item">Tambah RAT</div>
            </div>
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah RAT</h4>
                       
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Koperasi/tambahkoperasi'); ?>" method="POST">
                           
                            <div class="form-group col-8">
                                <label>Nama Koperasi</label>
                                <select name="a" id="" class="form-control" required>
                                  <option value="" disabled selected hidden>[PILIH KOPERASI]</option>
                                  <?php 
                                    foreach ($jenis as $row ): 
                                      echo '<option value="'.$row->id_koperasi.'">'.$row->nama_koperasi.'</option>
                                      ';
                                      endforeach;                                  
                                  ?>
                                </select>
                            </div>

                            <div class="form-group col-8">
                                <label>Tahun RAT </label>
                                <input type="number" class="form-control" name="b" autocomplete="off">
                            </div>

                            <div class="form-group col-8">
                                <label>Modal Koperasi</label>
                                <input type="number" class="form-control" name="c" autocomplete="off">
                            </div>

                            <div class="form-group col-8">
                                <label>Volume Usaha </label>
                                <input type="number" class="form-control" name="d" autocomplete="off">
                            </div>

                            <div class="form-group col-8">
                                <label>Sisa Hasil Usaha</label>
                                <input type="number" class="form-control" name="e" autocomplete="off">
                            </div>

                            <div class="form-group col-8">
                                <label>Aset</label>
                                <input type="text" class="form-control" name="f" autocomplete="off">
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