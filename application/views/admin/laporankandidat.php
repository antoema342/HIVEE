<div class="container-fluid">
          <!-- CHART -->
        <div class="row">
            <!-- CHART STATUS LAPORAN -->
        <?php 
          $jumlahTI = $tiwaiting + $tiproses + $tifinish + $titake + $titolak;
          $jumlahSI = $siwaiting + $siproses + $sifinish + $sitake + $sitolak;
        ?>
            <div class="col-xs-6">
            <div class="box box-primary" style="margin-top: 87px;">
            <div class="row">
              <div class="col-xs-1">
                <h4 class="si-chart">&#9632</h4>
              </div>
              <div class="col-xs-4">
                <h4>Sistem Informasi <?=$jumlahSI?></h4>
              </div>
            
        
              <div class="col-xs-1 col-xs-offset-2">
                <h4 class="ti-chart">&#9632</h4>
              </div>
              <div class="col-xs-4">
                <h4>Teknik Informatika : <?=$jumlahTI?></h4>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
          <div class="col-xs-4 col-xs-offset-1">
                <div class="box-body">

                  <canvas id="pieChart2"></canvas>
                </div>
            </div>
          </div>
          <!-- /.box -->
        </div>
            

          <!-- TABEL -->
          <div class="container">
            <div class="row">
                <div class="col-xs-12">
                  <h4 class="box-title si-chart text-center">Sistem Informasi</h4>       
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1; ?>
                      <?php foreach ($mahasiswaSI as $surat): ?>
                        <tr>
                          <td><?php cetak($no++)?></td>
                          <td><?php cetak($surat['nim'])?></td>
                          <td><?php cetak($surat['nama_mahasiswa'])?></td>
                          <td><?php cetak($surat['email'])?></td>
                          <td><?php cetak($surat['prodi'])?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <h4 class="box-title ti-chart text-center">Teknik Informatika</h4>       
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1; ?>
                      <?php foreach ($mahasiswaTI as $surat): ?>
                        <tr>
                          <td><?php cetak($no++)?></td>
                          <td><?php cetak($surat['nim'])?></td>
                          <td><?php cetak($surat['nama_mahasiswa'])?></td>
                          <td><?php cetak($surat['email'])?></td>
                          <td><?php cetak($surat['prodi'])?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
          
</div>
</body>
<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/jQueryUI/jquery-ui.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/raphael/raphael.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/morris.js/morris.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/Flot/jquery.flot.js')?>"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?php echo base_url('assets/plugins/Flot/jquery.flot.resize.js')?>"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?php echo base_url('assets/plugins/Flot/jquery.flot.pie.js')?>"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="<?php echo base_url('assets/plugins/Flot/jquery.flot.categories.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/chart.js/Chart.js')?>"></script>
<script>
  // JSON STATUS
    var pieChartCanvas = $('#pieChart2').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : <?php echo $jumlahTI; ?>,
        color    : '#E219B7',
        highlight: '#E219B7',
        label    : 'Teknik Informatika'
      },
      {
        value    : <?php echo $jumlahSI; ?>,
        color    : '#000000',
        highlight: '#000000',
        label    : 'Sistem Informasi'
      },
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)
</script>