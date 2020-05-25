<?php

$this->load->view('Head');

?>

<body class="bg-dark">


    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Tambah Data</div>
      <div class="card-body">
        <form action="<?php echo base_url(); ?>Add_pegawai/add/" method="POST">

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Nama Pegawai</label>
                <input class="form-control"name="nama" id="nama" type="text"  placeholder="Enter your Pegawai Name">
                </div>

                <div class="col-md-6">
                <label for="exampleInputName">Nama Jabatan</label>
                 <select name="id_jabatan" id="id_jabatan" class="form-control">
                             <option value="" disabled selected>-- CHOOSE --</option>
                             <?php
                                foreach ($tb_jabatan as $j) {
                                  echo "<option value='$j[id_jabatan]'>$j[nama_jabatan]</option>";
                                }
                             ?>
                           </select>
                         </div>


                <div class="col-md-6">
                <label for="exampleInputName">NIP</label>
                <input class="form-control"name="nip" id="nip" type="text"  placeholder="Enter your Pegawai NIP">
            </div>

            <div class="col-md-6">
                <label for="exampleInputName">Nama Bidang</label>
                 <select name="id_bidang" id="id_bidang" class="form-control">
                             <option value="" disabled selected>-- CHOOSE --</option>
                             <?php
                                foreach ($tb_bidang as $b) {
                                  echo "<option value='$b[id_bidang]'>$b[nama_bidang]</option>";
                                }
                             ?>
                           </select>
              </div>

            <div class="col-md-6">
                <label for="exampleInputName">Tempat Lahir</label>
                <input class="form-control"name="tempat_lahir" id="tempat_lahir" type="text"  placeholder="Enter your Tempat Lahir">
              </div>
              <div class="col-md-6">
                  <label for="exampleInputName">Username</label>
                   <select name="id_login" id="id_login" class="form-control">
                               <option value="" disabled selected>-- CHOOSE --</option>
                               <?php
                                  foreach ($login as $l) {
                                    echo "<option value='$l[id_login]'>$l[username]</option>";
                                  }
                               ?>
                             </select>
                </div>
              <div class="col-md-6">
                <label for="exampleInputName">Tanggal Lahir</label>
                <input class="form-control"name="tanggal_lahir" id="tanggal_lahir" type="text"  placeholder="Ex: 2000/01/01">
              </div>
              <div class="col-md-6">
                <label for="exampleInputName">Jenis Kelamin</label><br>
                <select name="jenis_kelamin" class="form-control">
                  <option disabled selected>Select</option>
                  <option id="jenis_kelamin" name="jenis_kelamin" type="text">L</option>
                  <option id="jenis_kelamin" name="jenis_kelamin" type="text">P</option>
                  </select>
                 </div>

            <div class="col-md-6">
                <label for="exampleInputName">Pendidikan Terakhir</label>
                <input class="form-control"name="pendidikan_terakhir" id="pendidikan_terakhir" type="text"  placeholder="Enter your Pendidikan Terakhir">
              </div>
              <div class="col-md-6">
                <label for="exampleInputName">Status Perkawinan</label>
                <input class="form-control"name="status_perkawinan" id="status_perkawinan" type="text"  placeholder="Enter your Status Perkawinan">
            </div>
              <div class="col-md-6">
                <label for="exampleInputName">Status Pegawai</label>
                <input class="form-control"name="status_pegawai" id="status_pegawai" type="text"  placeholder="Enter your Status Pegawai">
              </div>


                 <div class="col-md-6">
                <label for="exampleInputName">Agama</label>
                <input class="form-control"name="agama" id="agama" type="text"  placeholder="Enter your Agama">
            </div>
            <div class="col-md-6">
                <label for="exampleInputName">Alamat</label>
                <input class="form-control"name="alamat" id="alamat" type="text"  placeholder="Enter your Alamat">
            </div>
            <div class="col-md-6">
                <label for="exampleInputName">No KTP</label>
                <input class="form-control"name="no_ktp" id="no_ktp" type="text"  placeholder="Enter your No KTP">
            </div>
            <div class="col-md-6">
                <label for="exampleInputName">No Rumah</label>
                <input class="form-control"name="no_rumah" id="no_rumah" type="text"  placeholder="Enter your No Rumah">
            </div>
            <div class="col-md-6">
                <label for="exampleInputName">No HP</label>
                <input class="form-control"name="no_handphone" id="no_handphone" type="text"  placeholder="Enter your No HP">
            </div>
            <div class="col-md-6">
                <label for="exampleInputName">E-mail</label>
                <input class="form-control"name="email" id="email" type="email"  placeholder="Enter your E-mail">
            </div>
            <div class="col-md-6">
                <label for="exampleInputName">Tanggal Pengangkatan</label>
                <input class="form-control"name="tanggal_pengangkatan" id="tanggal_pengangkatan" type="text"  placeholder="Ex: 2000/01/01">
            </div>

            </div>
          </div>

          <div class="form-row">
              <div class="col-md-12">
          <button type="submit" class="btn btn-primary btn-block">Tambah</button>
          <a href ="<?php echo base_url(); ?>Pegawai" class="btn btn-primary btn-block">Cancel </a>
        </div>
          </div>
        </form>


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
