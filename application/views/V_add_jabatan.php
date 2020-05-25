<?php

$this->load->view('Head');

?>

<body class="bg-dark">


    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Tambah Data</div>
      <div class="card-body">
        <form action="<?php echo base_url(); ?>Add_jabatan/add/" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Nama Jabatan</label>
                <input class="form-control"name="nama_jabatan" id="nama_jabatan" type="text"  placeholder="Enter your Jabatan Name">
              </div>

            </div>
          </div>

          <div class="form-row">
              <div class="col-md-12">
          <button type="submit" class="btn btn-primary btn-block">Tambah</button>
          <a href ="<?php echo base_url(); ?>Jabatan" class="btn btn-primary btn-block">Cancel </a>
        </div>
          </div>
        </form>


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
