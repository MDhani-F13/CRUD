<script>
    function select_data($IDBUKTI_DEPOSIT, $IDUSER, $IDFOTODEPOSIT, $IDNOMINALDEPOSIT){
      $("#IDBUKTI_DEPOSIT2").val($IDBUKTI_DEPOSIT);
      $("#iduser2").val($IDUSER);
      $("#foto_deposit2").val($IDFOTODEPOSIT);
      $("#nominal_deposit2").val($IDNOMINALDEPOSIT);
    }
    function refresh(){
    $("#IDBUKTI_DEPOSIT").val("");
      $("#iduser2").val("");
      $("#foto_deposit").val("");
      $("#nominal_deposit").val("");
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

    <div class="box">
      <div class="box-header">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah" onclick="refresh()"><i class="fa fa-plus-circle"></i>Tambah</button>
      </div>
      <div class="box-body">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <td>no</td>
              <td>idbukti_deposit</td>
              <td>iduser</td>
              <td>foto_deposit</td>
              <td>nominal_deposit</td>
              <td>aksi</td>
            </tr>
          </thead>
          <tbody>
              <?php $no=1;
                foreach ($datakategori->result() as $rows) { ?>
                  <tr>
                    <td><?= $no++ ;?></td>
                    <td><?= $rows->IDBUKTI_DEPOSIT ?></td>
                    <td><?= $rows->IDUSER ?></td>
                    <td><?= $rows->IDFOTODEPOSIT ?></td>
                    <td><?= $rows->IDNOMINALDEPOSIT ?></td>
                    <td>
                      <a style="cursor: pointer;" onclick="select_data(
                      '<?= $rows->IDBUKTI_DEPOSIT ?>',
                      '<?= $rows->IDUSER ?>'
                      '<?= $rows->IDFOTODEPOSIT ?>'
                      '<?= $rows->IDNOMINALDEPOSIT ?>'
                      )" data-toggle="modal" data-target="#modal-update"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="<?php base_url()?>BuktiDeposit/hapus/<?php echo $rows->IDBUKTI_DEPOSIT; ?>"><i class="glyphicon glyphicon-trash"></i></a>
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
       <form action="<?php echo site_url('BuktiDeposit/simpan')?>" method="post" accept-charset="utf-8">
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
                      <label class="col-sm-2 control-label" for="">IDBUKTI_DEPOSIT </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDBUKTI_DEPOSIT" id="IDBUKTI_DEPOSIT" class="form-control" value="" placeholder="Masukkan idbukti_deposit" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDUSER </label>
                      <div class="col-sm-10">
                        <input type="text" name="iduser" id="iduser" class="form-control" value="" placeholder="Masukkan iduser" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDFOTODEPOSIT </label>
                      <div class="col-sm-10">
                        <input type="text" name="foto_deposit" id="foto_deposit" class="form-control" value="" placeholder="Masukkan foto_deposit" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDNOMINALDEPOSIT </label>
                      <div class="col-sm-10">
                        <input type="text" name="nominal_deposit" id="nominal_deposit" class="form-control" value="" placeholder="Masukkan nominal_deposit" required>
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
       <form action="<?php echo site_url('BuktiDeposit/ubah')?>" method="post" accept-charset="utf-8">
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
                      <input type="hidden" name="IDBUKTI_DEPOSIT2" id="IDBUKTI_DEPOSIT2" class="form-control" value="" placeholder="Masukkan IDBUKTI_DEPOSIT" required>
                      <label class="col-sm-2 control-label" for="">IDUSER </label>
                      <div class="col-sm-10">
                        <input type="text" name="iduser" id="iduser" class="form-control" value="" placeholder="Masukkan iduser" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDFOTODEPOSIT </label>
                      <div class="col-sm-10">
                        <input type="text" name="foto_deposit" id="foto_deposit" class="form-control" value="" placeholder="Masukkan foto_deposit" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDNOMINALDEPOSIT </label>
                      <div class="col-sm-10">
                        <input type="text" name="nominal_deposit" id="nominal_deposit" class="form-control" value="" placeholder="Masukkan nominal_deposit" required>
                      </div>
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