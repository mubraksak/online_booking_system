
<!doctype html>
<html lang="en">

<head>
  <title>Yankari game Reserve</title>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>assets/demo/demo.css" rel="stylesheet" />
</head>


 <?php $this->load->view('nav/nav') ?>

 <!-- main body -->
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('<?php echo base_url(); ?>assets/img/yankari/yankariaf.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ml-auto mr-auto">
          <div class="brand text-center">

            <div class="row">
                <div class="col-md-4">
                    <h1>Hotel/Hostel Booking</h1>
                    <a href="<?php echo base_url(); ?>booking/hotel_booking" class="btn btn-primary">book a Hotel/Hostel now</a>
                    </h3>  
                </div>  
                <div class="col-md-4">
                    <h1>Spring water booking</h1>
                    <a href="<?php echo base_url(); ?>booking/spring_booking" class="btn btn-primary">book for Spring now</a>
                    </h3>  
                </div>  
                <div class="col-md-4">
                    <h1>Safari tour booking</h1>
                    <a href="<?php echo base_url(); ?>booking/safari_booking" class="btn btn-primary">book for safiri tour now</a>
                    </h3>  
                </div>  
            </div>
           

         </div> 
        </div>
      </div>
    </div>
  </div>




  <div class="main main-raised">
            <div class="container">
              <div class="section text-center">
                <div class="row justify-content-center">
                <?php foreach($products as $product) : ?>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card col-12">
                        <a href="<?php echo base_url(); ?>/market/price/3">
                            <img class="img-raised" src="<?php echo base_url() ?>assets/img/yankari/yankaribg.jpg" alt="" width="100%" height="140">
                        </a>
                        &nbsp;
                        <div class="row" style="font-size: smaller;">
                        
                            <p class="col-10 text-black" style="font-weight: bold;"><?php echo $product->product_name; ?></p> 
                            <div class="col-6">
                                <p> room: <?php echo $product->room_number; ?>
                                <p>Category: <?php echo $product->product_category; ?>
                                    <a class="btn btn-sm btn-info" style="font-size: 10px;" href="<?php echo base_url(); ?>Booking/book/<?php echo $product->product_id ?>/<?php echo $user->user_id; ?>">
                                        <i class="now-ui-icons business_briefcase-24"></i>
                                        book now
                                    </a>
                            </p></div>
                            <div class="col-6 text-center"> 
                                <p class="text-center">Price:<text class="text-primary"><?php echo "₦" .$product->product_price; ?></text></p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <?php endforeach; ?>  
                </div>
                  
              </div>
            </div>
          </div>
  
  <footer class="footer footer-default">
  <?php $this->load->view('nav/footer_nav')  ?>
