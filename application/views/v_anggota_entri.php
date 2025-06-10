<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Data Anggota</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Admin</a></li>
                    <li><a href="<?php echo base_url() ?>anggota">Anggota</a></li>
                    <li><span>Entri</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <form action="<?php echo base_url() ?>anggota/submit" method="post">
                            <div class="card-body">
                                <h4 class="header-title">Entri Anggota</h4>

                                <div class="form-group">
                                    <label class="col-form-label">Nomor Anggota</label>
                                    <input type="text" class="form-control" name="nomor_anggota" maxlength="6" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Nama Anggota</label>
                                    <input type="text" class="form-control" name="nama_anggota" maxlength="50" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Alamat</label>
                                    <textarea class="form-control" name="alamat_anggota" maxlength="100" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Telepon</label>
                                    <input type="text" class="form-control" name="telepon_anggota" maxlength="12" required>
                                </div>

                                <br>
                                <button type="submit" class="btn btn-primary btn-sm mb-3">Simpan</button>
                                <a href="<?php echo base_url() ?>anggota" class="btn btn-secondary btn-sm mb-3">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
