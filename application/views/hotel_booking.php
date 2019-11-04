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



    <div class="card card-nav-tabs">
                <div class="card-header card-header-primary">
                  <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons"></i> booking details
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons"></i> user details
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons"></i> terms & conditions
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body ">
              <div class="tab-content text-center">
              <div class="tab-pane active" id="profile">  
              <?php echo form_open('Booking/book_hotel/','Booking/add_user', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>
              <p class="description text-center">welcome to yankari game reserve home of</p>
              <div class="card-body">
              <?php 
                 $booking_number = rand("10000000", "99999999")  
                 ?>
                <input name="booking_number" class="form-control" value="<?php echo $booking_number ?>" />
                <div class="row">

                <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <select name="product_name" class="form-control form-dropdown">
                  <option disable>select an item</option>
                  <option value="Student hostel">student hostel</option>
                  <option value="studio suite">studio suite </option>
                  <option value="luxury double">luxury Double</option>
                  <option value="vip room">Vip Room</option>
                  <option value="corprate villa (single room)">corporate villa (single room)</option>
                  <option value="marshal suite">Marshal suite</option>
                  <option value="corprate villa (master bed room)">corporate villa (Master bed room)</option>
                  <option value="corprate villa (complete)">corporate villa (complete)</option>
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
                  <select name="num_user" class="form-control form-dropdown">
                  <option >number of people</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
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
                  <input type="date" class="form-control datetimepicker" name="checkin_date" placeholder="date...">
                 
                </div>
                </div>
                <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="date" class="form-control datetimepicker" name="checkout_date" placeholder="date...">
                </div>
               </div>
               </div>
               </div>
              <br><br><br>
                    </div>
                    <div class="tab-pane" id="messages">

                <div class="row">
                <div class="col-md-6">
                 <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" class="form-control datetimepicker" name="fullname" placeholder="fullname">
                </div>
                </div>

                <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" class="form-control datetimepicker" name="gender" placeholder="gender...">
                </div>
               </div>
               </div>

               <div class="row">
                <div class="col-md-6">
                 <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">address</i>
                    </span>
                  </div>
                  <input type="text" class="form-control datetimepicker" name="address" placeholder="address...">
                 
                </div>
                </div>
                <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">phone</i>
                    </span>
                  </div>
                  <input type="text" class="form-control datetimepicker" name="phone" placeholder="phone number...">
                </div>
                </div>
               </div>

               <div class="row">
                <div class="col-md-6">
                 <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">email</i>
                    </span>
                  </div>
                  <input type="text" class="form-control datetimepicker" name="email" placeholder="email...">
                 
                </div>
                </div>
                
               </div>


              <br><br><br>

                    </div>
                    <div class="tab-pane" id="settings">
                      <p>I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it&#x2019;s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                    <input class="form-group" type="checkbox" name="agree" />agree with terms and conditins
                    <br><br><br>
                    </div>
                  </div>
                </div>

                <!-- form close submit button -->
                <div class="footer text-center">
                <input  type='submit' name='submit'  class="btn btn-primary btn-lg  "></a>
              </div>
              <?php form_close(); ?>  

              </div>
              <!-- End Tabs with icons on Card -->
            </div>
              </div>
              </div>

             


    <footer class="footer">
    <?php $this->load->view('nav/footer_nav')  ?>