<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script> let ci_base = "<?= base_url(); ?>"; </script>
<script>

// navbar
let sc = false;
$(window).scroll(function() {
	clearTimeout($.data(this, 'scrollTimer'));

	var sticky = $('.navbar-fixed'),
		normal = $('.navbar-normal'),
		scroll = $(window).scrollTop();
		
	if(scroll == 0){
		

	}else if (scroll >= 70) { 
		sticky.removeClass('invisible');
		sticky.removeClass('bg-nav-transparan');
		sticky.addClass('visible');
		sticky.addClass('bg-nav-blue');
		normal.removeClass('visible');
		normal.addClass('invisible');
		sc = true;
	}    
	else {

		normal.removeClass('invisible');
		sticky.removeClass('visible');
		normal.addClass('visible');
		sticky.addClass('invisible');
		sticky.removeClass('bg-nav-blue');
		sticky.addClass('bg-nav-transparan');
		normal.addClass('bg-nav-transparan');
	}
});



// Rupiah Function
function formatRupiah(angka, prefix){
	var number_string = angka.replace(/[^,\d]/g,'').toString(),
	split   		= number_string.split(','),
	sisa     		= split[0].length % 3,
	rupiah     		= split[0].substr(0, sisa),
	ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

	// tambahkan titik jika yang di input sudah menjadi angka ribuan
	if(ribuan){
		separator = sisa ? '.' : '';
		rupiah += separator + ribuan.join('.');
	}

	rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
	return prefix == undefined ? rupiah : (rupiah ? prefix + rupiah : '');
}

// url function
function url_set(text) { 
	return text.split(' ').join('-');
}

// Login
$("#username").keyup(function (e) { 
	$("#username").removeClass("text-danger");
	$("#username").removeClass("border-danger");
	$("#helpUsername").html("");
});
$("#password").keyup(function (e) { 
	$("#password").removeClass("text-danger");
	$("#password").removeClass("border-danger");
	$("#helpPassword").html("");
});
function login(){ 
	let username = $("#username").val();
	let password = $("#password").val();
	let valUser = false;
	let valPass = false;


	if(username == "" || username.length > 50){
		$(helpUsername).html("Username tidak boleh kosong, maksimal 50 karakter");
		$(helpUsername).html("Username tidak boleh kosong, maksimal 50 karakter");
		$("#username").addClass("text-danger");
		$("#username").addClass("border-danger");
	}else{
		valUser = true;
	}
	if(password == "" || password.length > 50 || password.length < 8){
		$(helpPassword).html("Password tidak boleh kosong, maksimal 50 karakter & minimal 8 karakter");
		$(helpPassword).html("Password tidak boleh kosong, maksimal 50 karakter & minimal 8 karakter");
		$("#password").addClass("text-danger");
		$("#password").addClass("border-danger");
	}else{
		valPass = true;
	}

	if(valUser == true && valPass == true ){

		$.ajax({
			type: "POST", 
			url: "<?= base_url('user/AuthControllerUser/loginCheck') ?>",
			data: {
				'username': username,
				'password': password,
			},
			dataType: "JSON",
			success: function (response) {
				if(response.success == true){
					$("#modalLogin").modal('hide');
					alertSuccess();
					$("html").scrollLeft(0);
					setTimeout(() => {
						location.reload();
					}, 1000);
				}else{
					let notif = "<div class='alert alert-danger' role='alert'>"+
									"<strong>Username atau Password anda salah !</strong>"+
								"</div>";
					$("#notifLogin").html(notif);
					$("#password").addClass("text-danger");
					$("#password").addClass("border-danger");
					$("#username").addClass("text-danger");
					$("#username").addClass("border-danger");
				}       
			}
		});

		valUser = false;
		valPass = false;
	}

}



// Register
// nama
$("#namaRegister").keyup(function (e) { 
	$("#namaRegister").removeClass("text-danger");
	$("#namaRegister").removeClass("border-danger");
	$("#helpNamaRegister").html("");
});
// telp
$("#telpRegister").keyup(function (e) { 
	$("#telpRegister").removeClass("text-danger");
	$("#telpRegister").removeClass("border-danger");
	$("#helpTelpRegister").html("");
});
// username
let valUsernameDuplicate = true;
$("#usernameRegister").keyup(function (e) { 
	$("#usernameRegister").removeClass("text-danger");
	$("#usernameRegister").removeClass("border-danger");
	$("#helpUsernameRegister").html("");
	let usernameRegister = $("#usernameRegister").val();
	$.ajax({
            type: "POST",
            url: "<?= base_url('user/AuthControllerUser/registerCheckUsername') ?>",
            data: {
                'username' : usernameRegister 
            },
            dataType: "JSON",
            success: function (response) {
                if(response.success == true){
					$("#helpUsernameRegister").html("Username sudah digunakan");
					$("#usernameRegister").addClass("text-danger");
					$("#usernameRegister").addClass("border-danger");
					valUsernameDuplicate = true;
                }else{
					$("#helpUsernameRegister").html("");
					$("#usernameRegister").removeClass("text-danger");
					$("#usernameRegister").removeClass("border-danger");
					valUsernameDuplicate = false;
                }   
            }
        }); 
});
// pass
$("#passwordRegister").keyup(function (e) { 
	$("#passwordRegister").removeClass("text-danger");
	$("#passwordRegister").removeClass("border-danger");
	$("#helpPasswordRegister").html("");
});

