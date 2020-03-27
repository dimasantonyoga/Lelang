<!-- ===== LOAD HEAD =====-->
<?php $this->load->view('admin/_partials/head');?>
<!-- ===== END HEAD =====-->


<!-- ===== START BODY =====  -->
<body>

  <!-- ===== PAGE WRAPPER ===== -->
  <div class="page-wrapper chiller-theme toggled">


    <!-- ===== LOAD SIDEBAR ===== -->
    <?php $this->load->view('admin/_partials/sidebar');?>
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
                      viewBox="0 0 172 172" class="w-75 w-sm-25"
                      style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill=""></path><g fill="#ffffff"><path d="M86,21.5c-15.83216,0 -28.66667,12.8345 -28.66667,28.66667c0,15.83216 12.8345,28.66667 28.66667,28.66667c15.83216,0 28.66667,-12.8345 28.66667,-28.66667c0,-15.83216 -12.8345,-28.66667 -28.66667,-28.66667zM86,100.33333c-21.52867,0 -64.5,10.80733 -64.5,32.25v10.75c0,3.956 3.21067,7.16667 7.16667,7.16667h114.66667c3.956,0 7.16667,-3.21067 7.16667,-7.16667v-10.75c0,-21.44267 -42.97133,-32.25 -64.5,-32.25z"></path></g></g>
                    </svg>
                    <!-- ===== END ICON ===== -->
                  </div>
                  <div class="col-lg-6">
                    <!-- ===== TITLE ===== -->
                    <h4 class="card-title text-center"> User
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
                      style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill=""></path><g fill="#ffffff"><path d="M71.66667,21.5c-3.95788,0.0004 -7.16627,3.20879 -7.16667,7.16667v28.66667c0.0004,3.95788 3.20879,7.16627 7.16667,7.16667h7.16667v14.33333h-35.83333c-3.95788,0.0004 -7.16627,3.20879 -7.16667,7.16667v21.5h-7.16667c-3.95788,0.0004 -7.16627,3.20879 -7.16667,7.16667v28.66667c0.0004,3.95788 3.20879,7.16627 7.16667,7.16667h28.66667c3.95788,-0.0004 7.16627,-3.20879 7.16667,-7.16667v-28.66667c-0.0004,-3.95788 -3.20879,-7.16627 -7.16667,-7.16667h-7.16667v-14.33333h34.62956c0.77394,0.12792 1.56363,0.12792 2.33757,0h34.69955v14.33333h-7.16667c-3.95788,0.0004 -7.16627,3.20879 -7.16667,7.16667v28.66667c0.0004,3.95788 3.20879,7.16627 7.16667,7.16667h28.66667c3.95788,-0.0004 7.16627,-3.20879 7.16667,-7.16667v-28.66667c-0.0004,-3.95788 -3.20879,-7.16627 -7.16667,-7.16667h-7.16667v-21.5c-0.0004,-3.95788 -3.20879,-7.16627 -7.16667,-7.16667h-35.83333v-14.33333h7.16667c3.95788,-0.0004 7.16627,-3.20879 7.16667,-7.16667v-28.66667c-0.0004,-3.95788 -3.20879,-7.16627 -7.16667,-7.16667zM78.83333,35.83333h14.33333v14.33333h-6.06087c-0.4024,-0.06726 -0.8098,-0.10004 -1.21777,-0.09798c-0.34719,0.00752 -0.69337,0.04027 -1.03581,0.09798h-6.01888zM35.83333,121.83333h14.33333v14.33333h-14.33333zM121.83333,121.83333h14.33333v14.33333h-14.33333z"></path></g></g>
                    </svg>
                    <!-- ===== END ICON ===== -->
                    </div>
                    <div class="col-lg-6">
                      <!-- ===== TITLE ===== -->
                      <h4 class="card-title text-center"> Officer
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
                      <h4 class="card-title text-center"> Product
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
            <figure class="highcharts-figure shadow w-100">
              <div id="container" class="w-100"></div>
            </figure>
          </div>
          <!-- ===== END CHART ===== -->
          <!-- ===== Aktifitas ===== -->
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="bg-white shadow rounded pb-3" style="min-height:400px; max-height:401px; overflow:auto;">
              <div class="container">
                <p class="pt-3 pb-2 px-2 mb-2" style="font-size:18px;">
                  Team Activity
                </p>
                <hr class="w-100 mb-2" style="border:1px solid #E0E0E0;margin:0" >
                <div id="activity">

                </div>
              </div>
            </div>
          </div>
          <!-- ===== End Aktifitas ===== -->
        </div>
      </div>
    </main>
    <!-- ===== END PAGE CONTENT ===== -->


  </div>
  <!-- ===== END WRAPPER ===== -->


  <!-- ===== LOAD FOOT ===== -->
  <?php $this->load->view('admin/_partials/foot');?>
  <!-- ===== END FOOT ===== -->


  <!-- ===== START JAVASCRIPT ===== -->
  <script>
      $(document).ready(function () {
          //Deklarasi
          let count=0;
          let count2=0;

          // Build the chart
          function chart(dataChart){
            Highcharts.chart('container', {
              chart: {
                  plotBackgroundColor: null,
                  plotBorderWidth: null,
                  plotShadow: false,
                  type: 'pie',
              },
              credits: {
                  enabled: false  
              },
              title: {
                  text: 'Product Data'
              },
              tooltip: {
                  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b> , Total : <b> {point.y} Barang </b>'
              },
              accessibility: {
                  point: {
                      valueSuffix: '%'
                  }
              },
              plotOptions: {
                  pie: {
                      allowPointSelect: true,
                      cursor: 'pointer',
                      dataLabels: {
                          enabled: true
                      },
                      showInLegend: true
                  }
              },
              series: [{
                  name: 'Presentase',
                  colorByPoint: true,
                  data: [{
                      name: 'Draft',
                      y: dataChart[0],
                      color:'orange'

                  },
                  {
                      name: 'Coming Soon',
                      y: dataChart[1],
                      color:'green'

                  },
                   {
                      name: 'Opened',
                      y: dataChart[2],
                      sliced: true,
                      selected: true,
                      color:'blue'
                  }, {
                      name: 'Closed Down',
                      y: dataChart[3],
                      color:'red'
                  }]
              }]
          }); 
          }

          // GET DATA SIDEBAR + DATA DASHBOARD
          function all(){
              $.ajax({
                  type: "GET",
                  url: "<?= base_url('admin/DashboardControllerAdmin/getData') ?>",
                  data: "",
                  dataType: "JSON",
                  success: function (response) {
                    let dataChart = [response.ChartDraf,response.ChartComing,response.ChartOpen,response.ChartClosed];
                    
                    // Chart                    
                    chart(dataChart);
                    let html="";
                    $('#user').html(response.user);
                    $('#officer').html(response.officer);
                    $('#product').html(response.product);
                    $('#name').html(response.name);
                    $('#level').html(response.level);
                    $('#user').addClass('countAnim');
                    $('#officer').addClass('countAnim');
                    $('#product').addClass('countAnim');

                    for(let i = 0; i < response.activity.length; i++){
                      let button="";
                      if(response.activity[i].nama_aktifitas == 'DELETE'){
                        button = "<span class='text-danger' style='color:#8A8A8A'> <b>Delete</b> </span>";
                      }else if(response.activity[i].nama_aktifitas == 'CREATE'){
                        button = "<span class='text-success' style='color:#8A8A8A'> <b>Add</b> </span>";
                      }else if(response.activity[i].nama_aktifitas == 'UPDATE'){
                        button = "<span class='text-info' style='color:#8A8A8A'> <b>Update</b> </span>";
                      }

                      if((i+1) != response.activity.length){
                        border = "<div class='col-lg-10 col-md-10 col-sm-10 py-2 pr-0' style='border-bottom:1px solid #E0E0E0'>";
                      }else{
                        border = "<div class='col-lg-10 col-md-10 col-sm-10 py-2 pr-0'>";
                      }
                      html += "<div class='row container px-0 basic-timeline datake"+i+"' style='margin-left:-300px'>"+
                                "<div class='col-lg-2 col-sm-2 col-md-2 px-0 py-2'>"+
                                  "<img class='w-100 rounded-circle' src='http://optima.trendsetterthemes.org/assets/images/face3.jpg' alt=''>"+
                                "</div>"+
                                border+
                                  "<b>"+response.activity[i].nama_petugas+"</b> <br>"+
                                  button+"Data in table "+
                                  response.activity[i].nama_tabel+
                                  "<br>"+
                                  "<b class='pl-auto' style='font-size:11px;'>"+response.activity[i].create_at+"</b>"+
                                "</div>"+
                              "</div>";
                    }
                    $('#activity').html(html);
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
                url: "<?= base_url('admin/DashboardControllerAdmin/checkActivity') ?>",
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
                  url: "<?= base_url('admin/DashboardControllerAdmin/checkActivity') ?>",
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
