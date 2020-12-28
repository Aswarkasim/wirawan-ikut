<?php
$id_admin = $this->session->userdata('id_admin');
$admin = $this->Crud_model->listingOne('tbl_admin', 'id_admin', $id_admin);

?>
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="flashdata-error" data-flashdata="<?= $this->session->flashdata('msg_er') ?>"></div>
<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>F</b>W</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>MY</b>FW</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">


        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <ul class="nav navbar-nav">
            <li class="dropdown open">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Tahun <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Sekarang</a></li>
                    <li><a href="#">2020</a></li>
                </ul>
            </li>
        </ul>


        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs"><?= $admin->nama_admin ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The admin image in the menu -->
                        <li class="user-header">
                            <p>
                                <?= $admin->nama_admin ?>
                                <small><?= $admin->role ?></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="<?= base_url('admin/auth/logout') ?>" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Keluar</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>