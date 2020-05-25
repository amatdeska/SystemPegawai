<?php

$this->load->view('Head');

?>

<body class="bg-dark">


    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Tambah Data</div>
      <div class="card-body">
        <form action="<?php echo base_url(); ?>Add_izin/add/" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                  <input type="text" class="form-control" name="id_pegawai" id="id_pegawai" value="<?php echo $this->session->userdata('id_pegawai') ?>" hidden="true"></input>
              </div>
              <div class="col-md-12">
                <label for="exampleInputName">Nama Pegawai</label>
                <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" value="<?php echo $this->session->userdata('nama') ?>" readonly></input>
              </div>
              <div class="col-md-12">
                <label for="exampleInputName">Nama Cuti</label>
                <select name="id_cuti" id="id_cuti" class="form-control">
                             <option value="" disabled selected>-- CHOOSE --</option>
                             <?php
                                foreach ($tb_cuti as $c) {
                                  echo "<option value='$c[id_cuti]'>$c[nama_kolah]</option>";
                                }
                             ?>
                           </select>
              </div>
              <div class="col-md-12">
                <label for="exampleInputName">Nama Seminar</label>
                <select name="id_seminar" id="id_seminar" class="form-control">
                             <option value="" disabled selected>-- CHOOSE --</option>
                             <?php
                                foreach ($tb_seminar as $s) {
                                  echo "<option value='$s[id_seminar]'>$s[nama_seminar]</option>";
                                }
                             ?>
                           </select>
              </div>
              <div class="col-md-12">
                <label for="exampleInputName">Nama Sekolah</label>
                <select name="id_sekolah" id="id_sekolah" class="form-control">
                             <option value="" disabled selected>-- CHOOSE --</option>
                             <?php
                                foreach ($tb_sekolah as $k) {
                                  echo "<option value='$k[id_sekolah]'>$k[nama_sekolah]</option>";
                                }
                             ?>
                           </select>
              </div>
              <div class="col-md-12">
                <label for="exampleInputName">Tanggal Awal</label>
                <input class="form-control" name="tglawal" id="tglawal" type="text"  placeholder="Enter your tanggal awal">
              </div>
              <div class="col-md-12">
                <label for="exampleInputName">Tempat</label>
                <input class="form-control" name="tempat" id="tempat" type="text"  placeholder="Enter your tempat">
              </div>
              <div class="col-md-12">
                <label for="exampleInputName">Tanggal Akhir</label>
                <input class="form-control" name="tglakhir" id="tglakhir" type="text"  placeholder="Enter your tanggal akhir">
              </div>

              <div class="col-md-12">
                <label for="exampleInputName">Status</label>
                <select name="status" class="form-control">
                  <option disabled selected>Select</option>
                  <option  type="text">Seminar</option>
                  <option  type="text">Sekolah</option>
                  <option  type="text">Cuti</option>
                  </select>
              </div>
              <?php if (($this->session->userdata('level')=="admin")) { ?>
              <div class="col-md-12">
                <label for="exampleInputName">Konfirmasi</label>
                <select name="konfirmasi" class="form-control">
                  <option disabled selected>Select</option>
                  <option  type="text">Yes</option>
                  <option  type="text">No</option>
                  </select>
              </div>
              <?php } ?>
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
