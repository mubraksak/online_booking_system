<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Kit by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">


<?php if ($this->session->flashdata('success')) : ?>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    showNotification("top", "center", " <?php echo $this->session->flashdata('success'); ?>", "info", "ui-1_check");
                }, false);
            </script>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')) : ?>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    showNotification("top", "center", " <?php echo $this->session->flashdata('error'); ?>", "danger", "travel_info");
                }, false);
            </script>
        <?php endif; ?>


 <?php $this->load->view('nav/nav');  ?>

  <div class="page-header header-filter" style="background-image: url('<?php echo base_url(); ?>assets/img/kid3.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
          <?php echo form_open('Home/login/', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Login</h4>
                <!-- <div class="social-line">
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </div> -->
              </div>
              <p class="description text-center">Login With Your email</p>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="text" class="form-control"  name="email" placeholder="Username...">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" name="password" placeholder="Password...">
                </div>
              </div>
              <br><br><br><br><br>
              <div class="footer text-center">
                <input  type='submit' name='submit'  class="btn btn-primary btn-lg  "></a>

               <p class="text-primary"> you don't have an account<a href="<?php echo base_url(); ?>Home/sign_up" class="text-info"> sign-up now </a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
    <?php $this->load->view('nav/footer_nav')  ?>
