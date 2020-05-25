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
        <li class="breadcrumb-item active">Tables Pegawai</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Pegawai</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            	<?php if (($this->session->userdata('level')=="admin") ||
                        ($this->session->userdata('level')=="manajer")) { ?>
								<div class="mt-0">
                    <a href="<?php echo base_url(); ?>Add_pegawai/" class="btn btn-success mb-3" style="border-radius:5px;">Tambah <i class="fa fa-user-plus" aria-hidden="true"></i></a>
										<a href="<?php echo base_url(); ?>Laporanpdf_pegawai" class="btn btn-primary mb-3" style="border-radius:5px;">Print <i class="fa fa-print" aria-hidden="true"></i></a>
									</div>
										<?php } ?>
              <thead>

                      <tr>
                        <th>No</th>

                        <th>Nama Pegawai</th>
                        <th>NIP</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Pendidiakan Terakhir</th>
                        <th>Status Perkawinan</th>
                        <th>Status Pegawai</th>
                         <th>Nama Jabatan</th>
                        <th>Nama Bidang</th>
                        <th>Username</th>
                        <th>Agama</th>
                        <th>Alamat</th>

                        <th>No KTP</th>
                        <th>No Rumah</th>
                        <th>No HP</th>
                        <th>E-mail</th>
                        <th>Tanggal Pengangkatan</th>

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
                      <td><?php echo $no++ ;?></td>

                        <td align="center"><?php echo $hasil->nama ;?></td>
                        <td align="center"><?php echo $hasil->nip ;?></td>
                        <td align="center"><?php echo $hasil->tempat_lahir ;?></td>
                        <td align="center"><?php echo $hasil->tanggal_lahir ;?></td>
                        <td align="center"><?php echo $hasil->jenis_kelamin ;?></td>
                        <td align="center"><?php echo $hasil->pendidikan_terakhir ;?></td>
                        <td align="center"><?php echo $hasil->status_perkawinan ;?></td>
                        <td align="center"><?php echo $hasil->status_pegawai ;?></td>
                        <td align="center"><?php echo $hasil->nama_jabatan ;?></td>
                        <td align="center"><?php echo $hasil->nama_bidang ;?></td>
                        <td align="center"><?php echo $hasil->username ;?></td>  
                        <td align="center"><?php echo $hasil->agama ;?></td>
                        <td align="center"><?php echo $hasil->alamat ;?></td>
                        <td align="center"><?php echo $hasil->no_ktp ;?></td>
                        <td align="center"><?php echo $hasil->no_rumah ;?></td>
                        <td align="center"><?php echo $hasil->no_handphone ;?></td>
                        <td align="center"><?php echo $hasil->email ;?></td>
                        <td align="center"><?php echo $hasil->tanggal_pengangkatan ;?></td>

                         <?php if ($this->session->userdata('edit')) { ?>
                        <td><a class="btn btn-primary" href="<?php echo base_url();?>Pegawai/edit/<?php echo $hasil->id_pegawai; ?>" style="border-radius:5px;">
                             <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                           <?php } ?>
                           <?php if ($this->session->userdata('delete')) { ?>
                             <a class="btn btn-primary" href="<?php echo base_url();?>Pegawai/hapus/<?php echo $hasil->id_pegawai; ?>" style="border-radius:5px;">
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
