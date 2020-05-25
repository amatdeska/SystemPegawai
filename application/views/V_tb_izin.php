<?php

$this->load->view('Head');

?>

<body>

	<?php
	$this->load->view('Menu');

	?>

	<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Izin</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <div class=="mt-0">

                    <a href="<?php echo base_url(); ?>Add_izin/ "class="btn btn-success mb-3" style="border-radius:5px;">Tambah <i class="fa fa-user-plus" aria-hidden="true"></i></a>
                    
                    <?php if (($this->session->userdata('level')=="admin") ||
                        ($this->session->userdata('level')=="manajer")) { ?>
                    <a href="<?php echo base_url(); ?>Laporanpdf_izin" class="btn btn-primary mb-3" style="border-radius:5px;">Print <i class="fa fa-print" aria-hidden="true"></i></a>
                    <?php } ?>
                  </div>
              <thead>

                      <tr>
                        <th>No</th>
                        <th>Nama Pegawai</th>
                        <th>Nama Cuti</th>
                        <th>Nama Seminar</th>
                        <th>Nama Sekolah</th>
                        <th>Tanggal Awal</th>
                        <th>Tempat</th>
                        <th>Tanggal Akhir</th>
                        <th>Status</th>
												<th>Konfirmasi</th>

                        <?php if (($this->session->userdata('level')=="admin") ||
                        ($this->session->userdata('level')=="manajer")) { ?>
                        <th>Action</th>
                        <?php } ?>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no=1;
                            //print_r($b->result());die;
                            foreach ($b->result() as $hasil ) {
                        ?>
                      <tr>
                      <td align="center"><?php echo $no++ ;?></td>
                        <td align="center"><?php echo $hasil->nama ;?></td>
                        <td align="center"><?php echo $hasil->nama_kolah ;?></td>
                        <td align="center"><?php echo $hasil->nama_seminar ;?></td>
                        <td align="center"><?php echo $hasil->nama_sekolah ;?></td>
                        <td align="center"><?php echo $hasil->tglawal ;?></td>
                        <td align="center"><?php echo $hasil->tempat ;?></td>
                        <td align="center"><?php echo $hasil->tglakhir ;?></td>
                        <td align="center"><?php echo $hasil->status ;?></td>
												<td align="center"><?php echo $hasil->konfirmasi ;?></td>


                         <?php if ($this->session->userdata('edit')) { ?>
                        <td>

                          <a class="btn btn-primary" href="<?php echo base_url();?>Izin/edit/<?php echo $hasil->id_izin; ?>" style="border-radius:5px;">
                             <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                           <?php } ?>
                           <?php if ($this->session->userdata('delete')) { ?>
                             <a class="btn btn-primary" href="<?php echo base_url();?>Izin/hapus/<?php echo $hasil->id_izin; ?>" style="border-radius:5px;">
                             <i class="fa fa-trash-o" aria-hidden="true"></i></a>

													 </td>
                            <?php } ?>
                      </tr>
                     <?php } ?>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->


    </div><!-- /#right-panel -->

         <!-- .content -->
    </div>
    <?php

    $this->load->view('Down');

    ?>
  </body>
