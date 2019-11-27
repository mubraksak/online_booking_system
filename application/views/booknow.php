
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
               
                
            </div>
            <div>
             <h2>or track your previous  booking</h2>  
             <form>
                 <input type="text" name="booking_id" placeholder="enter your booking id" />
                 <button class="btn btn-nuetral"> submit </button>
            </form>
            </div>

         </div> 
        </div>
      </div>
    </div>
  </div>




  <div class="main main-raised">
            <div class="container">
              <div class="section text-center">

               <form action="<?php echo base_url(); ?>Booking/checkout/<?php echo $product->product_id; ?>/<?php echo $user->user_id; ?>" class="form-horizontal form-groups-bordered validate" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <div class="col-10 offset-1 col-lg-8 offset-lg-2 card container">
                        <div class="row">
                           
                            <img class="col-sm-12 col-lg-3" src="<?php echo base_url() ?>assets/img/yankari/yankaribg.jpg" alt="" width="100%" height="150">
                            <div class="col-sm-12 col-lg-3">
                                <div class="row text-center" style="vertical-align: central;">
                                    <div class="col-4 col-lg-12">
                                      
                                    </div>
                                </div>
                            </div>
                            <div class=" col-sm-12 col-lg-3">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h5 class="h5 text-center">
                                            <?php echo $product->product_name; ?>                                    
                                         </h5>
                                    </div>
                                    <div class="col-6 col-lg-12 h5 text-center">
                                        category:                                     
                                    <text class="text-danger" ><?php echo $product->product_category;  ?></text>
                                    </div>
                                    <div class="col-6 h5 col-lg-12 text-center">
                                        <span class="text-primary text-center">
                                          <?php echo '₦'. $product->product_price ?>                                       
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center col-sm-12 col-lg-3"><br>
                                <div class="row">
                                    <div class="col-6 col-lg-12 text-center">
                                        <span class="text-muted text-center">
                                            Total Price:
                                        </span>
                                    </div>
                                    <div class="col-6 col-lg-12">
                                        <h5 class="text-info text-center" id="total_price">
                                        <?php echo '₦'. $product->product_price ?>                                        
                                        </h5>
                                    </div>
                                    <div class="col-6 col-lg-12 text-center">
                                        <span class="text-muted text-center">
                                        Rooms Number:
                                        </span>
                                    </div>
                                    <div class="col-6 col-lg-12 h5 text-center">
                                        <text id="total_quantity"><?php echo $product->room_number ?></text>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-info">
                            Checkout
                            <i class="now-ui-icons ui-1_send"></i>
                        </button>
                    </div>
                    </form>
                  
              </div>
            </div>
          </div>
  
  <footer class="footer footer-default">
  <?php $this->load->view('nav/footer_nav')  ?>
