<?php

$this->load->view('Head');

?>

<body class="bg-dark">


    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Edit Data</div>
      <div class="card-body">
        <?php
  foreach ($edit->result() as $e) {

?>
        <form action="<?php echo base_url(); ?>Izin/save/" method="POST">
          <div class="form-group">
            <div class="form-row">
            <div class="col-md-12">
                <label for="exampleInputName">Nama Pegawai</label>
                <!-- <input class="form-control"name="id_pegawai" id="id_pegawai" type="text" value="<?php echo $e->id_pegawai;?>"  readonly>
                <small class="form-text text-muted">Ubah ID Pegawai ? </small> -->
                <select name="id_pegawai" id="id_pegawai" class="form-control" >
                  <option value="-" disabled selected="">-- CHOOSE --</option>

                             <?php
                                foreach ($tb_pegawai as $p) {
                                  echo "<option value='$p[id_pegawai]' " .(($e->id_pegawai == $p['id_pegawai']) ? "selected" : "")." >$p[nama]</option>";
                                }
                             ?>
                           </select>
                <input type="hidden" id="id_izin" name="id_izin" class="form-control" value="<?php echo $e->id_izin;?>">
              </div>
              <div class="col-md-12">
                <label for="exampleInputName">Nama Cuti</label>
                <!-- <input class="form-control"name="id_cuti" id="id_cuti" type="text" value="<?php echo $e->id_cuti;?>"  readonly>
                <small class="form-text text-muted">Ubah ID Cuti ? </small> -->
                <select name="id_cuti" id="id_cuti" class="form-control" >
                  <option value=""  disabled selected >-- CHOOSE --</option>

                             <?php
                                foreach ($tb_cuti as $c) {
                                  echo "<option value='$c[id_cuti]' ".(($e->id_cuti == $c['id_cuti']) ? "selected" : ""). ">$c[nama_kolah]</option>";
                                }
                             ?>
                           </select>
              </div>
              <div class="col-md-12">
                <label for="exampleInputName">Nama Seminar</label>
                <!-- <input class="form-control"name="id_seminar" id="id_seminar" type="text" value="<?php echo $e->id_seminar;?>"  readonly>
                <small class="form-text text-muted">Ubah ID Semianr ? </small> -->
                <select name="id_seminar" id="id_seminar" class="form-control" >
                  <option value="" disabled selected >-- CHOOSE --</option>


                             <?php
                                foreach ($tb_seminar as $s) {
                                  echo "<option value='$s[id_seminar]' ".(($e->id_seminar == $s['id_seminar']) ? "selected" : "")." >$s[nama_seminar]</option>";
                                }
                             ?>
                           </select>
              </div>
              <div class="col-md-12">
                <label for="exampleInputName">Nama Sekolah</label>
                <!-- <input class="form-control"name="id_sekolah" id="id_sekolah" type="text" value="<?php echo $e->id_sekolah;?>"  readonly>
                <small class="form-text text-muted">Ubah ID Sekolah ? </small> -->
                <select name="id_sekolah" id="id_sekolah" class="form-control" >
                  <option value="" disabled selected>-- CHOOSE --</option>

                             <?php
                                foreach ($tb_sekolah as $k) {
                                  echo "<option value='$k[id_sekolah]. ".(($e->id_sekolah == $k['id_sekolah']) ? "selected" : "")." '>$k[nama_sekolah]</option>";
                                }
                             ?>
                           </select>
              </div>
              <div class="col-md-12">
                <label for="exampleInputName">Tanggal Awal</label>
                <input class="form-control" name="tglawal" id="tglawal" type="text" value="<?php echo $e->tglawal;?>"  placeholder="Enter your tanggal awal">
              </div>
              <div class="col-md-12">
                <label for="exampleInputName">Tempat</label>
                <input class="form-control" name="tempat" id="tempat" type="text" value="<?php echo $e->tempat;?>"  placeholder="Enter your tempat">
              </div>
              <div class="col-md-12">
                <label for="exampleInputName">Tanggal Akhir</label>
                <input class="form-control" name="tglakhir" id="tglakhir" type="text" value="<?php echo $e->tglakhir;?>" placeholder="Enter your tanggal akhir">
              </div>
              <div class="col-md-12">
                <label for="exampleInputName">Status</label>
                <select name="status" class="form-control">
                  <option disabled selected>Select</option>
                  <option  type="text" <?php echo (($e->status == 'Seminar') ? "selected" : ""); ?>>Seminar</option>
                  <option  type="text" <?php echo (($e->status == 'Sekolah') ? "selected" : ""); ?> >Sekolah</option>
                  <option  type="text" <?php echo (($e->status == 'Cuti') ? "selected" : ""); ?>>Cuti</option>
                  </select>
              </div>
              <div class="col-md-12">
                <label for="exampleInputName">Konfirmasi</label>
                <select name="konfirmasi" class="form-control">
                  <option disabled selected>Select</option>
                  <option  type="text" <?php echo (($e->konfirmasi == 'Yes') ? "selected" : ""); ?>>Yes</option>
                  <option  type="text" <?php echo (($e->konfirmasi == 'No') ? "selected" : ""); ?>>No</option>
                  </select>
              </div>

            </div>
          </div>


          <div class="form-row">
              <div class="col-md-12">
          <button type="submit" class="btn btn-primary btn-block">Tambah</button>
          <a href ="<?php echo base_url(); ?>Izin" class="btn btn-primary btn-block">Cancel </a>
        </div>
          </div>
        </form>


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
<?php
}
 ?>
