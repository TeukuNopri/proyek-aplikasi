<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Data Anggota</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Admin</a></li>
                    <li><a href="<?php echo base_url() ?>anggota">Anggota</a></li>
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
                    <a href="<?php echo base_url() ?>anggota/entri" class="btn btn-primary btn-sm mb-3">
                        <i class="fa fa-plus"></i> Tambah Anggota
                    </a>
                    <h4 class="header-title">Data Anggota</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="bg-primary">
                                    <tr>
                                        <th style="color: white">No</th>
                                        <th style="color: white">Nomor Anggota</th>
                                        <th style="color: white">Nama Anggota</th>
                                        <th style="color: white">Alamat</th>
                                        <th style="color: white">Telepon</th>
                                        <th style="color: white">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>AG001</td>
                                        <td>Dewi Lestari</td>
                                        <td>Jl. Melati No. 21, Jakarta</td>
                                        <td>081234567890</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>AG002</td>
                                        <td>Budi Santoso</td>
                                        <td>Jl. Kenanga No. 12, Bandung</td>
                                        <td>082298765432</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris lain dari database -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
