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

        <table class="table DataTable">
            <thead>
                <tr>
                    <th width="40px">No</th>
                    <th>Nama</th>
                    <th width="100px">Status</th>
                    <!-- <th width="200px">Tindakan</th> -->
                </tr>
            </thead>
            <tbody id="targetData">
                <?php $no = 1;
                foreach ($user as $row) { ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td>
                            <a href="<?= base_url('admin/user/detail/' . $row->id_user); ?>"> <strong><?= $row->namalengkap ?></strong></a><br>
                            <p><?= $row->email ?></p>
                        </td>
                        <td><?php if ($row->is_active == 1) {
                                echo '<div class="label label-success">Aktif</div>';
                            } else {
                                echo '<div class="label label-danger">Tidak Aktif</div>';
                            } ?></td>
                        <!-- <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info"><i class="fa fa-cogs"></i></button>
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?= base_url($edit . $row->id_user)  ?>"><i class="fa fa-edit"></i> Edit</a></li>
                                    <li><a class="tombol-hapus" href="<?= base_url($delete . $row->id_user)  ?>"><i class="fa fa-trash"></i> Hapus</a></li>
                                </ul>
                            </div>


                        </td> -->
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>

    </div>
    <!-- /.box-body -->
</div>