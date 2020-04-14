<div class="navbar-normal visible bg-nav-transparan px-lg-5 px-sm-4 px-3 w-100">
    <nav id="" class="navbar navbar-expand-lg navbar-dark mr-auto px-0">
        <h3 class="text-light">Rival Price</h3>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 px-0 ">
                <?php if($this->session->userdata("halaman") == "beranda"){ ?>
                <li class="nav-item mx-3">
                    <a class="nav-link active" href="<?= base_url(); ?>">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <?php }else{ ?>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="<?= base_url(); ?>">Beranda <span class="sr-only">(current)</span></a>
                </li>                    
                <?php } ?>
                
                <?php if($this->session->userdata("halaman") == "produk"){ ?>
                <li class="nav-item mx-3 text-white">
                    <a class="nav-link active" href="<?= base_url('produk'); ?>">Produk Lelang</a>
                </li>
                <?php }else{ ?>
                <li class="nav-item mx-3 text-white">
                    <a class="nav-link" href="<?= base_url('produk'); ?>">Produk Lelang</a>
                </li>               
                <?php } ?>
                
                <?php if($this->session->userdata("halaman") == "pemenang"){ ?>
                <li class="nav-item mx-3 text-white">
                    <a class="nav-link active" href="<?= base_url('pemenang-lelang'); ?>">Pemenang Lelang</a>
                </li>
                <?php }else{ ?>
                <li class="nav-item mx-3 text-white">
                    <a class="nav-link" href="<?= base_url('pemenang-lelang'); ?>">Pemenang Lelang</a>
                </li>                    
                <?php } ?>
                <?php if($this->session->userdata('login_user') != "true" ){ ?><li 
                class="nav-item mx-3 text-white">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#modalLogin"> <i class="fa fa-sign-in mr-1"></i> Masuk</a>
                </li>
                <li class="nav-item ml-3 text-white">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#modalRegister"> <i class="fa fa-edit mr-1"></i> Daftar</a>
                </li>
                <?php } else{?>
                <li class="nav-item ml-3 text-white">
                    <a class="nav-link" href="<?= base_url('dashboard'); ?>"> <i class="fa fa-dashboard mr-1"></i> Dashboard</a>
                </li>
                <li class="nav-item ml-3 text-white">
                    <a class="nav-link" onclick="logout()" style="cursor:pointer"> <i class="fa fa-sign-out mr-1" ></i> Logout</a>
                </li>
                <?php } ?>
                <li class="nav-item ml-3 text-white">
                    <i class="nav-link mt-1 fa fa-search"></i>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="navbar-fixed fixed-top shadow invisible px-lg-5 px-sm-4 px-3 w-100">
    <nav id="" class="navbar navbar-expand-lg navbar-dark mr-auto px-0">
        <h3 class="text-light">Rival Price</h3>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavIdFixed" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavIdFixed">
            <ul class="navbar-nav ml-auto mt-2 px-0 ">
                <?php if($this->session->userdata("halaman") == "beranda"){ ?>
                <li class="nav-item mx-3">
                    <a class="nav-link active" href="<?= base_url(); ?>">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <?php }else{ ?>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="<?= base_url(); ?>">Beranda <span class="sr-only">(current)</span></a>
                </li>                    
                <?php } ?>
                
                <?php if($this->session->userdata("halaman") == "produk"){ ?>
                <li class="nav-item mx-3 text-white">
                    <a class="nav-link active" href="<?= base_url('produk'); ?>">Produk Lelang</a>
                </li>
                <?php }else{ ?>
                <li class="nav-item mx-3 text-white">
                    <a class="nav-link" href="<?= base_url('produk'); ?>">Produk Lelang</a>
                </li>               
                <?php } ?>
                
                <?php if($this->session->userdata("halaman") == "pemenang"){ ?>
                <li class="nav-item mx-3 text-white">
                    <a class="nav-link active" href="<?= base_url('pemenang-lelang'); ?>">Pemenang Lelang</a>
                </li>
                <?php }else{ ?>
                <li class="nav-item mx-3 text-white">
                    <a class="nav-link" href="<?= base_url('pemenang-lelang'); ?>">Pemenang Lelang</a>
                </li>                    
                <?php } ?>
                <?php if($this->session->userdata('login_user') != "true" ){ ?>
                <li class="nav-item mx-3 text-white">
                <a class="nav-link" href="" data-toggle="modal" data-target="#modalLogin"> <i class="fa fa-sign-in mr-1"></i> Masuk</a>
                </li>
                <li class="nav-item ml-3 text-white">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#modalRegister"> <i class="fa fa-edit mr-1"></i> Daftar</a>
                </li>
                <?php } else{?>
                <li class="nav-item ml-3 text-white">
                    <a class="nav-link" href="<?= base_url('dashboard'); ?>"> <i class="fa fa-dashboard mr-1"></i> Dashboard</a>
                </li>
                <li class="nav-item ml-3 text-white">
                    <a class="nav-link" onclick="logout()" style="cursor:pointer"> <i class="fa fa-sign-out mr-1" ></i> Logout</a>
                </li>
                <?php } ?>
                <li class="nav-item ml-3 text-white">
                    <i class="nav-link mt-1 fa fa-search"></i>
                </li>
            </ul>
        </div>
    </nav>
</div>