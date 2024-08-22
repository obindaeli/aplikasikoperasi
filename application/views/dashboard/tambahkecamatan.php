<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Kecamatan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url('Dashboard/kecamatan')?>">Dashboard</a></div>
              <div class="breadcrumb-item">Tambah Kecamatan</div>
            </div>
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Kecamatan</h4>
                       
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Dashboard/tambahkecamatan'); ?>" method="POST">
                           
                            <div class="form-group col-8">
                                <label>Nama Kecamatan</label>
                                <input type="text" class="form-control" name="a" autocomplete="off">
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