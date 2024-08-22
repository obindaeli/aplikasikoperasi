<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pengguna</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url('Dashboard/pengguna')?>">Dashboard</a></div>
              <div class="breadcrumb-item">Tambah Pengguna</div>
            </div>
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Pengguna</h4>
                       
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Dashboard/tambahpengguna'); ?>" method="POST">
                           
                            <div class="form-group col-8">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="a" autocomplete="off">
                            </div>
                            <div class="form-group col-8">
                                <label>Role User</label>
                                <select name="b" id="" class="form-control" required>
                                  <option value="" disabled selected hidden>[PILIH ROLE]</option>
                                  <option value="1">Administrator</option>
                                  <option value="1">Operator</option>
                                                                
                                  ?>

                                </select>
                            </div>
                            <div class="form-group col-8">
                                <label>Username</label>
                                <input type="text" class="form-control" name="c" autocomplete="off">
                            </div>
                            <div class="form-group col-8">
                                <label>Kata Sandi</label>
                                <input type="password" class="form-control" name="d">
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