<script>
    function select_data($IDITEM_KERANJANG, $IDKERANJANG, $IDBUKU, $JUMLAHBUKU, $HARGA_PERHARI){
      $("#IDITEM_KERANJANG2").val($IDITEM_KERANJANG);
      $("#IDKERANJANG2").val($IDKERANJANG);
      $("#IDBUKU2").val($IDBUKU);
      $("#JUMLAHBUKU2").val($JUMLAHBUKU);
      $("#HARGA_PERHARI2").val($HARGA_PERHARI);
    }
    function refresh(){
      $("#IDITEM_KERANJANG2").val("");
      $("#IDKERANJANG2").val("");
      $("#IDBUKU2").val("");
      $("#JUMLAHBUKU2").val("");
      $("#HARGA_PERHARI2").val("");
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
              <td>IDITEM_KERANJANG</td>
              <td>IDKERANJANG</td>
              <td>IDBUKU</td>
              <td>JUMLAHBUKU</td>
              <td>HARGA_PERHARI</td>
              <td>aksi</td>
            </tr>
          </thead>
          <tbody>
              <?php $no=1;
                foreach ($datakategori->result() as $rows) { ?>
                  <tr>
                    <td><?= $no++ ;?></td>
                    <td><?= $rows->IDITEM_KERANJANG ?></td>
                    <td><?= $rows->IDKERANJANG ?></td>
                    <td><?= $rows->IDBUKU ?></td>
                    <td><?= $rows->JUMLAHBUKU ?></td>
                    <td><?= $rows->HARGA_PERHARI ?></td>
                    <td>
                      <a style="cursor: pointer;" onclick="select_data(
                      '<?= $rows->IDITEM_KERANJANG ?>',
                      '<?= $rows->IDKERANJANG ?>'
                      '<?= $rows->IDBUKU ?>'
                      '<?= $rows->JUMLAHBUKU ?>'
                      '<?= $rows->HARGA_PERHARI ?>'
                      )" data-toggle="modal" data-target="#modal-update"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="<?php base_url()?>ItemKeranjang/hapus/<?php echo $rows->IDKERANJANG; ?>"><i class="glyphicon glyphicon-trash"></i></a>
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
       <form action="<?php echo site_url('ItemKeranjang/simpan')?>" method="post" accept-charset="utf-8">
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
                      <label class="col-sm-2 control-label" for="">IDITEM_KERANJANG </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDITEM_KERANJANG" id="IDITEM_KERANJANG" class="form-control" value="" placeholder="Masukkan IDITEM_KERANJANG" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDKERANJANG </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDKERANJANG" id="IDKERANJANG" class="form-control" value="" placeholder="Masukkan IDKERANJANG" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDBUKU </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDBUKU" id="IDBUKU" class="form-control" value="" placeholder="Masukkan IDBUKU" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">JUMLAHBUKU </label>
                      <div class="col-sm-10">
                        <input type="text" name="JUMLAHBUKU" id="JUMLAHBUKU" class="form-control" value="" placeholder="Masukkan JUMLAHBUKU" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">HARGA_PERHARI </label>
                      <div class="col-sm-10">
                        <input type="text" name="HARGA_PERHARI" id="HARGA_PERHARI" class="form-control" value="" placeholder="Masukkan HARGA_PERHARI" required>
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
       <form action="<?php echo site_url('ItemKeranjang/ubah')?>" method="post" accept-charset="utf-8">
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
                      <input type="hidden" name="IDITEM_KERANJANG2" id="IDITEM_KERANJANG2" class="form-control" value="" placeholder="Masukkan IDITEM_KERANJANG" required>
                      <label class="col-sm-2 control-label" for="">IDKERANJANG </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDKERANJANG" id="IDKERANJANG" class="form-control" value="" placeholder="Masukkan IDKERANJANG" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDBUKU </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDBUKU" id="IDBUKU" class="form-control" value="" placeholder="Masukkan IDBUKU" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">JUMLAHBUKU </label>
                      <div class="col-sm-10">
                        <input type="text" name="JUMLAHBUKU" id="JUMLAHBUKU" class="form-control" value="" placeholder="Masukkan JUMLAHBUKU" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">HARGA_PERHARI </label>
                      <div class="col-sm-10">
                        <input type="text" name="HARGA_PERHARI" id="HARGA_PERHARI" class="form-control" value="" placeholder="Masukkan HARGA_PERHARI" required>
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