// pass
$("#password2Register").keyup(function (e) { 
	$("#password2Register").removeClass("text-danger");
	$("#password2Register").removeClass("border-danger");
	$("#helpPassword2Register").html("");
});



function register(){
	let namaRegister = $("#namaRegister").val();
	let telpRegister = $("#telpRegister").val();
	let usernameRegister = $("#usernameRegister").val();
	let passwordRegister = $("#passwordRegister").val();
	let password2Register = $("#password2Register").val();
	let valNama = false;
	let valTelp = false;
	let valUsername = false;
	let valPassword = false;
	let valPassword2 = false;

	// nama
	if(namaRegister == "" || namaRegister.length > 50){
		$("#helpNamaRegister").html("Nama tidak boleh kosong, maksimal 50 karakter");
		$("#namaRegister").addClass("text-danger");
		$("#namaRegister").addClass("border-danger");
	}else{
		valNama = true;
	}

	// telp
	if(telpRegister == "" || telpRegister.length > 50){
		$("#helpTelpRegister").html("Nomor Telphone tidak boleh kosong, maksimal 50 karakter");
		$("#telpRegister").addClass("text-danger");
		$("#telpRegister").addClass("border-danger");
	}else{
		valTelp = true;
	}

	// username
	if(usernameRegister == "" || usernameRegister.length > 50){
		$("#helpUsernameRegister").html("Username tidak boleh kosong, maksimal 50 karakter");
		$("#usernameRegister").addClass("text-danger");
		$("#usernameRegister").addClass("border-danger");
	}else{
		valUsername = true;
	}

	if(passwordRegister == "" || passwordRegister.length > 50 || passwordRegister.length < 8){
		$("#helpPasswordRegister").html("Username tidak boleh kosong, maksimal 50 karakter");
		$("#passwordRegister").addClass("text-danger");
		$("#passwordRegister").addClass("border-danger");
	}else{
		valPassword2 = true;
	}

	if(password2Register != passwordRegister){
		$("#helpPassword2Register").html("Password harus sama");
		$("#password2Register").addClass("text-danger");
		$("#password2Register").addClass("border-danger");
	}else{
		valPassword2 = true;
	}


	if(valUsernameDuplicate == false && valNama == true && valTelp == true && valUsername == true && valPassword2 == true && valPassword2 == true ){

		$.ajax({
            type: "POST",
            url: "<?= base_url('user/AuthControllerUser/register') ?>",
            data: {
                'registerName' : namaRegister,
                'registerUsername' : usernameRegister,
                'registerTelephone' : telpRegister,
                'registerPassword' : passwordRegister},
            async : true,
            dataType: "JSON",
            success: function (response) {
                if(response.success == true){
					$("#modalRegister").modal('hide');
					alertSuccess();
					$("html").scrollLeft(0);
					setTimeout(() => {
						location.reload();
					}, 1000);
                }else{
					let notifRegister = "<div class='alert alert-danger' role='alert'>"+
											"<strong>Daftar Gagal !</strong>"+
										"</div>";
                    $("#notifRegister").html(notifRegister);
                }
            }
        });

		valUsernameDuplicate == true;
		valNama = false;
		valTelp = false;
		valUsername = false;
		valPassword = false;
		valPassword2 = false;
	}

}

function openLogin(){
	$('#modalRegister').modal('hide');
	$('#modalLogin').modal('show');
}

function openRegister(){
	$('#modalLogin').modal('hide');
	$('#modalRegister').modal('show');
}

// Logout
function logout(){
	Swal.fire({
	title: 'Anda Yakin',
	text: "Mengakhiri sesi ini ?",
	icon: 'warning',
	showCancelButton: true,
	confirmButtonColor: '#3085d6',
	cancelButtonColor: '#d33',
	confirmButtonText: 'Yes, Logout'
	}).then((result) => {
	if (result.value) {
		Swal.fire(
		'Success',
		'Your has been logout.',
		'success'
		)
		$.ajax({
		type: "GET",
		url: "<?= base_url('user/AuthControllerUser/logout') ?>",
		data: "",
		success: function (response) {
			location.reload();
		}
		});
	}
	})
}

// SWEET ALERT
function alertSuccess(){
	const Toast = Swal.mixin({
	toast: false,
	position: 'center-center',
	showConfirmButton: true, 
	timer: 1500,
	timerProgressBar: false,
	onOpen: (toast) => {
		toast.addEventListener('mouseenter', Swal.stopTimer)
		toast.addEventListener('mouseleave', Swal.resumeTimer)
	}
	})

	Toast.fire({
		icon: 'success',
		title: 'Successfully'
	})
	// DEKLARASI
	let count =0;
	let count2 =0;
}

// SWEET ALERT
function alertError(){
	const Toast = Swal.mixin({
	toast: false,
	position: 'center-center',
	showConfirmButton: true, 
	timer: 1500,
	timerProgressBar: false,
	onOpen: (toast) => {
		toast.addEventListener('mouseenter', Swal.stopTimer)
		toast.addEventListener('mouseleave', Swal.resumeTimer)
	}
	})

	Toast.fire({
		icon: 'error',
		title: 'Error'
	})
	// DEKLARASI
	let count =0;
	let count2 =0;
}
</script>