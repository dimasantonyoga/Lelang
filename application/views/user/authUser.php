<!-- Start Head -->
<?php $this->load->view('user/_partials/head');?>
<!-- End Head -->

<!-- Start Body -->
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-7">
            <div id="carouselId" class="carousel slide" data-ride="carousel">
                <!-- <ol class="carousel-indicators">
                    <li class="active"></li>
                    <li ></li>
                    <li data-target="#carouselId" data-slide-to="2"></li>
                </ol> -->
                <div class="carousel-inner" role="listbox">
                    
                    <div class="carousel-item active">
                    <div class="row  mt-5 px-4 py-5">
                        <div class="col-lg-12 col-sm-12 col-md-12 border border-danger rounded px-4 py-5 pb-4">
                            <form action="">
                                <div class="form-group py-4">
                                    <div class="d-flex justify-content-center">
                                        <h1 class="position-absolute px-4 py-2" style="top:-35px; background:white;">
                                            Login
                                        </h1>
                                    </div>
                                    <div id="alertFailedLogin" class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <strong>Username or password is incorrect</strong>
                                    </div>
                                    <div id="alertSuccessLogin" class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <strong>Login Success</strong>
                                    </div>
                                    <input maxlength="25" autocomplete="off" type="text" class="mt-3 mb-3 form-control shadow-sm" name="username" id="loginUsername" aria-describedby="usernameHelpId" placeholder="Username">
                                    <div id="alertLoginUsername" class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <strong>Username require and max 25 char</strong>
                                    </div>
                                    <input minlength="8" maxlength="25" autocomplete="off" type="password" class="mb-3 form-control shadow-sm" name="password" id="loginPassword" aria-describedby="passwordHelpId" placeholder="Password">
                                    <div id="alertLoginPassword" class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <strong>Password require, min 8 char and max 25 char</strong>
                                    </div>
                                    <button id="loginSubmit" type="button" class=" btn btn-danger w-100 shadow-sm">
                                        Login
                                    </button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row  mt-5 px-4 py-5">
                            <div class="col-lg-12 col-sm-12 col-md-12 border border-danger rounded px-4 py-5">
                            <form action="">
                                <div class="form-group">
                                    <div class="d-flex justify-content-center">
                                        <h1 class="position-absolute px-4 py-2" style="top:-35px; background:white;">
                                            Register
                                        </h1>
                                    </div>
                                    <div id="alertRegisterSuccess" class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <strong>Register Success :)</strong>
                                    </div>
                                    <div id="alertRegisterFailed" class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <strong>Register Failed :(</strong>
                                    </div>
                                    <input autocomplete="off" maxlength="25" type="text" class="mb-3 form-control shadow-sm" name="name" id="registerName" aria-describedby="nameHelpId" placeholder="Name">
                                    <div id="alertRegisterName" class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        Name require, max 25 char
                                    </div>
                                    <input autocomplete="off" maxlength="25" type="text" class="mb-3 form-control shadow-sm" name="username" id="registerUsername" aria-describedby="usernameHelpId" placeholder="Username">
                                    <div id="alertRegisterUsername" class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        Username require, max 25 char
                                    </div>
                                    <div id="alertRegisterUsernameUse" class="alert alert-danger py-2 mb-4" role="alert">
                                        username already exists !
                                    </div>
                                    <input min="0" autocomplete="off" maxlength="25" type="number" class="mb-3 form-control shadow-sm" name="tlp" id="registerTlp" aria-describedby="tlpHelpId" placeholder="Telephone">
                                    <div id="alertRegisterTelephone" class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        Telephone require, max 25 char
                                    </div>
                                    <input autocomplete="off" maxlength="25" type="password" class="mb-3 form-control shadow-sm" name="password" id="registerPassword" aria-describedby="passwordHelpId" placeholder="Password">
                                    <div id="alertRegisterPassword" class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        Password require, min 8 char and max 25 char
                                    </div>
                                    <input autocomplete="off" maxlength="25" type="password" class="mb-3 form-control shadow-sm" name="rePassword" id="registerPassword2" aria-describedby="rePasswordHelpId" placeholder="Re-password">
                                    <div id="alertRegisterPassword2" class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        Repeat password
                                    </div>
                                    <button id="registerSubmit" disabled type="button" class=" btn btn-danger w-100 shadow-sm">
                                        Register
                                    </button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row  mt-5 px-4 py-5">
                            <div class="col-lg-12 col-sm-12 col-md-12 border border-danger rounded px-4 py-5 pb-4">
                                <div class="d-flex justify-content-center">
                                    <h1 class="position-absolute px-4 py-2" style="top:-35px; background:white;">
                                        Home
                                    </h1>
                                </div>
                                <div class="text-center border border-danger rounded-circle py-4 px-2">
                                    <img src="<?= base_url('assets/img/layouts/home.png') ?>" class="w-50 pb-1" alt=""> <br>
                                    <img src="<?= base_url('assets/img/layouts/logonew.png') ?>" class="w-75 pb-3" alt=""> <br>
                                    <a  class="btn btn-danger rounded-circle px-3 py-3" href="<?= base_url('') ?>" role="button">Back Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
            </div>
        </div>
        <div class="col-lg-2 col-sm-4 h-75 col-md-3 ml-lg-1">
            <div class="row mt-5 py-5">
                <div class="col-sm-12 col-md-12 col-lg-12 border border-danger rounded pb-5 pt-3 mx-4 mx-lg-0 mx-md-0 mx-sm-0 px-3 text-center">
                    <img class="w-50 mb-4" src="<?= base_url('assets/img/layouts/logo.png') ?>" alt="">
                    <button onclick="$('#slideLogin').addClass('active');$('#slideRegister').removeClass('active');$('#slideHome').removeClass('active');" id="slideLogin" data-target="#carouselId" data-slide-to="0" type="button" class="my-2 w-100 btn btn-outline-danger active">
                        Login
                    </button>
                    <button onclick="$('#slideRegister').addClass('active');$('#slideLogin').removeClass('active');$('#slideHome').removeClass('active');" id="slideRegister" data-target="#carouselId" data-slide-to="1" type="button" class="my-2 w-100 btn btn-outline-danger">
                        Register
                    </button>
                    <button onclick="$('#slideHome').addClass('active');$('#slideRegister').removeClass('active');$('#slideLogin').removeClass('active');" id="slideHome" data-target="#carouselId" data-slide-to="2" type="button" class="my-2 w-100 btn btn-outline-danger">
                        Home
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Body -->

<!-- Start Foot -->
<?php $this->load->view('user/_partials/foot');?>
<script src="<?= base_url('assets/js/page/user/authUser.js') ?>"></script>
<!-- End Foot -->
<script>
    
    // STOP SLIDE CAROUSEL
    $('.carousel').carousel({
    interval: false
    });

    // HIDE ALERT LOGIN
    $('#alertLoginUsername').hide();
    $('#alertLoginPassword').hide();
    $('#alertSuccessLogin').hide();
    $('#alertFailedLogin').hide();

    // HIDE ALERT REGISTER
    $('#alertRegisterName').hide();
    $('#alertRegisterUsername').hide();
    $('#alertRegisterTelephone').hide();
    $('#alertRegisterPassword').hide();
    $('#alertRegisterPassword2').hide();
    $('#alertRegisterSuccess').hide();
    $('#alertRegisterFailed').hide();
    $('#alertRegisterUsernameUse').hide();

    // VALIDATION LOGIN FORM
    // ON SUBMIT FORM
    $('#loginSubmit').click(function (e) { 
        e.preventDefault();
        let validasiLogin ="";
        let loginUsername = $('#loginUsername').val();
        let loginPassword = $('#loginPassword').val();
        if($('#loginUsername').val().length == 0 || $('#loginUsername').val().length > 25){
            $('#alertLoginUsername').show();
            validasiLogin = "gagal";
        }if($('#loginPassword').val().length < 8 || $('#loginPassword').val().length > 25){
            $('#alertLoginPassword').show();
            validasiLogin = "gagal";
        }
        if(validasiLogin != "gagal"){
            $.ajax({
                type: "POST",
                url: "<?= base_url('user/AuthControllerUser/loginCheck') ?>",
                data: {
                    'username': loginUsername,
                    'password': loginPassword,
                },
                dataType: "JSON",
                success: function (response) {
                    if(response.success == true){
                        $('#alertSuccessLogin').show();
                        $('#alertLoginUsername').hide();
                        $('#alertLoginPassword').hide();
                        $('#alertFailedLogin').hide();
                        setTimeout(window.location.href = "<?= base_url() ?>",1000);
                    }else{
                        $('#alertFailedLogin').show();
                        $('#alertLoginUsername').hide();
                        $('#alertLoginPassword').hide();
                        $('#alertSuccessLogin').hide();
                    }       
                }
            });
        }

    });

    // VALIDATION REGISTER FORM
    // CLICK FORM REGISTER INPUT
    let registeruss="";
    $('#registerName').keyup(function (e) { 
        e.preventDefault();
        $('#alertRegisterName').show();
        $('#alertRegisterUsername').hide();
        $('#alertRegisterTelephone').hide();
        $('#alertRegisterPassword').hide();
        $('#alertRegisterPassword2').hide();         
    });
    $('#registerUsername').keyup(function (e) { 
        e.preventDefault();
        $('#alertRegisterName').hide();
        $('#alertRegisterUsername').show();
        $('#alertRegisterTelephone').hide();
        $('#alertRegisterPassword').hide();
        $('#alertRegisterPassword2').hide();
        // Check username in form register
        let registerUsername = $('#registerUsername').val();
        if($('#registerUsername').val().length < 1){
            $('#alertRegisterUsernameUse').hide();
            $('#alertRegisterUsername').show();
        }
        $.ajax({
            type: "POST",
            url: "<?= base_url('user/AuthControllerUser/registerCheckUsername') ?>",
            data: {
                'username' : registerUsername 
            },
            dataType: "JSON",
            success: function (response) {
                if(response.success == true){
                $('#alertRegisterUsernameUse').show();
                $('#alertRegisterUsername').hide();
                registeruss="duplicate";
                }else{
                $('#alertRegisterUsernameUse').hide();
                $('#alertRegisterUsername').show();
                registeruss="";
                }   
            }
        });         
    });
    $('#registerTlp').keyup(function (e) { 
        e.preventDefault();
        $('#alertRegisterName').hide();
        $('#alertRegisterUsername').hide();
        $('#alertRegisterTelephone').show();
        $('#alertRegisterPassword').hide();
        $('#alertRegisterPassword2').hide();         
    });
    $('#registerPassword').keyup(function (e) { 
        e.preventDefault();
        $('#alertRegisterName').hide();
        $('#alertRegisterUsername').hide();
        $('#alertRegisterTelephone').hide();
        $('#alertRegisterPassword').show();
        $('#alertRegisterPassword2').hide();         
    });
    $('#registerPassword2').keyup(function (e) { 
        e.preventDefault();
        $('#alertRegisterName').hide();
        $('#alertRegisterUsername').hide();
        $('#alertRegisterTelephone').hide();
        $('#alertRegisterPassword').hide();
        $('#alertRegisterPassword2').show();         
    });

    function checkFormRegister(){
        // IF FORM REGISTER NOT EMPTY
        if($('#registerName').val().length > 0 && $('#registerName').val().length <= 25 && $('#registerUsername').val().length > 0 && $('#registerUsername').val().length <= 25 && $('#registerTlp').val().length > 0 && $('#registerTlp').val().length <= 25 && $('#registerPassword').val().length >= 8 && $('#registerPassword').val().length <= 25 && $('#registerPassword2').val().length >= 8 && $('#registerPassword2').val().length <= 25 && $('#registerPassword2').val() == $('#registerPassword').val() && registeruss==""){
            $('#registerSubmit').prop("disabled", false);
        }else{
            $('#registerSubmit').prop("disabled", true);
        }
    }

    // Register send api
    $('#registerSubmit').click(function (e) { 
        e.preventDefault();
        let registerName = $('#registerName').val();
        let registerUsername = $('#registerUsername').val();
        let registerTelephone = $('#registerTlp').val();
        let registerPassword = $('#registerPassword').val();
        let registerPassword2 = $('#registerPassword2').val();

        $.ajax({
            type: "POST",
            url: "<?= base_url('user/AuthControllerUser/register') ?>",
            data: {
                'registerName' : registerName,
                'registerUsername' : registerUsername,
                'registerTelephone' : registerTelephone,
                'registerPassword' : registerPassword},
            async : true,
            dataType: "JSON",
            success: function (response) {
                $('#alertRegisterName').hide();
                $('#alertRegisterUsername').hide();
                $('#alertRegisterTelephone').hide();
                $('#alertRegisterPassword').hide();
                $('#alertRegisterPassword2').hide();
                if(response.success == true){
                    $('#alertRegisterSuccess').show();
                    $('#registerUsername').val('');
                    $('#loginUsername').val(registerUsername);
                }else{
                    $('#alertRegisterFailed').show();
                }
            }
        });
    });

    // REALTIME IN PAGE
    function realTime(){
        // GET VALUE FROM REGISTER FORM
        checkFormRegister();
    }
    let interval = setInterval(realTime,1);
</script>