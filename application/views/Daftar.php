<?php

$this->load->view('Head');

?>

<body class="bg-dark">

  
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form action="<?php echo base_url(); ?>add_daftar/add/" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Username</label>
                <input class="form-control"name="username" id="username" type="text"  placeholder="Enter first name">
              </div>
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
            <label for="nama">Nama Lengkap</label>
            <input class="form-control" name="nama_lengkap" id="nama_lengkap" type="text" placeholder="Enter Nama">
          </div>
          </div>
          </div>
          
            <div class="form-row">
              <div class="col-md-12">
          <label>Multi User</label>
          <select name="level" class="form-control">
            <option>Select</option>
            <option value="admin">Admin</option>
            <option value="manajer">Manajer</option>
            <option value="user">User</option>
            </select><br>
          </div>
              </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="password">Password</label>
                <input class="form-control" name="password" id="password" type="password" placeholder="Password">
              </div>
             
            </div>
          </div>
          <div class="form-row">
              <div class="col-md-12">
          <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
          </div>
        </form>

      
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>