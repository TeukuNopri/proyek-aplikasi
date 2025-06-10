<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Data Buku</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Admin</a></li>
                    <li><a href="<?php echo base_url() ?>buku">Buku</a></li>
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
                    <a href="<?php echo base_url() ?>buku/entri" class="btn btn-primary btn-sm mb-3">
                        <i class="fa fa-plus"></i> Tambah Buku
                    </a>
                    <h4 class="header-title">Data Buku</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="bg-primary">
                                    <tr>
                                        <th style="color: white">No</th>
                                        <th style="color: white">Nomor Buku</th>
                                        <th style="color: white">Judul</th>
                                        <th style="color: white">Kategori</th>
                                        <th style="color: white">Pengarang</th>
                                        <th style="color: white">Penerbit</th>
                                        <th style="color: white">Tahun</th>
                                        <th style="color: white">Stok</th>
                                        <th style="color: white">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>BK001</td>
                                        <td>Algoritma dan Pemrograman</td>
                                        <td>Teknik Informatika</td>
                                        <td>Andi Nugroho</td>
                                        <td>Gramedia</td>
                                        <td>2022</td>
                                        <td>12</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>BK002</td>
                                        <td>Dasar Akuntansi</td>
                                        <td>Ekonomi</td>
                                        <td>Sri Wahyuni</td>
                                        <td>Erlangga</td>
                                        <td>2021</td>
                                        <td>8</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan data dummy atau dari database -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
