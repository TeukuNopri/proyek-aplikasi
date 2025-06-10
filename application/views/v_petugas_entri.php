<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Data Petugas</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Admin</a></li>
                    <li><a href="<?php echo base_url() ?>petugas">Petugas</a></li>
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
                        <form action="<?php echo base_url() ?>petugas/submit" method="post">
                            <div class="card-body">
                                <h4 class="header-title">Entri Petugas</h4>

                                <div class="form-group">
                                    <label class="col-form-label">Kode Petugas</label>
                                    <input type="text" class="form-control" name="kode_petugas" maxlength="6" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Nama Petugas</label>
                                    <input type="text" class="form-control" name="nama_petugas" maxlength="50" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input type="password" class="form-control" name="password_petugas" maxlength="30" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Status</label>
                                    <select style="background-color: white" class="form-control" name="status_petugas" required>
                                        <option value="">-- Pilih Status --</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Nonaktif">Nonaktif</option>
                                    </select>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary btn-sm mb-3">Simpan</button>
                                <a href="<?php echo base_url() ?>petugas" class="btn btn-secondary btn-sm mb-3">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
