<?php

$this->load->view('home/layout/head');
$this->load->view('home/layout/header');
?>

<div class="bg-light">
  <div class="container">
    <?php

    include('nav.php');
    include('content.php');
    ?>
  </div>
</div>
<?php
$this->load->view('home/layout/footer');
