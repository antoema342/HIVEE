<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Report Surat Kerja Praktek
      <medium class="label label-info">Report</medium>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Dashboard</a></li>
      <li><i class="fa fa-building-o"></i> Surat Kerja Praktek</li>
      <li class="active"><i class="fa fa-book"></i> Report Surat Kerja Praktek</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <?php if ($this->session->flashdata('gagal_tanggal')): ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-close"></i>Info</h4>
            Maaf tanggal awal harus lebih kecil dari tanggal akhir
          </div>
        <?php elseif($this->session->flashdata('berhasil_hapus')): ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-close"></i>Info</h4>
            Berhasil Menghapus Surat Untuk Kerja Praktek
          </div>
        </div>
      <?php endif ?>
    </div>
    <div class="container-fluid" style="padding: 20px;">
      <div class="row">
        <div class="col-md-3" data-toggle="modal" data-target="#rekapitulasiModal">
          <div class="box text-center box-cetak-rd" style="padding: 20px;">
            <i class="fa fa-bar-chart" style="font-size: 50px;"></i>
            <p style="margin-top: 10px;">Cetak Rekapitulasi Data</p>
          </div>
        </div>
        <div class="col-md-3" data-toggle="modal" data-target="#laporanModal">
          <div class="box text-center box-cetak-ls" style="padding: 20px;">
            <i class="fa fa-edit" style="font-size: 50px;"></i>
            <p style="margin-top: 10px;">Cetak Laporan Surat</p>
          </div>
        </div>

        <div class="col-md-3" data-toggle="modal" data-target="#laporanJurusanModal">
          <div class="box text-center box-cetak-lp" style="padding: 20px;">
            <i class="fa fa fa-pie-chart" style="font-size: 50px;"></i>
            <p style="margin-top: 10px;">Cetak Laporan Perjurusan</p>
          </div>
        </div>
        <div class="col-md-3" data-toggle="modal" data-target="#myModal">
          <div class="box text-center box-cetak-hl" style="padding: 20px;">
            <i class="fa fa-exclamation-circle" style="font-size: 50px;"></i>
            <p style="margin-top: 10px;">Hapus Laporan</p>
          </div>
        </div>
      </div>
    </div> 
  </div>
</section>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title" id="myModalLabel">Hapus Data Surat</h4>
    </div>
    <div class="modal-body">
      <?php echo form_open('admin/HapusSuratKP',array('class'=>'form-horizontal','method'=>'post')); ?>
      <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
      <div class="form-group">
        <label for="startdate" class="col-md-3 control-label">Dari Tanggal</label>
        <div class="col-md-8">
          <input type="text" name="startdate" class="form-control datepicker" placeholder="Tanggal awal" required>
        </div>  
      </div>
      <div class="form-group">
        <label for="enddate" class="col-md-3 control-label">Sampai Tanggal</label>
        <div class="col-md-8">
          <input type="text" name="finishdate" class="form-control datepicker" placeholder="Tanggal awal" required>
          <div class="modal-footer">      
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>  
</div> 
</div>




<div class="modal fade" id="rekapitulasiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Laporan Untuk Rekapitulasi</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('admin/cetakLAPkp', array('class' =>'form-horizontal' ,'method'=>'post' )) ?>
        <div class="form-group">
          <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
          <label for="jurusan" class="col-md-3 control-label">Jurusan</label>
          <div class="col-md-8">
            <select name="jurusan" class="form-control" style="border-radius: 4px;" required>
              <option value=''>Pilih Jurusan</option>
              <option value="Sistem Informasi">Sistem Informasi</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
            </select>
          </div>
        </div>
        <div class="form-group ">
          <label for="startdate" class="col-md-3 control-label">Dari Tanggal</label>
          <div class="col-md-8">
            <input type="text" name="startdate" class="form-control datepicker" placeholder="Tanggal awal" required>
          </div>
        </div>
        <div class="form-group ">
          <label for="startdate" class="col-md-3 control-label">Sampai Tanggal</label>
          <div class="col-md-8">
            <input type="text" name="finishdate" class="form-control datepicker" placeholder="Tanggal Akhir" required>
          </div>
        </div>    
        <div class="modal-footer">      
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>   
</div> 


<div class="modal fade" id="laporanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Laporan Data Surat</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('admin/reportchart', array('class' =>'form-horizontal' ,'method'=>'post' )) ?>
        <div class="form-group">
          <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
          <label for="startdate" class="col-md-3 control-label">Dari Tanggal</label>
          <div class="col-md-8">
            <input type="text" name="startdate" class="form-control datepicker" placeholder="Tanggal awal" required>
          </div>  
        </div>
        <div class="form-group">
          <label for="enddate" class="col-md-3 control-label">Sampai Tanggal</label>
          <div class="col-md-8">
            <input type="text" name="enddate" class="form-control datepicker" placeholder="Tanggal awal" required>
          </div>
        </div>
        <div class="modal-footer">      
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>
      </form>
    </div>
  </div>
</div> 
</div>



<div class="modal fade" id="laporanJurusanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Laporan Data Surat Perjurusan</h4>
      </div>
      <div class="modal-body">
       <?php echo form_open('admin/reportperjurusan', array('class' =>'form-horizontal' ,'method'=>'post' )) ?>
       <div class="form-group">
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
        <label for="startdate" class="col-md-3 control-label">Dari Tanggal</label>
        <div class="col-md-8">
          <input type="text" name="startdate" class="form-control datepicker" placeholder="Tanggal awal" required>
        </div>  
      </div>
      <div class="form-group">
        <label for="enddate" class="col-md-3 control-label">Sampai Tanggal</label>
        <div class="col-md-8">
          <input type="text" name="enddate" class="form-control datepicker" placeholder="Tanggal awal" required>
        </div>  
      </div>
      <div class="modal-footer">      
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </form>
  </div>
</div>
</div> 
</div>