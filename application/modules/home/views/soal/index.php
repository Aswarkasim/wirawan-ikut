<?php //print_r($task);
$this->load->model('home/Home_model', 'HM');
$no_soal = $task->no_soal + 1;
?>

<main id="content" role="main">
  <!-- Article Description Section -->
  <div class="container space-top-1 space-bottom-2">

    <div class="row">
      <div class="col-md-12">
        <div class="float-right">
          <?php include('pembahasan.php') ?>
        </div>
      </div>
    </div>

    <?php if ($task != null) { ?>
      <form action="<?= base_url('home/soal/submit/' . $task->id_task); ?>" method="POST">
        <div class="row">
          <div class="col-md-12">
            <?php if ($member->is_done == 0) {
            ?>
              <span class="btn btn-danger">
                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                <span id="waktu"></span>
              </span>
            <?php }
            ?>
            <h2>Soal Nomor <?= $task->no_soal; ?></h2>
            <br>
            <p><?= $task->butir_soal; ?></p>
            <hr>
            <?php
            $pilihan = $this->HM->listPilihan($task->id_soal);
            foreach ($pilihan as $row) {
            ?>
              <input type="radio" <?= $member->is_done == 1 ? "disabled" : "" ?> name="id_pilihan" <?= $row->id_pilihan == $task->id_pilihan ? 'checked' : '' ?> value="<?= $row->id_pilihan; ?>" id=""> <?= $row->anotasi . '. ' . $row->butir_pilihan; ?> <br>
              <hr>

            <?php } ?>
          </div>

        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="float-right">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <input type="submit" name="ragu" value="Ragu-ragu" class="btn btn-warning text-white">
                <input type="submit" name="selesai" value="Selesai dan lanjutkan" class="btn btn-primary text-white">
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-12">
            <?php include('nomorsoal.php') ?>

          </div>
        </div>

      </form>
    <?php } else {
      echo 'Soal masih kosong';
    } ?>

  </div>
  <!-- End Article Description Section -->


</main>



<!-- Display the countdown timer in an element -->


<?php if ($member->is_done == 0) {
?>
  <script>
    // Set the date we're counting down to
    var countDownDate = new Date("<?= $member->time_end; ?>").getTime();
    // var countDownDate = new Date("2020-12-19 13:50:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;
      //  var distance = now - countDownDate;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);


      // Display the result in the element with id="waktu"
      document.getElementById("waktu").innerHTML = hours + ":" + minutes + ":" + seconds;

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("waktu").innerHTML = "EXPIRED";
        window.location = "<?= base_url('home/soal/resultTask/' . $task->id_soal . '/' . $task->id_paket . '/' . $task->id_member) ?>";
      }
    }, 1000);
  </script>
<?php } ?>