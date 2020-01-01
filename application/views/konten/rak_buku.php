<script>
    function select_data($IDRAK, $IDUSER, $LONG_RAK1, $LAT_RAK1){
      $("#IDRAK2").val($IDRAK);
      $("#IDUSER2").val($IDUSER);
      $("#LONG_RAK12").val($LONG_RAK1);
      $("#LAT_RAK12").val($LAT_RAK1);
      $("#LONG_RAK22").val($LONG_RAK2);
      $("#LATRAK12").val($LATRAK1);
    }
    function refresh(){
      $("#IDRAK2").val("");
      $("#IDUSER2").val("");
      $("#LONG_RAK12").val("");
      $("#LAT_RAK12").val("");
      $("#LONG_RAK22").val("");
      $("#LATRAK12").val("");
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
              <td>IDRAK</td>
              <td>IDUSER</td>
              <td>LONG_RAK1</td>
              <td>LAT_RAK1</td>
              <td>LONG_RAK2</td>
              <td>LATRAK2</td>
            </tr>
          </thead>
          <tbody>
              <?php $no=1;
                foreach ($datakategori->result() as $rows) { ?>
                  <tr>
                    <td><?= $no++ ;?></td>
                    <td><?= $rows->IDRAK ?></td>
                    <td><?= $rows->IDUSER ?></td>
                    <td><?= $rows->LONG_RAK1 ?></td>
                    <td><?= $rows->LAT_RAK1 ?></td>
                    <td><?= $rows->LONG_RAK2 ?></td>
                    <td><?= $rows->LATRAK1 ?></td>
                    <td>
                      <a style="cursor: pointer;" onclick="select_data(
                      '<?= $rows->IDRAK ?>',
                      '<?= $rows->IDUSER ?>'
                      '<?= $rows->LONG_RAK1 ?>'
                      '<?= $rows->LAT_RAK1 ?>'
                      '<?= $rows->LONG_RAK2 ?>'
                      '<?= $rows->LATRAK1 ?>'
                      )" data-toggle="modal" data-target="#modal-update"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="<?php base_url()?>RakBuku/hapus/<?php echo $rows->IDBUKTI_DEPOSIT; ?>"><i class="glyphicon glyphicon-trash"></i></a>
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
       <form action="<?php echo site_url('RakBuku/simpan')?>" method="post" accept-charset="utf-8">
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
                      <label class="col-sm-2 control-label" for="">IDRAK </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDRAK" id="IDRAK" class="form-control" value="" placeholder="Masukkan IDRAK" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDUSER </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDUSER" id="IDUSER" class="form-control" value="" placeholder="Masukkan iduser" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">LONG_RAK1 </label>
                      <div class="col-sm-10">
                        <input type="text" name="LONG_RAK1" id="LONG_RAK1" class="form-control" value="" placeholder="Masukkan LONG_RAK1" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">LAT_RAK1 </label>
                      <div class="col-sm-10">
                        <input type="text" name="LAT_RAK1" id="LAT_RAK1" class="form-control" value="" placeholder="Masukkan LAT_RAK1" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">LONG_RAK2 </label>
                      <div class="col-sm-10">
                        <input type="text" name="LONG_RAK2" id="LONG_RAK2" class="form-control" value="" placeholder="Masukkan LONG_RAK2" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">LAT_RAK2 </label>
                      <div class="col-sm-10">
                        <input type="text" name="LATRAK1" id="LATRAK1" class="form-control" value="" placeholder="Masukkan LAT_RAK2" required>
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
       <form action="<?php echo site_url('RakBuku/ubah')?>" method="post" accept-charset="utf-8">
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
                      <input type="hidden" name="IDRAK" id="IDRAK2" class="form-control" value="" placeholder="Masukkan IDRAK" required>
                      <label class="col-sm-2 control-label" for="">IDUSER </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDUSER" id="IDUSER" class="form-control" value="" placeholder="Masukkan iduser" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">LONG_RAK1 </label>
                      <div class="col-sm-10">
                        <input type="text" name="LONG_RAK1" id="LONG_RAK12" class="form-control" value="" placeholder="Masukkan LONG_RAK1" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">LAT_RAK1 </label>
                      <div class="col-sm-10">
                        <input type="text" name="LAT_RAK1" id="LAT_RAK12" class="form-control" value="" placeholder="Masukkan LAT_RAK1" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">LONG_RAK2 </label>
                      <div class="col-sm-10">
                        <input type="text" name="LONG_RAK2" id="LONG_RAK22" class="form-control" value="" placeholder="Masukkan LONG_RAK2" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">LAT_RAK2 </label>
                      <div class="col-sm-10">
                        <input type="text" name="LATRAK1" id="LATRAK12" class="form-control" value="" placeholder="Masukkan LAT_RAK2" required>
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