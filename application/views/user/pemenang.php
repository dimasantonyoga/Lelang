<!doctype html>
<html lang="en">
  <?php $this->session->set_userdata("halaman","pemenang") ?>
  <?php $this->load->view('user/_partials/head'); ?>
  <body style="color:#495057">
    <section class="banner-one-detail">
        <?php $this->load->view('user/_partials/navbar'); ?>
        <h1 class="text-white py-5 text-center w-100">Pemenang Lelang</h1> 
        <div class="bg-white px-lg-4 py-5 px-md-5 text-left h-100" style="border-top-left-radius:20px;border-top-right-radius:20px;margin-top: 2rem!important;border-top:5px solid orange;" >
            <div class="container py-5" style="overflow:auto">
                <table class="tablePemenang table table-striped table-bordered dataTable">
                
                </table>
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

        function getData(){

            let html = "";
            let head = "<thead>"+
                            "<tr>"+
                                "<th class='text-center align-middle' rowspan='2'>No</th>"+
                                "<th colspan='3' class='text-center' >Data Pemenang</th>"+
                                "<th colspan='5' class='text-center' >Data Lelang</th>"+
                            "</tr>"+
                            "<tr>"+
                                "<th>Photo</th>"+
                                "<th>Nama</th>"+
                                "<th>Nomor Telephone</th>"+
                                "<th>Photo</th>"+
                                "<th>Nama Produk</th>"+
                                "<th>Harga Awal</th>"+
                                "<th>Harga Akhir</th>"+
                                "<th>Tgl Ditutup</th>"+
                            "</tr>"+
                        "</thead>"+
                        "<tbody>";
                footer ="</tbody>"+
                        "<tfoot>"+
                            "<tr>"+
                                "<th>No</th>"+
                                "<th>Photo</th>"+
                                "<th>Nama</th>"+
                                "<th>Nomor Telephone</th>"+
                                "<th>Photo</th>"+
                                "<th>Nama Produk</th>"+
                                "<th>Harga Awal</th>"+
                                "<th>Harga Akhir</th>"+
                                "<th>Tgl Ditutup</th>"+
                            "</tr>"+
                        "</tfoot>";
            $.ajax({
                type: "GET",
                url: ci_base+"user/PemenangControllerUser/getData",
                dataType: "JSON",
                success: function (response) {
                    for (let i = 0; i < response.length; i++) {                        
                        let dataTelp = response[i].telp
                        let tlp_length = response[i].telp.length;
                        let tlp_per3 = (tlp_length*0.44).toFixed(0);
                        let bintang = "";
                        let akhir = tlp_per3*2;
                        for (let index = 0; index < tlp_per3; index++) {
                            bintang += "*";
                        }
                        let tlp = dataTelp.substring(0,tlp_per3)+bintang+dataTelp.substring(akhir);
                        html+=  "<tr onclick='window.location.href = `<?= base_url(); ?>produk/detail?prdk="+response[i].id_barang+"&&nm="+url_set(response[i].nama_barang)+"`;' style='cursor:pointer'>"+
                                    "<td class='align-middle text-center'>"+ ((i)+1) +"</td>"+
                                    "<td class='align-middle text-center'><img width='100' class='rounded-circle img-thumbnail' src='<?= base_url('assets/img/profile/') ?>"+response[i].foto_user+"' alt='"+response[i].foto_user+"'></td>"+
                                    "<td class='align-middle text-center'>"+response[i].nama_lengkap+"</td>"+
                                    "<td class='align-middle text-center'>"+tlp+"</td>"+
                                    "<td class='align-middle text-center'><img width='100' class='rounded img-thumbnail' src='<?= base_url('assets/img/produk/') ?>"+response[i].foto+"' alt='"+response[i].foto+"'></td>"+
                                    "<td class='align-middle text-center'>"+response[i].nama_barang+"</td>"+
                                    "<td class='align-middle text-center'>"+formatRupiah(response[i].harga_awal,"Rp. ")+"</td>"+
                                    "<td class='align-middle text-center'>"+formatRupiah(response[i].tawaran,"Rp. ")+"</td>"+
                                    "<td class='align-middle text-center'>"+response[i].tgl_ditutup+"</td>"+
                                "</tr>";
                    }
                    let tb = head+html+footer;
                    $(".tablePemenang").html(tb);
                    $('.tablePemenang').DataTable();
                    $(".tablePemenang").addClass("table-responsive");
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