<script>
    function select_data($IDWISHLIST,IDBUKU, $IDUSER){
      $("#IDWISHLIST2").val($IDWISHLIST);
      $("#IDBUKU2").val($IDBUKU);
      $("#IDUSER2").val($IDUSER);
    }
    function refresh(){
      $("#IDWISHLIST2").val("");
      $("#IDBUKU2").val("");
      $("#IDUSER2").val("");
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
              <td>IDWISHLIST</td>
              <td>IDBUKU</td>
              <td>IDUSER</td> 
              <td>aksi</td>
            </tr>
          </thead>
          <tbody>
              <?php $no=1;
                foreach ($datakategori->result() as $rows) { ?>
                  <tr>
                    <td><?= $no++ ;?></td>
                    <td><?= $rows->IDWISHLIST ?></td>
                    <td><?= $rows->IDBUKU ?></td>
                    <td><?= $rows->IDUSER ?></td>
                    
                    <td>
                      <a style="cursor: pointer;" onclick="select_data(
                      '<?= $rows->IDWISHLIST ?>',
                      '<?= $rows->IDBUKU ?>'
                      '<?= $rows->IDUSER ?>'
                      )" data-toggle="modal" data-target="#modal-update"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="<?php base_url()?>Wishlist/hapus/<?php echo $rows->IDWISHLIST; ?>"><i class="glyphicon glyphicon-trash"></i></a>
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
       <form action="<?php echo site_url('Wishlist/simpan')?>" method="post" accept-charset="utf-8">
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
                      <label class="col-sm-2 control-label" for="">IDWISHLIST </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDWISHLIST" id="IDWISHLIST" class="form-control" value="" placeholder="Masukkan IDWISHLIST" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDBUKU </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDBUKU" id="IDBUKU" class="form-control" value="" placeholder="Masukkan IDBUKU" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDUSER </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDUSER" id="IDUSER" class="form-control" value="" placeholder="Masukkan IDUSER" required>
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
       <form action="<?php echo site_url('Wishlist/ubah')?>" method="post" accept-charset="utf-8">
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
                      <input type="hidden" name="IDWISHLIST" id="IDWISHLIST2" class="form-control" value="" placeholder="Masukkan IDWISHLIST" required>
                      <label class="col-sm-2 control-label" for="">IDBUKU </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDBUKU" id="IDBUKU2" class="form-control" value="" placeholder="Masukkan IDBUKU" required>
                      </div>
                      <label class="col-sm-2 control-label" for="">FOTO BUKU </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDUSER" id="IDUSER2" class="form-control" value="" placeholder="Masukkan IDUSER" required>
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