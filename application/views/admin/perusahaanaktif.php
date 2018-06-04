 <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Active Company</h4>
                  <div class="box">
                  <div class="table-responsive">
            <table id="datatable" class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Handphone</th>
                  <th>Email</th>
                  <th>Alamat</th>
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
                    <?php echo ($a->nm_perusahaan); ?>
                  </td>
                  <td>
                    <?php echo($a->telp); ?>
                  </td>
                  <td>
                    <?php echo($a->email); ?>
                  </td>
                  <td>
                    <?php echo($a->alamat_perusahaan); ?>
                  </td>
                  <td class="text-center">

                    <a class="btn btn-primary" href="<?=site_url("admin/nonaktifkanperusahaan/$a->id_perusahaan")?>"> 
                    Disable
                    </button>
                    
                    <a href="<?php //echo site_url(" admin/tolakemailkp/$u->id_surat") ?>" class="btn btn-danger">Delete</a>
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

