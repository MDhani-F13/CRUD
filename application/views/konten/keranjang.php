<script>
    function select_data($IDKERANJANG, $IDUSER, $TGL_SEWABUKU, $TGL_KEMBALIBUKU, $HARGATOTAL){
      $("#IDKERANJANG2").val($IDKERANJANG);
      $("#IDUSER2").val($IDUSER);
      $("#TGL_SEWABUKU2").val($TGL_SEWABUKU);
      $("#TGL_KEMBALIBUKU2").val($TGL_KEMBALIBUKU);
      $("#HARGATOTAL2").val($HARGATOTAL);
    }
    function refresh(){
      $("#IDKERANJANG2").val("");
      $("#IDUSER2").val("");
      $("#TGL_SEWABUKU2").val("");
      $("#TGL_KEMBALIBUKU2").val("");
      $("#HARGATOTAL2").val("");
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
              <td>IDKERANJANG</td>
              <td>IDUSER</td>
              <td>TGL_SEWABUKU</td>
              <td>TGL_KEMBALIBUKU</td>
              <td>HARGATOTAL</td>
              <td>aksi</td>
            </tr>
          </thead>
          <tbody>
              <?php $no=1;
                foreach ($datakategori->result() as $rows) { ?>
                  <tr>
                    <td><?= $no++ ;?></td>
                    <td><?= $rows->IDKERANJANG ?></td>
                    <td><?= $rows->IDUSER ?></td>
                    <td><?= $rows->TGL_SEWABUKU ?></td>
                    <td><?= $rows->TGL_KEMBALIBUKU ?></td>
                    <td><?= $rows->HARGATOTAL ?></td>
                    <td>
                      <a style="cursor: pointer;" onclick="select_data(
                      '<?= $rows->IDKERANJANG ?>',
                      '<?= $rows->IDUSER ?>'
                      '<?= $rows->TGL_SEWABUKU ?>'
                      '<?= $rows->TGL_KEMBALIBUKU ?>'
                      '<?= $rows->HARGATOTAL ?>'
                      )" data-toggle="modal" data-target="#modal-update"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="<?php base_url()?>Keranjang/hapus/<?php echo $rows->IDKERANJANG; ?>"><i class="glyphicon glyphicon-trash"></i></a>
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
       <form action="<?php echo site_url('Keranjang/simpan')?>" method="post" accept-charset="utf-8">
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
                      <label class="col-sm-2 control-label" for="">IDKERANJANG </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDKERANJANG" id="IDKERANJANG" class="form-control" value="" placeholder="Masukkan IDKERANJANG" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDUSER </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDUSER" id="IDUSER" class="form-control" value="" placeholder="Masukkan iduser" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">TGL_SEWABUKU </label>
                      <div class="col-sm-10">
                        <input type="text" name="TGL_SEWABUKU" id="TGL_SEWABUKU" class="form-control" value="" placeholder="Masukkan TGL_SEWABUKU" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">TGL_KEMBALIBUKU </label>
                      <div class="col-sm-10">
                        <input type="text" name="TGL_KEMBALIBUKU" id="TGL_KEMBALIBUKU" class="form-control" value="" placeholder="Masukkan TGL_KEMBALIBUKU" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">HARGATOTAL </label>
                      <div class="col-sm-10">
                        <input type="text" name="HARGATOTAL" id="HARGATOTAL" class="form-control" value="" placeholder="Masukkan HARGATOTAL" required>
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
       <form action="<?php echo site_url('Keranjang/ubah')?>" method="post" accept-charset="utf-8">
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
                      <input type="hidden" name="IDKERANJANG2" id="IDKERANJANG2" class="form-control" value="" placeholder="Masukkan IDKERANJANG" required>
                      <label class="col-sm-2 control-label" for="">IDUSER </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDUSER" id="IDUSER2" class="form-control" value="" placeholder="Masukkan iduser" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">TGL_SEWABUKU </label>
                      <div class="col-sm-10">
                        <input type="text" name="TGL_SEWABUKU" id="TGL_SEWABUKU2" class="form-control" value="" placeholder="Masukkan TGL_SEWABUKU" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">TGL_KEMBALIBUKU </label>
                      <div class="col-sm-10">
                        <input type="text" name="TGL_KEMBALIBUKU" id="TGL_KEMBALIBUKU2" class="form-control" value="" placeholder="Masukkan TGL_KEMBALIBUKU" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">HARGATOTAL </label>
                      <div class="col-sm-10">
                        <input type="text" name="HARGATOTAL" id="HARGATOTAL2" class="form-control" value="" placeholder="Masukkan HARGATOTAL" required>
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