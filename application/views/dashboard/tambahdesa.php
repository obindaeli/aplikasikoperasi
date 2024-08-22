<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Desa</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url('Dashboard/desa')?>">Dashboard</a></div>
              <div class="breadcrumb-item">Tambah Desa</div>
            </div>
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Desa</h4>
                       
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Dashboard/tambahdesa'); ?>" method="POST">
                           
                            <div class="form-group col-8">
                                <label>Nama Kecamatan</label>
                                <select name="a" id="" class="form-control" required>
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
                                <label>Nama Desa</label>
                                <input type="text" class="form-control" name="b" autocomplete="off">
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