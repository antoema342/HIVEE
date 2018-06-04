 <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Active Vacancy</h4>
                  <div class="box">
                  <div class="table-responsive">
            <table id="datatable" class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Perusahaan</th>
                  <th>Batas Pendaftaran</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                <?php 
                          foreach ($active as $a) {
                          ?>
                <tr>
                  <td>
                    <?php echo ($no++); ?>
                  </td>
                  <td>
                    <?php echo ($a->nama_lowongan); ?>
                  </td>
                  <td>
                    <?php echo($a->kategori); ?>
                  </td>
                  <td>
                    <?php echo($a->nm_perusahaan); ?>
                  </td>
                  <td>
                    <?php echo($a->bataspendaftaran); ?>
                  </td>
                  <td class="text-center">

                    <a class="btn btn-primary" href="<?=site_url("admin/nonaktifkanlowongan/$a->id_lowongan")?>" > 
                    Disable
                    </a>
                    
                    <a href="<?php echo site_url("admin/nonaktifkanlowongan/$a->id_lowongan") ?>" class="btn btn-danger">Delete</a>
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
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        </div>
      </div>
