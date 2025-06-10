<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Data Petugas</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Admin</a></li>
                    <li><a href="<?php echo base_url() ?>petugas">Petugas</a></li>
                    <li><span>Data</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <a href="<?php echo base_url() ?>petugas/entri" class="btn btn-primary btn-sm mb-3">
                        <i class="fa fa-plus"></i> Tambah Petugas
                    </a>
                    <h4 class="header-title">Data Petugas</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="bg-primary">
                                    <tr>
                                        <th style="color: white">No</th>
                                        <th style="color: white">Kode Petugas</th>
                                        <th style="color: white">Nama Petugas</th>
                                        <th style="color: white">Password</th>
                                        <th style="color: white">Status</th>
                                        <th style="color: white">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>PTG001</td>
                                        <td>Rizky Hidayat</td>
                                        <td>********</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>PTG002</td>
                                        <td>Dian Prasetyo</td>
                                        <td>********</td>
                                        <td>Nonaktif</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan data dari database atau dummy lainnya -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
