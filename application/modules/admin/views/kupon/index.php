<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Manajemen User</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <p>
            <a href="<?= base_url($add) ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
        </p>

        <div class="table-responsive">
            <table class="table DataTable">
                <thead>
                    <tr>
                        <th width="40px">No</th>
                        <th>Kupon</th>
                        <th>Besar Diskon</th>
                        <th>Kuota</th>
                        <th>Sisa Kuota</th>
                        <th>Status</th>
                        <th width="200px">Tindakan</th>
                    </tr>
                </thead>
                <tbody id="targetData">
                    <?php $no = 1;
                    foreach ($kupon as $row) { ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td>
                                <strong><?= $row->kupon ?></strong><br>
                                <small><?= $row->nama_admin; ?></small>
                            </td>
                            <td><?= $row->diskon . '%'; ?></td>
                            <td><?= $row->kuota; ?></td>
                            <td><?= $row->sisa_kuota; ?></td>
                            <td><?= $row->is_active == 1 ? '<span class="label label-success"><i class="fa fa-check"></i></span>' : '<span class="label label-danger"><i class="fa fa-times"></i></span>'; ?></td>
                            <td>
                                <a href="<?= base_url($delete . $row->id_kupon) ?>" class="btn btn-danger btn-xs tombol-hapus"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>

        </div>
    </div>
    <!-- /.box-body -->
</div>