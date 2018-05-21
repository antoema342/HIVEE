 <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Non Active Job Seeker</h4>
                  <div class="box">
                  <div class="table-responsive">
            <table id="datatable" class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Kandidat</th>
                  <th>Nama</th>
                  <th>Handphone</th>
                  <th>Email</th>
                  <th>Jenis Kelamin</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                <?php 
                          foreach ($nonactive as $a) {
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
                  <td class="text-center">

                    <button class="btn btn-primary" data-href="" data-toggle="modal" data-target="#confirm" > 
                    Enable
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

