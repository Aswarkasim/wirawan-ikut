<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="row">
    <div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?= $title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <?php
                echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
                if (isset($error)) {
                    echo '<div class="alert alert-warning"><i class="fa fa-warning"></i> ' . $error . '</div>';
                }

                echo form_open_multipart($edit);
                ?>

                <form action="<?= base_url($edit . $paket->id_paket) ?>" method="post">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Nama Paket</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="nama_paket" placeholder="Nama Paket" value="<?= $paket->nama_paket ?>" class="form-control">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Type</label>
                            </div>
                            <div class="col-md-9">
                                <select name="id_type" class="form-control select2" id="">
                                    <option value="">-- Type Paket --</option>
                                    <option value="CPNS" <?= $paket->type == 'CPNS' ? 'selected' : ''; ?>><?= $paket->type; ?></option>
                                    <option value="UTBK" <?= $paket->type == 'UTBK' ? 'selected' : ''; ?>><?= $paket->type; ?></option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Waktu</label>
                            </div>
                            <div class="col-md-9">
                                <input type="time" name="waktu" value="<?= $paket->waktu ?>" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Harga</label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" name="harga" placeholder="Harga" value="<?= $paket->harga ?>" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Paket</label>
                            </div>
                            <div class="col-md-9">
                                <input type="file" name="cover" placeholder="Harga" value="<?= set_value('cover') ?>" class="form-control">
                                <img src="<?= base_url($paket->cover); ?>" width="200px" alt="">
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-9">
                                <a href="<?= base_url($back) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>

                </form>
                <?= form_close() ?>



            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>