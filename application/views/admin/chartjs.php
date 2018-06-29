<div class="container-fluid">
          <!-- CHART -->
       
          <div class="row">
            <!-- CHART STATUS LAPORAN -->
            <div class="col-xs-5">
            <div class="box box-primary" style="margin-top: 87px;">

            <div class="row">
              <div class="col-xs-1">
                <h4 class="proses-chart">&#9632</h4>
              </div>

              <div class="col-xs-4">
                <h4>Kandidat Aktif : <?php echo $kandidataktif?> </h4>
              </div>
              <div class="col-xs-1 col-xs-offset-2">
                <h4 class="tunggu-chart">&#9632</h4>
              </div>
              <div class="col-xs-4">
                <h4>Non Aktif : <?php echo $kandidatnonaktif?> </h4>
              </div>
            </div>
            

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
 <div class="col-xs-4 col-xs-offset-2">
                <div class="box-body">
                  <canvas id="pieChart"></canvas>
                </div>
            </div>
          </div>

          <!-- TABEL -->
          <div class="container">
            <div class="row">
                <div class="col-xs-12">
                  <h4 class="box-title ditolak-chart text-center">Kandidat Aktif</h4>       
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                  <th>Kode Kandidat</th>
                  <th>Nama</th>
                  <th>Handphone</th>
                  <th>Email</th>
                  <th>Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                <?php 
                          foreach ($kana as $b) {
                          ?>
                <tr>
                  <td>
                    <?php echo ($no++); ?>
                  </td>
                  <td>
                    <?php echo($b->id_kandidat); ?>
                  </td>
                  <td>
                    <?php echo ($b->nama); ?>
                  </td>
                  <td>
                    <?php echo($b->telp); ?>
                  </td>
                  <td>
                    <?php echo($b->email); ?>
                  </td>
                  <td>
                    <?php echo($b->jk); ?>
                  </td>
                </tr>
                <?php
              }
                ?>
                    </tbody>
                  </table>
                </div>

              </div>
             
             
            
              <div class="row">
                <div class="col-xs-12">
                  <h4 class="box-title tunggu-chart text-center">Kandidat Non Aktif</h4>       
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                  <th>Kode Kandidat</th>
                  <th>Nama</th>
                  <th>Handphone</th>
                  <th>Email</th>
                  <th>Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                <?php 
                          foreach ($kanon as $a) {
                          ?>
                <tr>
                  <td>
                    <?php echo ($no++); ?>
                  </td>
                  <td>
                    <?php echo($a->id_kandidat); ?>
                  </td>
                  <td>
                    <?php echo ($a->nama); ?>
                  </td>
                  <td>
                    <?php echo($a->telp); ?>
                  </td>
                  <td>
                    <?php echo($a->email); ?>
                  </td>
                  <td>
                    <?php echo($a->jk); ?>
                  </td>
                  
                </tr>
                <?php
              }
                ?>
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

 //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    // JSON STATUS
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : <?=$kandidataktif?>,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'Aktif'
      },
      {
        value    : <?=$kandidatnonaktif?>,
        color    : '#3c8dbc',
        highlight: '#3c8dbc',
        label    : 'NonAktif'
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

</html>
