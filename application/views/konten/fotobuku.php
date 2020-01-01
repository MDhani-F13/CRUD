<script>
    function select_data($IDFOTOBUKU,IDBUKU, $FOTOBUKU){
      $("#ID_FOTOBUKU2").val($IDFOTOBUKU);
      $("#idbuku2").val($IDBUKU);
      $("#FOTOBUKU2").val($FOTOBUKU);
    }
    function refresh(){
      $("#ID_FOTOBUKU2").val("");
      $("#idbuku2").val("");
      $("#FOTOBUKU2").val("");
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
              <td>ID FOTO BUKU</td>
              <td>ID BUKU</td>
              <td>FOTO BUKU</td> 
              <td>aksi</td>
            </tr>
          </thead>
          <tbody>
              <?php $no=1;
                foreach ($datakategori->result() as $rows) { ?>
                  <tr>
                    <td><?= $no++ ;?></td>
                    <td><?= $rows->IDFOTOBUKU ?></td>
                    <td><?= $rows->IDBUKU ?></td>
                    <td><?= $rows->FOTOBUKU ?></td>
                    
                    <td>
                      <a style="cursor: pointer;" onclick="select_data(
                      '<?= $rows->IDFOTOBUKU ?>',
                      '<?= $rows->IDBUKU ?>'
                      '<?= $rows->FOTOBUKU ?>'
                      )" data-toggle="modal" data-target="#modal-update"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="<?php base_url()?>FotoBuku/hapus/<?php echo $rows->IDFOTOBUKU; ?>"><i class="glyphicon glyphicon-trash"></i></a>
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
       <form action="<?php echo site_url('FotoBuku/simpan')?>" method="post" accept-charset="utf-8">
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
                      <label class="col-sm-2 control-label" for="">IDFOTOBUKU </label>
                      <div class="col-sm-10">
                        <input type="text" name="ID_FOTOBUKU" id="ID_FOTOBUKU" class="form-control" value="" placeholder="Masukkan idfotobuku" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDBUKU </label>
                      <div class="col-sm-10">
                        <input type="text" name="idbuku" id="idbuku" class="form-control" value="" placeholder="Masukkan idbuku" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">FOTOBUKU </label>
                      <div class="col-sm-10">
                        <input type="text" name="FOTOBUKU" id="FOTOBUKU" class="form-control" value="" placeholder="Masukkan fotobuku" required>
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
       <form action="<?php echo site_url('FotoBuku/ubah')?>" method="post" accept-charset="utf-8">
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
                      <input type="hidden" name="ID_FOTOBUKU2" id="ID_FOTOBUKU2" class="form-control" value="" placeholder="Masukkan idfotobuku" required>
                      <label class="col-sm-2 control-label" for="">IDBUKU </label>
                      <div class="col-sm-10">
                        <input type="text" name="idbuku2" id="idbuku2" class="form-control" value="" placeholder="Masukkan idbuku" required>
                      </div>
                      <label class="col-sm-2 control-label" for="">FOTO BUKU </label>
                      <div class="col-sm-10">
                        <input type="text" name="FOTOBUKU2" id="FOTOBUKU2" class="form-control" value="" placeholder="Masukkan fotobuku" required>
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