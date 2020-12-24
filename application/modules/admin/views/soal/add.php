<?php

$this->load->model('admin/Soal_model', 'SM');

?>

<script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>


<style>
    #hidden_div {
        display: none;
    }

    /* .hidden-select-saintek {
        display: none;
    } */
</style>

<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="row">
    <div class="col-md-9">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?= $title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <?php
                echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
                ?>

                <form action="<?= base_url($add) ?>" method="post">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Nomor Soal</label>
                            </div>
                            <div class="col-md-2">
                                <!-- <input type="number" placeholder="No. Soal" name="no_soal" class="form-control" id=""> -->

                                <select name="no_soal" class="select2 form-control" id="">
                                    <option value="">-- No. Soal --</option>
                                    <?php for ($i = 1; $i <= $paket->jumlah_soal; $i++) {
                                        $cek = $this->SM->cekNoSoal($paket->id_paket, $i);
                                        if ($cek->no_soal != $i) {
                                            echo '<option value = "' . $i . '">' . $i . '</option>';
                                        }
                                    } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Butir Soal</label>
                            </div>
                            <div class="col-md-9">
                                <textarea name="butir_soal" id="editor1" placeholder="Butir Soal" required class="form-control"><?= set_value('butir_soal') ?></textarea>
                            </div>
                        </div>
                    </div>


                    <?php if ($paket->type == 'CPNS') { ?>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="pull-right">Klasifikasi</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="klasifikasi" required class="form-control" id="">
                                        <option value="">--- Klasifikasi ---</option>
                                        <option value="TWK">TWK</option>
                                        <option value="TIU">TIU</option>
                                        <option value="TKP">TKP</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php } else if ($paket->type == 'UTBK') {
                        if ($paket->klasifikasi == 'SAINTEK') { ?>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right"> Klasifikasi</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select name="klasifikasi" required class="form-control" onchange="showSelect(this)" id="">
                                            <option value="">--- Klasifikasi ---</option>
                                            <option value="TKA">TKA</option>
                                            <option value="TPS">TPS</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Fokus Tes</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select name="fokus_tes_tka" id="fokus_tes_tka" class="form-control" style="display: none;">
                                            <option value="">---Fokus Tes ---</option>
                                            <option value="MTK">Matematika</option>
                                            <option value="FISIKA">FISIKA</option>
                                            <option value="KIMIA">KIMIA</option>
                                            <option value="BING">BING</option>
                                        </select>

                                        <select name="fokus_tes_tps" id="fokus_tes_tps" class="form-control" style="display: none;">
                                            <option value="">---Fokus Tes ---</option>
                                            <option value="KPU">Kemampuan Penalaran Ummum</option>
                                            <option value="KMBM">Kemampuan Memahami Bacaan dan Menulis</option>
                                            <option value="PPU">Pengetahuan dan Pemahaman Umum</option>
                                            <option value="PK">Pengetahuan Kuantitatif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right"> Poin</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select name="poin" required class="form-control" id="">
                                            <option value="">--- Poin ---</option>
                                            <option value="1">1</option>
                                            <option value="1.4">1.4</option>
                                            <option value="1.8">1.8</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        <?php } else if ($paket->klasifikasi == 'SOSHUM') { ?>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right"> Klasifikasi</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select name="klasifikasi" required class="form-control" onchange="showSelect(this)" id="">
                                            <option value="">--- Klasifikasi ---</option>
                                            <option value="TKA">TKA</option>
                                            <option value="TPS">TPS</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Fokus Tes</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select name="fokus_tes_tka" id="fokus_tes_tka" class="form-control" style="display: none;">
                                            <option value="">---Fokus Tes ---</option>
                                            <option value="MATEMATIKA">MATEMATIKA</option>
                                            <option value="SEJARAH">SEJARAH</option>
                                            <option value="GEOGRAFI">GEOGRAFI</option>
                                            <option value="SOSIOLOGI">SOSIOLOGI</option>
                                            <option value="EKONOMI">EKONOMI</option>
                                        </select>

                                        <select name="fokus_tes_tps" id="fokus_tes_tps" class="form-control" style="display: none;">
                                            <option value="">---Fokus Tes ---</option>
                                            <option value="KPU">Kemampuan Penalaran Ummum</option>
                                            <option value="KMBM">Kemampuan Memahami Bacaan dan Menulis</option>
                                            <option value="PPU">Pengetahuan dan Pemahaman Umum</option>
                                            <option value="PK">Pengetahuan Kuantitatif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right"> Poin</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select name="poin" required class="form-control" id="">
                                            <option value="">--- Poin ---</option>
                                            <option value="1">1</option>
                                            <option value="1.4">1.4</option>
                                            <option value="1.8">1.8</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                    <?php }
                    } ?>



                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-9">
                                <a href="<?= base_url($back) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-indent"></i> Buat</button>
                            </div>
                        </div>
                    </div>

                </form>






            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>


<script type="text/javascript">
    function showSelect(select) {
        if (select.value == 'TKA') {
            document.getElementById('fokus_tes_tka').style.display = "block"
            document.getElementById('fokus_tes_tps').style.display = "none"
        } else if (select.value == 'TPS') {
            document.getElementById('fokus_tes_tka').style.display = "none"
            document.getElementById('fokus_tes_tps').style.display = "block"
        } else {
            document.getElementById('hidden-select-soshum').style.display = "none"
        }
    }
</script>



<p>&nbsp;</p>


<!-- <script>
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
    })
</script>

<script src="<?= base_url('assets/js/'); ?>ckeditor/ckeditor.js"></script> -->


<script>
    CKEDITOR.replace('editor1', {
        height: 300,
        filebrowserUploadUrl: "<?= base_url('admin/soal/upload'); ?>"
    });
</script>