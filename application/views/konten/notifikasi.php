<script>
    function select_data($IDNOTIFIKASI,IDUSER, $TEKS_NOTIF){
      $("#IDNOTIFIKASI2").val($IDNOTIFIKASI);
      $("#IDUSER2").val($IDUSER);
      $("#TEKS_NOTIF2").val($TEKS_NOTIF);
    }
    function refresh(){
      $("#IDNOTIFIKASI2").val("");
      $("#IDUSER2").val("");
      $("#TEKS_NOTIF2").val("");
    }
    }
  </script>

    <section class="content-header">
      <h1>
        <?php echo $title; ?>
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo $title; ?></li>
      </ol>
    </section>

    <?php
      $data = $this->session->flashdata('sukses');
      if ($data!="") {?>
        <div class="alert alert-success" role="alert"><strong>Sukses!!</strong>
            <?php echo $data; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="close"></button>
            <span aria-hidden="true"></span>
        </div>
      <?php }
    ?>

    <div class="box" style="overflow-x: scroll;">
      <div class="box-header">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah" onclick="refresh()"><i class="fa fa-plus-circle"></i>Tambah</button>
      </div>
      <div class="box-body">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <td>no</td>
              <td>IDNOTIFIKASI</td>
              <td>IDUSER</td>
              <td>TEKS_NOTIF</td> 
              <td>aksi</td>
            </tr>
          </thead>
          <tbody>
              <?php $no=1;
                foreach ($datakategori->result() as $rows) { ?>
                  <tr>
                    <td><?= $no++ ;?></td>
                    <td><?= $rows->IDNOTIFIKASI ?></td>
                    <td><?= $rows->IDUSER ?></td>
                    <td><?= $rows->TEKS_NOTIF ?></td>
                    
                    <td>
                      <a style="cursor: pointer;" onclick="select_data(
                      '<?= $rows->IDNOTIFIKASI ?>',
                      '<?= $rows->IDUSER ?>'
                      '<?= $rows->TEKS_NOTIF ?>'
                      )" data-toggle="modal" data-target="#modal-update"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="<?php base_url()?>Notifikasi/hapus/<?php echo $rows->IDNOTIFIKASI; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                  </tr>
                <?php }
              ?>
          </tbody>
        </table>
      </div>
    </div>

   <!-- membuat modal tambah boostrap -->
   <div class="modal fade" id="modal-tambah" role="dialog">
     <div class="modal-dialog">
       <form action="<?php echo site_url('Notifikasi/simpan')?>" method="post" accept-charset="utf-8">
          <div class="modal-content">
            <div class="modal-header bq-primary">
              <button type="button" class="close" data-dismiss="modal"></button>
              <h4 class="modal-title">Tambah Data</h4>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                <div class="form-horizontal text-left">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDNOTIFIKASI </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDNOTIFIKASI" id="IDNOTIFIKASI" class="form-control" value="" placeholder="Masukkan IDNOTIFIKASI" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDUSER </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDUSER" id="IDUSER" class="form-control" value="" placeholder="Masukkan IDUSER" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">TEKS_NOTIF </label>
                      <div class="col-sm-10">
                        <input type="text" name="TEKS_NOTIF" id="TEKS_NOTIF" class="form-control" value="" placeholder="Masukkan TEKS_NOTIF" required>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2">Simpan</i></button>
            </div>
          </div>
       </form>
     </div>
   </div>

   <!-- membuat modal update boostrap -->
   <div class="modal fade" id="modal-update" role="dialog">
     <div class="modal-dialog">
       <form action="<?php echo site_url('Notifikasi/ubah')?>" method="post" accept-charset="utf-8">
          <div class="modal-content">
            <div class="modal-header bq-primary">
              <button type="button" class="close" data-dismiss="modal"></button>
              <h4 class="modal-title">Edit Data</h4>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                <div class="form-horizontal text-left">
                  <div class="box-body">
                    <div class="form-group">
                      <input type="hidden" name="IDNOTIFIKASI" id="IDNOTIFIKASI2" class="form-control" value="" placeholder="Masukkan IDNOTIFIKASI" required>
                      <label class="col-sm-2 control-label" for="">IDUSER </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDUSER" id="IDUSER2" class="form-control" value="" placeholder="Masukkan IDUSER" required>
                      </div>
                      <label class="col-sm-2 control-label" for="">TEKS_NOTIF </label>
                      <div class="col-sm-10">
                        <input type="text" name="TEKS_NOTIF" id="TEKS_NOTIF2" class="form-control" value="" placeholder="Masukkan TEKS_NOTIF" required>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2">Simpan</i></button>
            </div>
          </div>
       </form>
     </div>
   </div>