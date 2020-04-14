<!doctype html>
<html lang="en">
  <?php $this->session->set_userdata("halaman","pemenang") ?>
  <?php $this->load->view('user/_partials/head'); ?>
  <body style="color:#495057">
    <section class="banner-one-detail">
        <?php $this->load->view('user/_partials/navbar'); ?>
        <h1 class="text-white py-5 text-center w-100">Konfirmasi Pembayaran</h1> 
        <div class="bg-white d-flex justify-content-center px-lg-4 py-5 px-md-5 text-left h-100" style="border-top-left-radius:20px;border-top-right-radius:20px;margin-top: 2rem!important;border-top:5px solid orange;" >
            <div class="col-lg-5 col-sm-9">
                <div class="form-group">
                <label for="">Nama Pemilik Rekening (transfer)</label>
                <input type="text"
                    class="form-control" name="" id="nama" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                <label for="">Tujuan Transfer Bank</label>
                <select class="form-control" name="" id="tujuan">
                </select>
                </div>
                <div class="form-group">
                <label for="">Jumlah Transfer (cth: 250000)</label>
                <input type="number"
                    class="form-control" name="" id="jumlah" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                <label for="">Tanggal Transfer</label>
                <input type="date"
                    class="form-control" name="" id="tgl" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                <label for="">No Invoice</label>
                <input type="number"
                    class="form-control" value="<?= $this->input->get('invoice') ?>" name="" id="invoice" aria-describedby="helpId" placeholder="">
                </div>
                <button type="button" id="btn-submit" class="btn btn-primary w-100 mt-3">Sumbit</button>
                <p class="text-muted mt-5">
                    <b>Harap Diperhatikan : </b> <br>
                    Pastikan anda sudah meyelesaikan pembayaran sebelum melakukan konfirmasi pembayaran.
                </p>
            </div>
        </div>
        <?php $this->load->view('user/_partials/footer'); ?>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php $this->load->view('user/_partials/js'); ?>
    <script>
        // DEKLARASI
        let count =0;
        let count2 =0;

        $("#btn-submit").click(function (e) { 
            e.preventDefault();
            let nama = $("#nama").val();
            let tujuan = $("#tujuan").val();
            let jumlah = $("#jumlah").val();
            let tgl = $("#tgl").val();
            let invoice = $("#invoice").val();
            if(nama != '' && tujuan != '' && jumlah != '' && tgl != '' && invoice != ''){
                $.ajax({
                type: "GET",
                url: "<?= base_url('user/PembayaranControllerUser/cekInvoice') ?>",
                data: {
                    invoice : invoice
                },
                dataType: "JSON",
                success: function (response) {
                    if(response.count > 0){
                        let id_user = response.all.id_user;
                        let id_pembayaran = response.all.id_checkout;
                        let id_barang = response.all.id_barang;

                        $.ajax({
                            type: "POST",
                            url: "<?= base_url('user/PembayaranControllerUser/create') ?>",
                            data: {
                                invoice : invoice,
                                id_user : id_user,
                                id_pembayaran : id_pembayaran,
                                id_barang : id_barang,
                                id_bank : tujuan,
                                pengirim : nama,
                                transfer : jumlah,
                                tgl_pembayaran : tgl,
                            },
                            dataType: "JSON",
                            success: function (response) {
                                Swal.fire(
                                'Success',
                                'Data anda telah disimpan, secepatnya akan kami proses',
                                'success'
                                )
                            }   
                        });
                    }else{
                        Swal.fire(
                        'Error',
                        'Invoice Tidak Ditemukan',
                        'error'
                        )        
                    }
                }
            });
            }else{
                Swal.fire(
                'Error',
                'Silahkan lengkapi data',
                'error'
                )
            }
            
        });

        function getData(){
            $.ajax({
                type: "GET",
                url: "<?= base_url('user/PembayaranControllerUser/getBank') ?>",
                dataType: "JSON",
                success: function (response) {
                    let option = "";
                    for (let i = 0; i < response.length; i++) {
                        option +="<option value='"+response[i].id_metode+"' > "+response[i].nama_bank+" ("+response[i].rekening+") </option>"                        
                    }
                    $("#tujuan").html(option);
                }
            });
            // GET DATA ACTIVITY
            $.ajax({
                type: "GET",
                url: "<?= base_url('HomeControllerUser/checkActivity') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    count = response; 
                }
            });
        }

        getData();

        // CHEDK DATA IN TABLE tb_aktifitas
        function checkActivity(){
            $.ajax({
                type: "GET",
                url: "<?= base_url('HomeControllerUser/checkActivity') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    count2 = response; 
                }
            });
        }

        // MAKE REALTIME DATA
        function realTime(){
            checkActivity();

            // Check data di tabel aktifitas
            if(count != count2){
                getData();
            }
            $("html").scrollLeft(0);

        }
        let interval = setInterval(realTime,500);


    </script>
  </body>
</html>