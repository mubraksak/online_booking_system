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

  <div class="page-header header-filter" style="background-image: url('<?php echo base_url(); ?>assets/img/yankari/yankarigre.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
          <?php echo form_open('homepage/login/', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">book a safari ticket</h4>
              </div>
              <p class="description text-center">welcome to yankari game reserve home of</p>
              <div class="card-body">
            <div class="row">

            <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <select class="form-control form-dropdown">
                  <option>choose an item</option>
                  <option>hotels</option>
                  <option>resturants</option>
                  <option>game reserve</option>
                  <option>spring water</option>
                  <option>caves</option>
                  </select>
                </div>
                </div>
                
                <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <select class="form-control form-dropdown">
                  <option>category</option>
                  <option>hotels</option>
                  <option>resturants</option>
                  <option>game reserve</option>
                  <option>spring water</option>
                  <option>caves</option>
                  </select>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <select class="form-control form-dropdown">
                  <option>number of kids</option>
                  <option>hotels</option>
                  <option>resturants</option>
                  <option>game reserve</option>
                  <option>spring water</option>
                  <option>caves</option>
                  </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <select class="form-control form-dropdown">
                  <option>number of adults</option>
                  <option>hotels</option>
                  <option>resturants</option>
                  <option>game reserve</option>
                  <option>spring water</option>
                  <option>caves</option>
                  </select>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                 <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="date" class="form-control" name="username" placeholder="Username...">
                </div>
                </div>
                <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="date" class="form-control" name="username" placeholder="Username...">
                </div>
               </div>
               </div>
               </div>
              <br><br><br>
              <div class="footer text-center">
                <input  type='submit' name='submit'  class="btn btn-primary btn-lg  "></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
    <?php $this->load->view('nav/footer_nav')  ?>