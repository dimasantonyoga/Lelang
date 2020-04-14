<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- ===== Bootstrap CSS ===== -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- ===== FONT AWESOME CSS ===== -->
    <!-- <link rel="stylesheet" > -->
    <!-- Select 2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <!-- select2-bootstrap4-theme -->
    <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- ===== CUSTOM CSS ===== -->
    <style>
      body{
        background:#ECF0F5;
      }
      .highcharts-figure, .highcharts-data-table table {
      min-width: 100%; 
      width: 100%;
    
      }

      /* Animasi UP DOWN */
      .vert-move {
        -webkit-animation: mover 0.9s infinite  alternate;
        animation: mover 0.9s infinite  alternate;
      }
      .vert-move {
        -webkit-animation: mover 0.9s infinite  alternate;
        animation: mover 0.9s infinite  alternate;
      }
      @-webkit-keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-8px); }
      }
      @keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-8px); }
      }

      .arrow {
        color:#CED4DA;
        cursor: pointer;
      }

      .arrow:hover {
        color:#6C757D;
      }

      /*------------------------------ vertical bootstrap slider----------------------------*/
      .carousel-inner> .carousel-item.carousel-item-next ,
      .carousel-inner > .carousel-item.active.carousel-item-right{ 
          transform: translate3d(0, 100%, 0); -webkit-transform: translate3d(0, 100%, 0); -ms-transform: translate3d(0, 100%, 0); -moz-transform: translate3d(0, 100%, 0); -o-transform: translate3d(0, 100%, 0);  top: 0;
          
      }
      .carousel-inner > .carousel-item.carousel-item-prev ,
      .carousel-inner > .carousel-item.active.carousel-item-left{ 
          transform: translate3d(0,-100%, 0); -webkit-transform: translate3d(0,-100%, 0);  -moz-transform: translate3d(0,-100%, 0);-ms-transform: translate3d(0,-100%, 0); -o-transform: translate3d(0,-100%, 0); top: 0;
          
      }
      .carousel-inner > .carousel-item.next.carousel-item-left ,
      .carousel-inner > .carousel-item.carousel-item-prev.carousel-item-right ,
      .carousel-inner > .carousel-item.active{
          transform:translate3d(0,0,0); -webkit-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);; -moz-transform:translate3d(0,0,0); -o-transform:translate3d(0,0,0); top:0;
          
      }

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

.form-control:focus {
  box-shadow : none;
  border: 1px solid #ced4da;
}
    </style>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  </head>