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
        <form action="<?php echo base_url(); ?>Cuti/save/" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Nama Sekolah</label>
                <input class="form-control"name="nama_kolah" id="nama_kolah" type="text" value="<?php echo $e->nama_kolah;?>"  placeholder="Enter your Seminar Name">
                <input type="hidden" id="id_cuti" name="id_cuti" class="form-control" value="<?php echo $e->id_cuti;?>">
              </div>

            </div>
          </div>

          <div class="form-row">
              <div class="col-md-12">
          <button type="submit" class="btn btn-primary btn-block">Tambah</button>
          <a href ="<?php echo base_url(); ?>Cuti" class="btn btn-primary btn-block">Cancel </a>
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
