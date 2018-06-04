<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Job Application in Waiting</h4>
            <div class="box">
              <div class="table-responsive">
                <table id="datatable" class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Lowongan</th>
                      <th>Kategori</th>
                      <th>Perusahaan</th>
                      <th>Kandidat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    <?php
                    foreach ($waiting as $a) {
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
                        <?php echo($a->nama); ?>
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