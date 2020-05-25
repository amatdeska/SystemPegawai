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
        <form action="<?php echo base_url(); ?>Pegawai/save/" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Nama Pegawai</label>
                <input class="form-control"name="nama" id="nama" type="text" value="<?php echo $e->nama;?>"  placeholder="Enter your Pegawai Name">
                  <input type="hidden" id="id_pegawai" name="id_pegawai" class="form-control" value="<?php echo $e->id_pegawai;?>">
                </div>

                <div class="col-md-6">
                <label for="exampleInputName">Jabatan</label>

                 <select name="id_jabatan" id="id_jabatan" class="form-control">
                   <option value="" disabled selected >-- CHOOSE --</option>
                             <?php
                                foreach ($tb_jabatan as $j) {
                                  echo "<option value='$j[id_jabatan]'".(($e->id_jabatan == $j['id_jabatan']) ? "selected" : "").">$j[nama_jabatan]</option>";
                                }
                             ?>
                           </select>
                         </div>


                <div class="col-md-6">
                <label for="exampleInputName">NIP</label>
                <input class="form-control"name="nip" id="nip" type="text" value="<?php echo $e->nip;?>"  placeholder="Enter your Pegawai NIP">
            </div>

            <div class="col-md-6">
                <label for="exampleInputName">ID Bidang</label>

                 <select name="id_bidang" id="id_bidang" class="form-control"  >
                  <option value="" disabled selected >-- CHOOSE --</option>
                             <?php
                                foreach ($tb_bidang as $b) {
                                  echo "<option value='$b[id_bidang]'".(($e->id_bidang == $b['id_bidang']) ? "selected" : "").">$b[nama_bidang]</option>";
                                }
                             ?>
                           </select>
              </div>

            <div class="col-md-6">
                <label for="exampleInputName">Tempat Lahir</label>
                <input class="form-control"name="tempat_lahir" id="tempat_lahir" type="text" value="<?php echo $e->tempat_lahir;?>" placeholder="Enter your Tempat Lahir">
              </div>
               <div class="col-md-6">
                  <label for="exampleInputName">Username</label>
              <select name="id_login" id="id_login" class="form-control">
                               <option value="" disabled selected>-- CHOOSE --</option>
                               <?php
                                  foreach ($login as $l) {
                                    echo "<option value='$l[id_login]'".(($e->id_login == $l['id_login']) ? "selected" : "").">$l[username]</option>";
                                  }
                               ?>
                             </select>
                </div>
              <div class="col-md-6">
                <label for="exampleInputName">Tanggal Lahir</label>
                <input class="form-control"name="tanggal_lahir" id="tanggal_lahir" type="text" value="<?php echo $e->tanggal_lahir;?>"  placeholder="Ex: 2000/01/01">
              </div>
              <div class="col-md-6">
                <label for="exampleInputName">Jenis Kelamin</label><br>
                <select name="jenis_kelamin" value="<?php echo $e->jenis_kelamin;?>" class="form-control">
                  <option disabled>Select</option>
                  <option id="jenis_kelamin" name="jenis_kelamin" type="text" <?php echo (($e->jenis_kelamin == 'L') ? "selected" : ""); ?>>L</option>
                  <option id="jenis_kelamin" name="jenis_kelamin" type="text" <?php echo (($e->jenis_kelamin == 'P') ? "selected" : ""); ?>>P</option>
                  </select>
                 </div>
                <div class="col-md-6">
                <label for="exampleInputName">Pendidikan Terakhir</label>
                <input class="form-control"name="pendidikan_terakhir" id="pendidikan_terakhir" type="text" value="<?php echo $e->pendidikan_terakhir;?>"  placeholder="Enter your Pendidikan Terakhir">
              </div>

            </div>
          </div>
          <div class="form-group">
              <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Status Perkawinan</label>
                <input class="form-control"name="status_perkawinan" id="status_perkawinan" type="text" value="<?php echo $e->status_perkawinan;?>"  placeholder="Enter your Status Perkawinan">
            </div>

              <div class="col-md-6">
                <label for="exampleInputName">Status Pegawai</label>
                <input class="form-control"name="status_pegawai" id="status_pegawai" type="text" value="<?php echo $e->status_pegawai;?>"  placeholder="Enter your Status Pegawai">
              </div>
              <div class="col-md-6">
                <label for="exampleInputName">Alamat</label>
                <input class="form-control"name="alamat" id="alamat" type="text" value="<?php echo $e->alamat;?>"  placeholder="Enter your Agama">
            </div>

                 <div class="col-md-6">
                <label for="exampleInputName">Agama</label>
                <input class="form-control"name="agama" id="agama" type="text" value="<?php echo $e->agama;?>"  placeholder="Enter your Agama">
            </div>
            <div class="col-md-6">
                <label for="exampleInputName">No KTP</label>
                <input class="form-control"name="no_ktp" id="no_ktp" type="text" value="<?php echo $e->no_ktp;?>"  placeholder="Enter your No KTP">
            </div>
            <div class="col-md-6">
                <label for="exampleInputName">No Rumah</label>
                <input class="form-control"name="no_rumah" id="no_rumah" type="text" value="<?php echo $e->no_rumah;?>"  placeholder="Enter your No Rumah">
            </div>
            <div class="col-md-6">
                <label for="exampleInputName">No HP</label>
                <input class="form-control"name="no_handphone" id="no_handphone" type="text" value="<?php echo $e->no_handphone;?>" placeholder="Enter your No HP">
            </div>
            <div class="col-md-6">
                <label for="exampleInputName">E-mail</label>
                <input class="form-control"name="email" id="email" type="email" value="<?php echo $e->email;?>"  placeholder="Enter your E-mail">
            </div>
            <div class="col-md-6">
                <label for="exampleInputName">Tanggal Pengangkatan</label>
                <input class="form-control"name="tanggal_pengangkatan" id="tanggal_pengangkatan" type="text" value="<?php echo $e->tanggal_pengangkatan;?>"  placeholder="Ex: 2000/01/01">
            </div>
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
<?php
}
 ?>
