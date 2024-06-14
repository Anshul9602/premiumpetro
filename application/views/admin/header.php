<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo (base_url() . "assets/img/apple-icon.png") ?>">
  <link rel="icon" type="image/png" href="<?php echo (base_url() . "assets/img/favicon.png") ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Premium Petro
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->





  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="<?php echo (base_url() . "assets/css/material-dashboard.css?v=2.1.2") ?>" rel="stylesheet" />
  <script src="<?php echo (base_url() . "assets/js/core/jquery.min.js") ?>"></script>


  <!-- include summernote css/js -->


  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <link href="<?php echo (base_url() . "css/magnific-popup.css") ?>" rel="stylesheet" />


  <link href="<?php echo (base_url() . "stylesheet/helper.css") ?>" rel="stylesheet" />
  <link href="<?php echo (base_url() . "stylesheet/style.css") ?>" rel="stylesheet" />
  <style>
    .main-panel>.content {
      margin-top: 30px;
    }
    .card [class*="card-header-"] .card-title+.card-category{
        color: rgba(255, 255, 255, 1);
    font-size: 14px;
    font-weight: 400;
    }

    .card .card-header .card-title {
    margin-bottom: 3px;
    font-weight: 400;
}

.card-header.card-header-info{
    margin:0px;
}
.bmd-form-group:not(.has-success):not(.has-danger) [class^='bmd-label'].bmd-label-floating, .bmd-form-group:not(.has-success):not(.has-danger) [class*=' bmd-label'].bmd-label-floating{
    color:#333;
}
  </style>




</head>

<body class="">


  <div class="wrapper">
    <div class="sidebar" data-color="azure" data-background-color="white" data-image="">
      <div class="logo p-3 text-center">
        <img src="<?php echo base_url() ?>images/logo3.png" alt="" style="width: 150px;">
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <!-- <li class="nav-item <?php if (strtolower($this->uri->segment(1)) == "dashboard" && $this->uri->segment(2) == '') {
                                echo "active";
                              } ?>  ">
            <a class="nav-link" href="<?php echo (base_url() . 'dashboard/posts'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li> -->

          <li class="nav-item <?php if (strtolower($this->uri->segment(1)) == "dashboard" && strtolower($this->uri->segment(2)) == "posts") {
                                echo "active";
                              } ?> ">
            <a class="nav-link" href="<?php echo (base_url() . 'dashboard/posts'); ?>">
              <i class="material-icons">description</i>
              <p>Posts</p>
            </a>
          </li>

          <li class="nav-item <?php if (strtolower($this->uri->segment(1)) == "dashboard" && strtolower($this->uri->segment(2)) == "rates") {
                                echo "active";
                              } ?> ">
            <a class="nav-link" href="<?php echo (base_url() . 'dashboard/rates'); ?>">
              <i class="material-icons">paid</i>
              <p>Rates</p>
            </a>
          </li>

          <li class="nav-item <?php if (strtolower($this->uri->segment(1)) == "dashboard" && strtolower($this->uri->segment(2)) == "clients") {
                                echo "active";
                              } ?> ">
            <a class="nav-link" href="<?php echo (base_url() . 'dashboard/clients'); ?>">
              <i class="material-icons">face</i>
              <p>Clients</p>
            </a>
          </li>

          <li class="nav-item <?php if (strtolower($this->uri->segment(1)) == "dashboard" && strtolower($this->uri->segment(2)) == "gallery") {
                                echo "active";
                              } ?> ">
            <a class="nav-link" href="<?php echo (base_url() . 'dashboard/gallery'); ?>">
              <i class="material-icons">camera</i>
              <p>Gallery</p>
            </a>
          </li>


          <li class="nav-item ">
            <hr>
            <a class="nav-link" href="<?php echo (base_url() . 'admin/logout'); ?>">
              <i class="material-icons">login</i>
              <p>Logout</p>
            </a>
          </li>

        </ul>
      </div>
    </div>

    <div class="main-panel">
