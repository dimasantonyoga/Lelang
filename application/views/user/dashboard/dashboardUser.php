<!-- ===== LOAD HEAD =====-->
<?php $this->load->view('user/dashboard/_partials/head');?>
<!-- ===== END HEAD =====-->


<!-- ===== START BODY =====  -->
<body>

  <!-- ===== PAGE WRAPPER ===== -->
  <div class="page-wrapper chiller-theme toggled">


    <!-- ===== LOAD SIDEBAR ===== -->
    <?php $this->load->view('user/dashboard/_partials/sidebar');?>
    <!-- ===== END SIDEBAR ===== -->


    <!-- ===== PAGE CONTENT ===== -->
    <main class="page-content pt-0 pr-3">
      <div class="container-fluid pt-0">
        <div class="row d-flex justify-content-around">

          <!-- ===== USER CARD ===== -->
          <div class="col-lg-4 col-sm-4 col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="card text-white rounded shadow" style="background-image: linear-gradient(58deg, rgb(244, 67, 54), rgb(103, 58, 183));">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6 text-center">
                    <!-- ===== ICON ===== -->
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                      class="w-75 w-sm-25"
                      viewBox="0 0 172 172"
                      style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill=""></path><g fill="#ffffff"><path d="M25.08333,21.5c-5.92683,0 -10.75,4.82317 -10.75,10.75v32.25h7.16667v71.66667c0,7.90483 6.4285,14.33333 14.33333,14.33333h100.33333c7.90483,0 14.33333,-6.4285 14.33333,-14.33333v-71.66667h7.16667v-32.25c0,-5.92683 -4.82317,-10.75 -10.75,-10.75zM28.66667,35.83333h114.66667v14.33333h-114.66667zM35.83333,64.5h100.33333l0.014,71.66667h-100.34733zM93.16667,107.5v14.33333h28.66667v-14.33333z"></path></g></g>
                    </svg>
                    <!-- ===== END ICON ===== -->
                  </div>
                  <div class="col-lg-6">
                    <!-- ===== TITLE ===== -->
                    <h4 class="card-title text-center"> Diikuti
                    <!-- ===== END TITLE ===== -->

                    <!-- ===== VALUE ===== -->
                    <p id="user" style="font-weight:bold; font-size:55px" class="card-text">
                        0
                    </p>
                    <!-- ===== END VALUE ===== -->
                    </h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ===== END USER CARD ===== -->


          <!-- ===== OFFICER CARD ===== -->
          <div class="col-lg-4 col-sm-4 col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="card text-white rounded shadow" style="background-image: linear-gradient(58deg, rgb(0, 150, 136), rgb(103, 58, 183));">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6 text-center">
                    <!-- ===== ICON ===== -->
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                      class="w-75 w-sm-25"
                      viewBox="0 0 172 172"
                      style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill=""></path><g fill="#ffffff"><path d="M25.08333,21.5c-5.92683,0 -10.75,4.82317 -10.75,10.75v32.25h7.16667v71.66667c0,7.90483 6.4285,14.33333 14.33333,14.33333h100.33333c7.90483,0 14.33333,-6.4285 14.33333,-14.33333v-71.66667h7.16667v-32.25c0,-5.92683 -4.82317,-10.75 -10.75,-10.75zM28.66667,35.83333h114.66667v14.33333h-114.66667zM35.83333,64.5h100.33333l0.014,71.66667h-100.34733zM93.16667,107.5v14.33333h28.66667v-14.33333z"></path></g></g>
                    </svg>
                    <!-- ===== END ICON ===== -->
                    </div>
                    <div class="col-lg-6">
                      <!-- ===== TITLE ===== -->
                      <h4 class="card-title text-center"> Menang
                      <!-- ===== END TITLE ===== -->

                      <!-- ===== VALUE ===== -->
                      <p id="officer" style="font-weight:bold; font-size:55px" class="card-text">
                          0
                      </p>
                      <!-- ===== END VALUE ===== -->
                      </h4>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- ===== END OFFICER CARD ===== -->


          <!-- ===== PRODUCT CARD ===== -->
          <div class="col-lg-4 col-sm-4 col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="card text-white rounded shadow" style="background-image: linear-gradient(58deg, rgb(244, 67, 54), rgb(103, 58, 183));">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6 text-center">
                    <!-- ===== ICON ===== -->
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                      class="w-75 w-sm-25"
                      viewBox="0 0 172 172"
                      style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill=""></path><g fill="#ffffff"><path d="M25.08333,21.5c-5.92683,0 -10.75,4.82317 -10.75,10.75v32.25h7.16667v71.66667c0,7.90483 6.4285,14.33333 14.33333,14.33333h100.33333c7.90483,0 14.33333,-6.4285 14.33333,-14.33333v-71.66667h7.16667v-32.25c0,-5.92683 -4.82317,-10.75 -10.75,-10.75zM28.66667,35.83333h114.66667v14.33333h-114.66667zM35.83333,64.5h100.33333l0.014,71.66667h-100.34733zM93.16667,107.5v14.33333h28.66667v-14.33333z"></path></g></g>
                    </svg>
                    <!-- ===== END ICON ===== -->
                    </div>
                    <div class="col-lg-6">
                      <!-- ===== TITLE ===== -->
                      <h4 class="card-title text-center"> Dimiliki
                      <!-- ===== END TITLE ===== -->

                      <!-- ===== VALUE ===== -->
                      <p id="product" style="font-weight:bold; font-size:55px" class="card-text">
                          0
                      </p>
                      <!-- ===== END VALUE ===== -->
                      </h4>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- ===== END OFFICER CARD ===== -->

        </div>
        <div class="row">
          <!-- ===== CHART ===== -->
          <div class="col-lg-8 col-md-8 col-sm-12">
            <!-- <figure class="highcharts-figure shadow w-100">
              <div id="container" class="w-100"></div>
            </figure> -->
          </div>
          <!-- ===== END CHART ===== -->
          <!-- ===== Aktifitas ===== -->
          <div class="col-lg-4 col-md-4 col-sm-12">
            <!-- <div class="bg-white shadow rounded pb-3" style="min-height:400px; max-height:401px; overflow:auto;">
              <div class="container">
                <p class="pt-3 pb-2 px-2 mb-2" style="font-size:18px;">
                  Team Activity
                </p>
                <hr class="w-100 mb-2" style="border:1px solid #E0E0E0;margin:0" >
                <div id="activity">

                </div>
              </div> -->
            <!-- </div> -->
          </div>
          <!-- ===== End Aktifitas ===== -->
        </div>
      </div>
    </main>
    <!-- ===== END PAGE CONTENT ===== -->


  </div>
  <!-- ===== END WRAPPER ===== -->


  <!-- ===== LOAD FOOT ===== -->
  <?php $this->load->view('user/dashboard/_partials/foot');?>
  <!-- ===== END FOOT ===== -->


  <!-- ===== START JAVASCRIPT ===== -->
  <script>
      $(document).ready(function () {
          //Deklarasi
          let count=0;
          let count2=0;

          // Build the chart
          // function chart(dataChart){
          //   Highcharts.chart('container', {
          //     chart: {
          //         plotBackgroundColor: null,
          //         plotBorderWidth: null,
          //         plotShadow: false,
          //         type: 'pie',
          //     },
          //     credits: {
          //         enabled: false  
          //     },
          //     title: {
          //         text: 'Product Data'
          //     },
          //     tooltip: {
          //         pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b> , Total : <b> {point.y} Barang </b>'
          //     },
          //     accessibility: {
          //         point: {
          //             valueSuffix: '%'
          //         }
          //     },
          //     plotOptions: {
          //         pie: {
          //             allowPointSelect: true,
          //             cursor: 'pointer',
          //             dataLabels: {
          //                 enabled: true
          //             },
          //             showInLegend: true
          //         }
          //     },
          //     series: [{
          //         name: 'Presentase',
          //         colorByPoint: true,
          //         data: [{
          //             name: 'Draf',
          //             y: dataChart[0],
          //             color:'orange'

          //         },
          //         {
          //             name: 'Coming Soon',
          //             y: dataChart[1],
          //             color:'green'

          //         },
          //          {
          //             name: 'Opened',
          //             y: dataChart[2],
          //             sliced: true,
          //             selected: true,
          //             color:'blue'
          //         }, {
          //             name: 'Closed Down',
          //             y: dataChart[3],
          //             color:'red'
          //         }]
          //     }]
          // }); 
          // }

          // .GET DATA SIDEBAR + DATA DASHBOARD
          function all(){
              $.ajax({
                  type: "GET",
                  url: "<?= base_url('user/HomeDashboardControllerUser/getData') ?>",
                  data: "",
                  dataType: "JSON",
                  success: function (response) {
                    let dataChart = [response.ChartDraf,response.ChartComing,response.ChartOpen,response.ChartClosed];
                    
                    // Chart                    
                    // chart(dataChart);
                    let html="";
                    $('#user').html(response.diikuti);
                    $('#officer').html(response.menang);
                    $('#product').html(response.dimiliki);
                    $('#name').html(response.name);
                    $('#level').html("Masyarakat");
                    $('#user').addClass('countAnim');
                    $('#officer').addClass('countAnim');
                    $('#product').addClass('countAnim');
                    $('#fotoProfile').attr("src","<?= base_url()?>assets/img/profile/"+response.foto);
                      
                      // Animate
                      // Timeline
                      var tl = anime.timeline({
                        easing: 'easeOutExpo',
                        duration: 500
                      });

                      // Add children
                      tl
                      .add({
                        targets: '.datake0',
                        translateX: 300,
                      })
                      .add({
                        targets: '.datake1',
                        translateX: 300,
                      })
                      .add({
                        targets: '.datake2',
                        translateX: 300,
                      })
                      .add({
                        targets: '.datake3',
                        translateX: 300,
                      })
                  }
              });
              
            // GET DATA ACTIVITY
            $.ajax({
                type: "GET",
                url: "<?= base_url('user/HomeDashboardControllerUser/checkActivity') ?>",
                data: "",
                dataType: "JSON",
                success: function (response) {
                  count = response; 
                }
            });
          }

          // CALL FUNCTION
          all();
          checkActivity();


          // CHEDK DATA IN TABLE tb_aktifitas
          function checkActivity(){
              $.ajax({
                  type: "GET",
                  url: "<?= base_url('user/HomeDashboardControllerUser/checkActivity') ?>",
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
            console.log(count);
            // Check data di tabel aktifitas
            if(count != count2){
                all();
            }

            // ONLINE CHECK
            let status="";
            if(navigator.onLine) {
                status ="<i class='fa fa-circle'></i>"+
                        "<span>Online</span>";
                $('.user-status').html(status);
            }else{
                status ="<i class='fa fa-circle text-secondary'></i>"+
                        "<span>Offline</span>";
                $('.user-status').html(status);
            }
          }
          let interval = setInterval(realTime,500);

      });
  </script>
  <!-- ===== END JAVASCRIPT ===== -->

</body>
<!-- ===== END BODY =====  -->


</html>
