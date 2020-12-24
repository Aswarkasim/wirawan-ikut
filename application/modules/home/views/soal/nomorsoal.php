<style>
  .no-soal {
    width: 60px;
    height: 60px;
    margin-top: 10px;
  }
</style>

<?php $no = 1;
foreach ($listSoal as $row) {  ?>
  <a href="<?= base_url('home/soal/butir/' . $row->no_soal) ?>" class="btn <?php if ($row->is_done == 'selesai') {
                                                                              echo 'btn-primary';
                                                                            } else if ($row->is_done == 'ragu') {
                                                                              echo 'btn-warning';
                                                                            } else {
                                                                              echo 'btn-outline-primary';
                                                                            } ?>  no-soal"><?= $row->no_soal ?></a>
<?php } ?>

<!-- is  done  -->