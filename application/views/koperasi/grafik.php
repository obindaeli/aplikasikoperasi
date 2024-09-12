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
                    <h4>Grafik Koperasi</h4>
                    <div class="card-header-action">
                        <!-- <div class="btn-group">
                            <a href="<?=base_url('Koperasi/tambahrat')?>" class="btn btn-primary"> Tambah Data</a>
                        </div> -->
                    </div>
                </div>
                    <div class="card-body">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                    <canvas id="myChart" width="400" height="200"></canvas>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>