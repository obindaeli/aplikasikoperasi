<footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; <?=date('Y');?> <div class="bullet">OMD TECHNOLOGY
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

 <!-- General JS Scripts -->
 <script src="<?=base_url()?>/assets/modules/jquery.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/popper.js"></script>
  <script src="<?=base_url()?>/assets/modules/tooltip.js"></script>
  <script src="<?=base_url()?>/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/moment.min.js"></script>
  <script src="<?=base_url()?>/assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="<?=base_url()?>/assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/chart.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?=base_url()?>/assets/modules/summernote/summernote-bs4.js"></script>
  <script src="<?=base_url()?>/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/datatables/datatables.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/jquery-ui/jquery-ui.min.js"></script>


  <!-- Page Specific JS File -->
  <script src="<?=base_url()?>/assets/js/page/index-0.js"></script>
  <script src="<?=base_url()?>/assets/js/page/modules-datatables.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

    <script>
        const flashData = $('.flash-data').data('flashdata');
        notifikasi = flashData.split('-');
        if (flashData != '') {
            Swal.fire({
                icon: notifikasi[0],
                title: notifikasi[1],
                text: notifikasi[2],
              
            })
        }

        // tombol-hapus
        $('.tombol-hapus').on('click', function (e) {
        
        e.preventDefault();
        const Href = $(this).attr('href');

        Swal.fire({
            title: 'Anda Yakin ',
            text: "Menghapus Data Ini ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
            if (result.value) {
                document.location.href = Href;
            }
        })

        });
    </script>
    
    <script>
        // Data dari controller
        var chartLabels = <?php echo json_encode($chart_data['labels']); ?>;
        var chartValues = <?php echo json_encode($chart_data['values']); ?>;

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie', // Tipe grafik pie
            data: {
                labels: chartLabels,
                datasets: [{
                    label: 'Kategori',
                    data: chartValues,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(185, 102, 182, 0.2',
                        'rgba(147, 102, 197, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(185, 192, 182, 1)',
                        'rgba(147, 192, 197, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                var label = tooltipItem.label || '';
                                if (label) {
                                    label += ': ' + tooltipItem.raw;
                                }
                                return label;
                            }
                        }
                    }
                }
            }
        });
    </script>   
  <!-- Template JS File -->
  <script src="<?=base_url()?>/assets/js/scripts.js"></script>
  <script src="<?=base_url()?>/assets/js/custom.js"></script>
</body>
</html>