
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
  <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="profile-page sidebar-collapse">
<?php $this->load->view('nav/nav');  ?>

  <div class="page-header header-filter" data-parallax="true" style="background-image: url('<?php echo base_url(); ?>assets/img/yankari/yankariaf.jpg');"></div>


  <div class="main main-raised">
    <div class="profile-content">
      <div class="container section text-center">
        
      <?php echo form_open('Home/User_registration/', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>
        <h2 class="title">YANKARI GAME RESERVE</h2>
        <h3 class="title">signup form  </h3>
          <div class="row">
            <div class="col-md-6">
              <input type="text" class="form-control" name="fullname" placeholder="Full Name">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" name="phone" placeholder="Phone">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" name="contact_address" placeholder="Contaact Address">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" name="age" placeholder="age">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" name="gender" placeholder="gender">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" name="password" placeholder="password">
            </div>
            <div class="col-md-6">
            </div>
            <br><br>
            <div class="col-md-12">
          <button class="btn btn-primary">sign up</button>
            </div>

            </div>
          </form>


      </div>
    </div>
  </div>
       
  <footer class="footer footer-default">
  <?php $this->load->view('nav/footer_nav')  ?>