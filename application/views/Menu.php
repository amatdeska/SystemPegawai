<?php

$this->load->view('Head');

?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">

    <a class="navbar-brand" href="<?php echo base_url(); ?>Home">Kepegawaian</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="<?php echo base_url(); ?>Home">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>


           <li class="nav-item" data-toggle="tooltip" data-placement="right">
             
         <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-gear fa-spin"></i>

            <span class="nav-link-text">Master</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
            <?php if (($this->session->userdata('level')=="admin") ||
                        ($this->session->userdata('level')=="manajer")) { ?>
          <a class="nav-link" href="<?php echo base_url();?>Seminar">
            <i class="fa fa-fw fas fa-table"></i>
            <span class="nav-link-text">Table Seminar</span>
          </a>
          
          <a class="nav-link" href="<?php echo base_url();?>Bidang">
            <i class="fa fa-fw fas fa-table"></i>
            <span class="nav-link-text">Table Bidang</span>
          </a>
          <a class="nav-link" href="<?php echo base_url();?>Sekolah">
            <i class="fa fa-fw fas fa-table"></i>
            <span class="nav-link-text">Table Sekolah</span>
          </a>
          <a class="nav-link" href="<?php echo base_url();?>Jabatan">
            <i class="fa fa-fw fas fa-table"></i>
            <span class="nav-link-text">Table Jabatan</span>
          </a>
          <a class="nav-link" href="<?php echo base_url();?>Cuti">
            <i class="fa fa-fw fas fa-table"></i>
            <span class="nav-link-text">Table Cuti</span>
          </a>
           <?php } ?>
           <a class="nav-link" href="<?php echo base_url();?>Pegawai">
            <i class="fa fa-fw fas fa-table"></i>
            <span class="nav-link-text">Table Pegawai</span>
          </a>
            </li>

          </ul>
         
         
          </li>


           <li class="nav-item" data-toggle="tooltip" data-placement="right">
         <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Transaksi" data-parent="#exampleAccordion">
            <i class="fa fa-fw fas fa-barcode"></i>
            <span class="nav-link-text">Transaksi</span>
          </a>
      <ul class="sidenav-second-level collapse" id="Transaksi">
      <li>
      <a class="nav-link" href="<?php echo base_url();?>Izin">
            <i class="fa fa-fw fas fa-table"></i>
            <span class="nav-link-text">Izin</span>
          </a>
          </li>
          </ul>
          
      </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
            <?php if ($this->session->userdata('level')=="admin")
                     { ?>
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Other Pages</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
            <a class="nav-link" href="<?php echo base_url();?>User">
            <i class="fa fa-fw far fa-user-secret"></i>
            <span class="nav-link-text">User</span>
          </a>

          </ul>
          
        </li>
        <?php } ?>
      </ul>
</li>
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-power-off"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url(); ?>Login">Logout</a>
          </div>
        </div>
      </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <!-- Toggle between fixed and static navbar-->

    <script>
    $('#toggleNavPosition').click(function() {
      $('body').toggleClass('fixed-nav');
      $('nav').toggleClass('fixed-top static-top');
    });

    </script>
    <!-- Toggle between dark and light navbar-->
    <script>
    $('#toggleNavColor').click(function() {
      $('nav').toggleClass('navbar-dark navbar-light');
      $('nav').toggleClass('bg-dark bg-light');
      $('body').toggleClass('bg-dark bg-light');
    });

    </script>
  </ul>
  </div>

</body>
