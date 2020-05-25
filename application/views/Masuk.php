
<?php

$this->load->view('Head');

?>

<body class="bg-dark">
  
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
       <form action="Login/aksi_login" Method="POST">
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" id="username" name="username" type="text"  placeholder="Enter username" >
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="Password" >
            <?php echo $this->session->flashdata('msg');?>
          </div>
          
          <button  type="submit" class="btn btn-primary btn-block" >Login</button>
        </form>

      </div>
    </div>
  </div>

    <?php

    $this->load->view('Down');

    ?>
  </body>
