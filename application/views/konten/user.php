<script>
    function select_data($IDUSER, $IDWISHLIST, $IDKERANJANG, $IDTETANGGA, $IDRAK, $USERNAME, $PASSWORD, $NAMA, $DESKRIPSI_PENGGUNA, $NOMOR_HP, $NOMOR_WA, $LINE, $LONG_POSISI, $LAT_POSISI, $DEPOSIT, $MENERIMA_KTP){
      $("#IDUSER2").val($IDUSER);
      $("#IDWISHLIST2").val($IDWISHLIST);
      $("#IDKERANJANG2").val($IDKERANJANG);
      $("#IDTETANGGA2").val($IDTETANGGA);
      $("#IDRAK2").val($IDRAK);
      $("#USERNAME2").val($USERNAME);
      $("#PASSWORD2").val($PASSWORD);
      $("#NAMA2").val($NAMA);
      $("#DESKRIPSI_PENGGUNA2").val($DESKRIPSI_PENGGUNA);
      $("#NOMOR_HP2").val($NOMOR_HP);
      $("#NOMOR_WA2").val($NOMOR_WA);
      $("#LINE2").val($LINE);
      $("#LONG_POSISI2").val($LONG_POSISI);
      $("#LAT_POSISI2").val($LAT_POSISI);
      $("#DEPOSIT2").val($DEPOSIT);
      $("#MENERIMA_KTP2").val($MENERIMA_KTP);
    }
    function refresh(){
      $("#IDUSER2").val("");
      $("#IDWISHLIST2").val("");
      $("#IDKERANJANG2").val("");
      $("#IDTETANGGA2").val("");
      $("#IDRAK2").val("");
      $("#USERNAME2").val("");
      $("#PASSWORD2").val("");
      $("#NAMA2").val("");
      $("#DESKRIPSI_PENGGUNA2").val("");
      $("#NOMOR_HP2").val("");
      $("#NOMOR_WA2").val("");
      $("#LINE2").val("");
      $("#LONG_POSISI2").val("");
      $("#LAT_POSISI2").val("");
      $("#DEPOSIT2").val("");
      $("#MENERIMA_KTP2").val("");
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
              <td>No</td>
              <td>IDUSER</td>
              <td>IDWISHLIST</td>
              <td>IDKERANJANG</td>
              <td>IDTETANGGA</td>
              <td>IDRAK</td>
              <td>USERNAME</td>
              <td>PASSWORD</td>
              <td>NAMA</td>
              <td>DESKRIPSI_PENGGUNA</td>
              <td>NOMOR_HP</td>
              <td>NOMOR_WA</td>
              <td>LINE</td>
              <td>FOTO_KTP</td>
              <td>LONG_POSISI</td>
              <td>LAT_POSISI</td>
              <td>DEPOSIT</td>
              <td>MENERIMA_KTP</td>
            </tr>
          </thead>
          <tbody>
              <?php $no=1;
                foreach ($datakategori->result() as $rows) { ?>
                  <tr>
                    <td><?= $no++ ;?></td>
                    <td><?= $rows->IDUSER ?></td>
                    <td><?= $rows->IDWISHLIST ?></td>
                    <td><?= $rows->IDKERANJANG ?></td>
                    <td><?= $rows->IDTETANGGA ?></td>
                    <td><?= $rows->IDRAK ?></td>
                    <td><?= $rows->USERNAME ?></td>
                    <td><?= $rows->PASSWORD ?></td>
                    <td><?= $rows->NAMA ?></td>
                    <td><?= $rows->DESKRIPSI_PENGGUNA ?></td>
                    <td><?= $rows->NOMOR_HP ?></td>
                    <td><?= $rows->NOMOR_WA ?></td>
                    <td><?= $rows->LINE ?></td>
                    <td><?= $rows->FOTO_KTP ?></td>
                    <td><?= $rows->LONG_POSISI ?></td>
                    <td><?= $rows->LAT_POSISI ?></td>
                    <td><?= $rows->DEPOSIT ?></td>
                    <td><?= $rows->MENERIMA_KTP ?></td>
                    <td>
                      <a style="cursor: pointer;" onclick="select_data(
                      '<?= $rows->IDUSER ?>',
                      '<?= $rows->IDWISHLIST ?>'
                      '<?= $rows->IDKERANJANG ?>'
                      '<?= $rows->IDTETANGGA ?>'
                      '<?= $rows->IDRAK ?>'
                      '<?= $rows->USERNAME ?>'
                      '<?= $rows->PASSWORD ?>'
                      '<?= $rows->NAMA ?>'
                      '<?= $rows->DESKRIPSI_PENGGUNA ?>'
                      '<?= $rows->NOMOR_HP ?>'
                      '<?= $rows->NOMOR_WA ?>'
                      '<?= $rows->LINE ?>'
                      '<?= $rows->FOTO_KTP ?>'
                      '<?= $rows->LONG_POSISI ?>'
                      '<?= $rows->LAT_POSISI ?>'
                      '<?= $rows->DEPOSIT ?>'
                      '<?= $rows->MENERIMA_KTP ?>'
                      )" data-toggle="modal" data-target="#modal-update"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="<?php base_url()?>User/hapus/<?php echo $rows->IDUSER; ?>"><i class="glyphicon glyphicon-trash"></i></a>
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
       <form action="<?php echo site_url('User/simpan')?>" method="post" accept-charset="utf-8">
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
                      <label class="col-sm-2 control-label" for="">IDUSER </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDUSER" id="IDUSER" class="form-control" value="" placeholder="Masukkan IDUSER" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDWISHLIST </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDWISHLIST" id="IDWISHLIST" class="form-control" value="" placeholder="Masukkan IDWISHLIST" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDKERANJANG </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDKERANJANG" id="IDKERANJANG" class="form-control" value="" placeholder="Masukkan IDKERANJANG" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDTETANGGA </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDTETANGGA" id="IDTETANGGA" class="form-control" value="" placeholder="Masukkan IDTETANGGA" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDRAK </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDRAK" id="IDRAK" class="form-control" value="" placeholder="Masukkan IDRAK" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">USERNAME </label>
                      <div class="col-sm-10">
                        <input type="text" name="USERNAME" id="USERNAME" class="form-control" value="" placeholder="Masukkan USERNAME" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">PASSWORD </label>
                      <div class="col-sm-10">
                        <input type="text" name="PASSWORD" id="PASSWORD" class="form-control" value="" placeholder="Masukkan PASSWORD" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">NAMA </label>
                      <div class="col-sm-10">
                        <input type="text" name="NAMA" id="NAMA" class="form-control" value="" placeholder="Masukkan NAMA" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">DESKRIPSI_PENGGUNA </label>
                      <div class="col-sm-10">
                        <input type="text" name="DESKRIPSI_PENGGUNA" id="DESKRIPSI_PENGGUNA" class="form-control" value="" placeholder="Masukkan DESKRIPSI_PENGGUNA" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">NOMOR_HP </label>
                      <div class="col-sm-10">
                        <input type="text" name="NOMOR_HP" id="NOMOR_HP" class="form-control" value="" placeholder="Masukkan NOMOR_HP" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">NOMOR_WA </label>
                      <div class="col-sm-10">
                        <input type="text" name="NOMOR_WA" id="NOMOR_WA" class="form-control" value="" placeholder="Masukkan NOMOR_WA" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">FOTO_KTP </label>
                      <div class="col-sm-10">
                        <input type="text" name="FOTO_KTP" id="FOTO_KTP" class="form-control" value="" placeholder="Masukkan FOTO_KTP" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">LONG_POSISI </label>
                      <div class="col-sm-10">
                        <input type="text" name="LONG_POSISI" id="LONG_POSISI" class="form-control" value="" placeholder="Masukkan LONG_POSISI" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">LAT_POSISI </label>
                      <div class="col-sm-10">
                        <input type="text" name="LAT_POSISI" id="LAT_POSISI" class="form-control" value="" placeholder="Masukkan LAT_POSISI" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">DEPOSIT </label>
                      <div class="col-sm-10">
                        <input type="text" name="DEPOSIT" id="DEPOSIT" class="form-control" value="" placeholder="Masukkan DEPOSIT" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">MENERIMA_KTP </label>
                      <div class="col-sm-10">
                        <input type="text" name="MENERIMA_KTP" id="MENERIMA_KTP" class="form-control" value="" placeholder="Masukkan MENERIMA_KTP" required>
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
       <form action="<?php echo site_url('User/ubah')?>" method="post" accept-charset="utf-8">
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
                  <input type="hidden" name="IDUSER2" id="IDUSER2" class="form-control" value="" placeholder="Masukkan idbuku" required>
                  <label class="col-sm-2 control-label" for="">IDWISHLIST </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDWISHLIST" id="IDWISHLIST2" class="form-control" value="" placeholder="Masukkan IDWISHLIST" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDKERANJANG </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDKERANJANG" id="IDKERANJANG2" class="form-control" value="" placeholder="Masukkan IDKERANJANG" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDTETANGGA </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDTETANGGA" id="IDTETANGGA2" class="form-control" value="" placeholder="Masukkan IDTETANGGA" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">IDRAK </label>
                      <div class="col-sm-10">
                        <input type="text" name="IDRAK" id="IDRAK2" class="form-control" value="" placeholder="Masukkan IDRAK" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">USERNAME </label>
                      <div class="col-sm-10">
                        <input type="text" name="USERNAME" id="USERNAME2" class="form-control" value="" placeholder="Masukkan USERNAME" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">PASSWORD </label>
                      <div class="col-sm-10">
                        <input type="text" name="PASSWORD" id="PASSWORD2" class="form-control" value="" placeholder="Masukkan PASSWORD" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">NAMA </label>
                      <div class="col-sm-10">
                        <input type="text" name="NAMA" id="NAMA2" class="form-control" value="" placeholder="Masukkan NAMA" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">DESKRIPSI_PENGGUNA </label>
                      <div class="col-sm-10">
                        <input type="text" name="DESKRIPSI_PENGGUNA" id="DESKRIPSI_PENGGUNA2" class="form-control" value="" placeholder="Masukkan DESKRIPSI_PENGGUNA" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">NOMOR_HP </label>
                      <div class="col-sm-10">
                        <input type="text" name="NOMOR_HP" id="NOMOR_HP2" class="form-control" value="" placeholder="Masukkan NOMOR_HP" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">NOMOR_WA </label>
                      <div class="col-sm-10">
                        <input type="text" name="NOMOR_WA" id="NOMOR_WA2" class="form-control" value="" placeholder="Masukkan NOMOR_WA" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">FOTO_KTP </label>
                      <div class="col-sm-10">
                        <input type="text" name="FOTO_KTP" id="FOTO_KTP2" class="form-control" value="" placeholder="Masukkan FOTO_KTP" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">LONG_POSISI </label>
                      <div class="col-sm-10">
                        <input type="text" name="LONG_POSISI" id="LONG_POSISI2" class="form-control" value="" placeholder="Masukkan LONG_POSISI" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">LAT_POSISI </label>
                      <div class="col-sm-10">
                        <input type="text" name="LAT_POSISI" id="LAT_POSISI2" class="form-control" value="" placeholder="Masukkan LAT_POSISI" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">DEPOSIT </label>
                      <div class="col-sm-10">
                        <input type="text" name="DEPOSIT" id="DEPOSIT2" class="form-control" value="" placeholder="Masukkan DEPOSIT" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="">MENERIMA_KTP </label>
                      <div class="col-sm-10">
                        <input type="text" name="MENERIMA_KTP" id="MENERIMA_KTP2" class="form-control" value="" placeholder="Masukkan MENERIMA_KTP" required>
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