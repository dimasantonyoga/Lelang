<!-- Modal  Login-->
<div style="z-index: 9999999;" class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="overflow:hidden">
            <div class="modal-header">
                <h2 class="modal-title w-100 text-center">
                    Rival Price - Masuk Sekarang
                </h2>
            </div>
            <div class="modal-body text-left row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <img src="<?= base_url('assets/img/layouts/devoted-1.png') ?>" alt="devoted-1.png" class="w-100">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 py-2 pr-xl-5 pr-lg-5 px-md-5 px-sm-5 px-5">
                    <div class="form-group">
                      <label for="">Username</label>
                      <input type="text"
                        class="form-control" name="" maxlength="50" id="username" aria-describedby="helpId" placeholder="Masukkan Username Anda">
                        <small id="helpUsername" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" maxlength="50" minlength="8" class="form-control" name="" id="password" placeholder="Masukkan Password Anda">
                      <small id="helpPassword" class="form-text text-danger"></small>
                    </div>
                    <div id="notifLogin">
                        
                    </div>
                    <button type="button" onclick="login()" class="btn btn-primary w-100 my-2"> Login Sekarang !</button>
                    <div class="form-group py-4">
                        <a style="cursor:pointer" onclick="openRegister()" class="text-dark" >Belum punya akun ? <span class="text-primary"> DAFTAR DISINI </span> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal  Register-->
<div class="modal fade" style="z-index: 9999999;" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="overflow:hidden">
            <div class="modal-header">
                <h2 class="modal-title text-center w-100">
                    Pendaftaran Rival Price
                </h2>
            </div>
            <div class="modal-body text-left row py-0" style="background-image: url('<?= base_url('assets/img/layouts/devoted-1.png') ?>');background-repeat: no-repeat;background-position:left center">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                    
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12 h-100 py-4 px-5" style="background:rgba(241, 237, 237, 0.29)">
                    <div class="form-group">
                      <label for="">Nama Lengkap</label>
                      <input type="text"
                        class="form-control" maxlength="50" name="" id="namaRegister" aria-describedby="helpId" placeholder="Nama Lengkap">
                      <small id="helpNamaRegister" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                      <label for="">Nomor Telephone</label>
                      <input type="number"
                        class="form-control" maxlength="50"  name="" id="telpRegister" aria-describedby="helpId" placeholder="Telp">
                      <small id="helpTelpRegister" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                      <label for="">Username</label>
                      <input type="text"
                        class="form-control" maxlength="50" name="" id="usernameRegister" aria-describedby="helpId" placeholder="Username">
                      <small id="helpUsernameRegister" class="form-text text-danger"></small>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input maxlength="50" minlength="8" type="password" class="form-control" name="" id="passwordRegister" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Konfirmasi Password</label>
                                <input maxlength="50" minlength="8" type="password" class="form-control" name="" id="password2Register" placeholder="Ulangi Password">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <small id="helpPasswordRegister" class="form-text text-danger"></small>
                        </div>
                        <div class="col-lg-12">
                        <small id="helpPassword2Register" class="form-text text-danger"></small>
                        </div>
                        <div id="notifRegister">
                        
                        </div>
                    </div>
                    <button type="button" onclick="register()" class="btn btn-primary w-100 my-2"> Daftar Sekarang !</button>
                    <div class="form-group py-4">
                        <a style="cursor:pointer" class="text-dark" onclick="openLogin()" >Sudah punya akun ? <span class="text-primary"> Login DISINI </span> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pelelang -->
<div class="modal fade" style="z-index: 9999999;" id="modalPelelang" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-center w-100">
                    List Pelelang
                </h2>
            </div>
            <div class="modal-body">
            <table class="tablePelelang table table-striped table-bordered table-responsive-xl" style="width:100%">
                
            </table>
            </div>
        </div>
    </div>
</div>

