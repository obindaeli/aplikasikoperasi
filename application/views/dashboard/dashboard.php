      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-body text-center">
                 
                  <img src="<?=base_url('assets/')?>img/niasbarat.png" alt="niasbarat" width="10%" height="35%">
                  <h3 class="text-primary">E-KOPERASI NB</h3>
                  <h4>APLIKASI KOPERASI NIAS BARAT</h4>
                  <h6>DINAS KETENAGA KERJAAN, KOPERASI DAN UKM NIAS BARAT</h6>
                  
                  

                </div>
              </div>
            </div>
            
          </div>
         <div class="row">
					<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                    <h4>Grafik Koperasi</h4>
                        <div class="card-header-action">
                            <!-- <div class="btn-group">
                                <a href="<?=base_url('Koperasi/tambahrat')?>" class="btn btn-primary"> Tambah Data</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body">
                      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                        <canvas id="myChart" width="400" height="70"></canvas>
                      </div>
                    </div>
                </div>
            </div>
          </div>
       
         
        </section>
      </div>
    