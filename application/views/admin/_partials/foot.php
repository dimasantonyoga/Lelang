    <!-- ===== LOAD MODAL ===== -->
    <?php $this->load->view('admin/_partials/modal');?>
    <!-- ===== END MODAL ===== -->


    <!-- ===== LOAD EXTERNAL JS ===== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="<?= base_url('assets/js/anime.min.js') ?>"></script>
    <!-- ===== END EXTERNAL JS ===== -->

    <script>
    // SETTING SIDEBAR
    $("#sidebar-button").hide();
    $(".sidebar-dropdown > a").click(function() {
      $(".sidebar-submenu").slideUp(200);
      if (
        $(this)
          .parent()
          .hasClass("active")
      ) {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
          .parent()
          .removeClass("active");
      } else {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
          .next(".sidebar-submenu")
          .slideDown(200);
        $(this)
          .parent()
          .addClass("active");
      }
    });

    $("#sidebar-button").click(function() {
        $(".page-wrapper").addClass("toggled");
        $(".page-content").removeClass("pt-0");
        $("#sidebar-button").hide();
        $("#close-sidebar").show();
    });
    $("#close-sidebar").click(function() {
      $("#close-sidebar").hide();
      $(".page-wrapper").removeClass("toggled");
      $(".page-content").addClass("pt-0");
      $("#sidebar-button").show();
    });


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
        let usernameEdit=""; //Digunakan untuk validasi username edit data
        let registeruss="";
        let registerussadd ="";
        
    }

    // Count Animation
    function animasiCount(){
      $('.countAnim').each(function () {
          $(this).prop('Counter',0).animate({
              Counter: $(this).text()
          }, {
              duration: 1000,
              easing: 'swing',
              step: function (now) {
                  $(this).text(Math.ceil(now));
              }
          });
      });
    }

    </script>