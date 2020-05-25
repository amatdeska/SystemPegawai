<?php

$this->load->view('Head');

?>

<?php

$this->load->view('Menu');

?>

<body>
<div class="content-wrapper">
    <div class="container-fluid">
<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url(); ?>Home">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Blank</h1>
          <p>This is an example of a blank page that you can use as a starting point for creating new ones.</p>
        </div>
      </div>
</div>
      </div>

    <?php

    $this->load->view('Down');

    ?>

  </body>
