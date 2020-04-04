<!-- ===== LOAD HEAD =====-->
<?php $this->load->view('admin/_partials/head');?>
<!-- ===== END HEAD =====-->


<!-- ===== START BODY =====  -->
<body>    

    <!-- ===== CONTAINER ===== -->
    <div class="container">
        <div class="row d-flex justify-content-center mt-5 px-4 py-5">
            <div class="col-lg-4 col-md-6 col-sm-7 shadow rounded px-4 py-5 pb-4 bg-white">
                <form action="">
                    <div class="form-group">

                        <!-- ===== HEAD CONTENT -->
                        <div class="d-flex justify-content-center">
                            <!-- ===== TITLE ===== -->
                            <h1 class="px-4 pb-3">
                                Login
                            </h1>
                            <!-- ===== END TITLE ===== -->
                        </div>
                        <!-- ===== END HEAD CONTENT ===== -->


                        <!-- ===== ALERT FAILED LOGIN -->
                        <div id="alertFailedLogin" class="d-none alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Username or password is incorrect</strong>
                        </div>
                        <!-- ===== END ALERT FAILED LOGIN -->


                        <!-- ===== ALERT SUCCESS LOGIN -->
                        <div id="alertSuccessLogin" class="d-none alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Login Success</strong>
                        </div>
                        <!-- ===== END ALERT SUCCESS LOGIN -->


                        <!-- ===== FORM INPUT USERNAME -->
                        <input maxlength="25" autocomplete="off" type="text" class="mt-3 mb-3 form-control shadow-sm" name="username" id="loginUsername" aria-describedby="usernameHelpId" placeholder="Username">
                        <!-- ===== END FORM INPUT USERNAME -->
                        <!-- ===== ALERT VALIDATION USERNAME -->
                        <div id="alertLoginUsername" class="d-none alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Username require and max 25 char</strong>
                        </div>
                        <!-- ===== END ALERT VALIDATION USERNAME -->


                        <!-- ===== FORM INPUT PASSWORD -->
                        <input minlength="8" maxlength="25" autocomplete="off" type="password" class="mb-3 form-control shadow-sm" name="password" id="loginPassword" aria-describedby="passwordHelpId" placeholder="Password">
                        <!-- ===== END FORM INPUT PASSWORD -->
                        <!-- ===== ALERT VALIDATION PASSWORD -->
                        <div id="alertLoginPassword" class="d-none alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Password require, min 8 char and max 25 char</strong>
                        </div>
                        <!-- ===== END ALERT VALIDATION PASSWORD -->


                        <!-- ===== BUTTON SUBMIT FORM ===== -->
                        <button id="loginSubmit" type="button" class="shadow rounded mt-2 btn-login text-white btn btn-primary w-100 shadow-sm">
                            Login
                        </button>
                        <!-- ===== END BUTTON SUBMIT FORM ===== -->

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ===== END CONTAINER ===== -->


    <!-- ===== LOAD FOOT ===== -->
    <?php $this->load->view('admin/_partials/foot');?>
    <!-- ===== END FOOT ===== -->

  <!-- ===== START JAVASCRIPT ===== -->
    <script>
        // $('body').css("background-image","url('<?= base_url(); ?>/assets/img/layouts/bg.jpg')");
        // $('body').css("background-size","cover");

        // VALIDATION LOGIN FORM ON SUBMIT FORM
        $('#loginSubmit').click(function (e) {
            e.preventDefault();

            // DEKLARASI VARIABLE;
            let validasiLogin ="";
            let loginUsername = $('#loginUsername').val();
            let loginPassword = $('#loginPassword').val();

            // VALIDASI USERNAME + PASSWORD
            if($('#loginUsername').val().length == 0 || $('#loginUsername').val().length > 25){
                $('#alertLoginUsername').removeClass('d-none');
                $('#alertLoginUsername').addClass('d-block');
                validasiLogin = "gagal";
            }if($('#loginPassword').val().length < 8 || $('#loginPassword').val().length > 25){
                $('#alertLoginPassword').removeClass('d-none');
                $('#alertLoginPassword').addClass('d-block');
                validasiLogin = "gagal";
            }

            // SEND API TO CHECK USERNAME & PASSWORD
            if(validasiLogin != "gagal"){
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/AuthControllerAdmin/loginCheck') ?>",
                    data: {
                        'username': loginUsername,
                        'password': loginPassword,
                    },
                    dataType: "JSON",
                    success: function (response) {
                        if(response.success == true){
                            $('#alertSuccessLogin').removeClass('d-none');
                            $('#alertSuccessLogin').addClass('d-block');

                            $('#alertLoginUsername').removeClass('d-block');
                            $('#alertLoginUsername').addClass('d-none');
                            
                            $('#alertLoginPassword').removeClass('d-block');
                            $('#alertLoginPassword').addClass('d-none');

                            $('#alertFailedLogin').removeClass('d-block');
                            $('#alertFailedLogind').addClass('d-none');
                            
                            setTimeout(window.location.href = "<?= base_url('admin/dashboard') ?>",1000);
                        }else{
                            $('#alertFailedLogin').removeClass('d-none');
                            $('#alertFailedLogine').addClass('d-block');

                            $('#alertLoginUsername').removeClass('d-block');
                            $('#alertLoginUsername').addClass('d-none');
                            
                            $('#alertLoginPassword').removeClass('d-block');
                            $('#alertLoginPassword').addClass('d-none');

                            $('#alertSuccessLogin').removeClass('d-block');
                            $('#alertSuccessLogin').addClass('d-none');
                            
                        }          
                    }
                });
            }
        });
    </script>
    <!-- ===== END JAVASCRIPT ===== -->

</body>
<!-- ===== END BODY =====  -->


</html>
