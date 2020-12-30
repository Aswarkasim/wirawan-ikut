<!-- Button trigger modal -->
<a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#EditPaket">
    <i class="fa fa-edit"></i>
</a>

<!-- Modal -->
<div class="modal fade" id="EditPaket" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Paket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart(base_url('admin/paket/edit/' . $paket->id_paket)) ?>
            <form action="" method="POST">

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nama Paket</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="nama_paket" required placeholder="Nama Paket" value="<?= $paket->nama_paket ?>" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Type</label>
                        </div>
                        <div class="col-md-9">
                            <select name="type" required class="form-control" onchange="showSelect(this)" id="">
                                <option value="">-- Type Paket --</option>
                                <option value="CPNS" <?= $paket->type == "CPNS" ? "selected" : ""; ?>>CPNS</option>
                                <option value="UTBK" <?= $paket->type == "UTBK" ? "selected" : ""; ?>>UTBK</option>
                            </select>
                        </div>
                    </div>
                </div>


                <?php if ($paket->type  == 'UTBK') { ?>
                    <div class="form-group" id="klasifikasi">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Klasifikasi</label>
                            </div>
                            <div class="col-md-9">
                                <select name="klasifikasi" required class="form-control">
                                    <option value="">-- Klasifikasi --</option>
                                    <option value="SAINTEK" <?= $paket->klasifikasi == "SAINTEK" ? "selected" : ""; ?>>SAINTEK</option>
                                    <option value="SOSHUM" <?= $paket->klasifikasi == "SOSHUM" ? "selected" : ""; ?>>SOSHUM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                <?php } ?>


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Jumlah Soal</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" name="jumlah_soal" required placeholder="Jumlah Soal" value="<?= $paket->jumlah_soal ?>" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Waktu</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" name="waktu" placeholder="Dalam Menit" required value="<?= $paket->waktu ?>" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Harga</label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" name="harga" placeholder="Harga" required value="<?= nominal($paket->harga) ?>" class="form-control">
                        </div>
                    </div>
                </div>



                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            <?php form_close() ?>
        </div>
    </div>
</div>