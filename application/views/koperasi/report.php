<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Report</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url('Koperasi/rat')?>">RAT</a></div>
              <div class="breadcrumb-item">Report RAT</div>
            </div>
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Report RAT</h4>
                       
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Koperasi/generate_report'); ?>" method="POST">
                           
                            <div class="form-group col-8">
                                <label>Nama Koperasi</label>
                                <select name="a" id="" class="form-control" required>
                                  <option value="" disabled selected hidden>[PILIH KOPERASI]</option>
                                  <?php 
                                    foreach ($koperasi as $row ): 
                                      echo '<option value="'.$row->id_koperasi.'">'.$row->nama_koperasi.'</option>
                                      ';
                                      endforeach;                                  
                                  ?>
                                </select>
                            </div>

                            <div class="form-group col-8">
                                <label>Tahun RAT</label>
                                <select name="b" id="" class="form-control" required>
                                  <option value="" disabled selected hidden>[PILIH TAHUN]</option>
                                  <option value="2021">2021</option>
                                  <option value="2022">2022</option>
                                  <option value="2023">2023</option>
                                  <option value="2024">2024</option>
                                 
                                </select>
                            </div>

                           

                            <div class="form-group col-4">
                                <button class="btn btn-primary" type="submit">Cetak</button>
                                <button class="btn btn-danger" type="reset">Batal</button>
                            </div>
                        </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>