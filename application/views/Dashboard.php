
<?php

$this->load->view('Head');

?>

<?php

$this->load->view('Menu');

?>
<body >
 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url(); ?>Home">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Home</li>
      </ol>
      <br>
      <div class="card mb-3">
      <div class="card-header">
        <marquee behavior="alternate" direction="left" scrollamount="15">
      <i class="fa fa-briefcase"></i> Selamat Datang <?php echo $this->session->userdata('nama'); ?>
    </marquee></div>
  </div><br>

      <div class="card mb-3">
      <div class="card-header">
      <i class="fa fa-newspaper-o"></i> Hot's News</div>
      <p class="d-flex p-2" align="text-justif">&nbsp; Sumber daya manusia merupakan bagian terpenting dalam pelaksanaan fungsi dan tugas suatu instansi,
        perusahaan ataupun perguruan tinggi. Fungsi esensial manajemen
        sumber daya manusia adalah memastikan agar organisasi dapat
        mencapai tujuan-tujuan strategisnya dengan memiliki sumber daya manusia yang
        dapat diandalkan untuk memenuhi kebutuhan instansi secara kuantitas maupun kualitas.
        Pengelolaan aspek manajemen sumber daya manusia dalam sebuah instansi atau prusahaan dapat dikelola dan dilaksanakan dengan optimal,
         pengelolaan yang dilakukan secara konvensional sudah tidak efektif dan efisien pada saat ini.
         Untuk memenuhi kebutuhan tersebut, maka harus dikembangkanya suatu Sistem informasi manajemen kepegawaian yang hadal.  </p>
      </div>

      <div class="card mb-3">
      <div class="card-header">
      <i class="fa fa-info-circle"></i> Information</div>
      <p class="d-flex p-2" align="text-justif"> &nbsp; Sistem Informasi Manajemen Kepegawaian merupakan suatu sistem informasi manajemen yang berfungsi untuk mengelola data,
         manajemen  dan administrasi kepegawaian sebuah instansi, perguruan tinggi ataupun perusahaaan. SIM Kepegawaian menjadi solusi tepat bagi sebuah instansi,
        perusahaaan ataupun perguruan tinggi dalam mengatasi masalah manajemen kepegawaian.  </p>
      </div>

      <div class="card mb-3">
      <div class="card-header">
      <i class="fa fa-ban"></i> Purpose</div>
      <p class="d-flex p-2" align="text-justif"> &nbsp; Tujuan Implementasi SIM Kepegawaian adalah dapat terwujudnya suatu sistem informasi
        manajemen yang berintegrasi dalam suatu jaringan komputer yang mampu menghasilkan informasi yang bermutu untuk
        menunjang pengambilan keputusan manajemen kepegawaian di lingkungan instansi. Kegiatan ini juga mendukung proses bisnis serta kelangsungan sebuah instansi,
         perusahaan, ataupun perguruan tinggi. Oleh karena itu, komitmen sebuah instansi untuk menjalankan Sistem Informasi Manajemen haruslah sangat tinggi agar
         proses yang terjadi dilantai produksi menjadi menguntungkan bagi pengguna. </p>
      </div>

          </div>
        </div>

        <?php

        $this->load->view('Down');

        ?>
</body>
