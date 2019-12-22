
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
  <link href="<?php echo base_url(); ?>assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
  <!-- CSS Files -->
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>assets/demo/demo.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/now-ui-dashboard.css" rel="stylesheet" />

  <script type="text/javascript">
            function hide(id) {
                document.getElementById("body_" + id).style.display = "none";
                document.getElementById("edit_" + id).style.display = "block";
                document.getElementById("icon_" + id).style.background = "lime";
                if (id === 1) {
                    document.getElementById("add_address_link").style.display = "none";
                    document.getElementById("body_2").style.display = "block";
                }  else {
                    document.getElementById("finish_btn").removeAttribute("disabled");
            }
		}
            function unhide(id) {
                if (id === 1) {
                    document.getElementById("add_address_link").style.display = "block";
                    document.getElementById("body_1").style.display = "block";
                    document.getElementById("body_2").style.display = "none";
                    document.getElementById("icon_1").style.background = "lightgray";
                    document.getElementById("icon_2").style.background = "lightgray";
                    document.getElementById("edit_1").style.display = "none";
                    document.getElementById("edit_2").style.display = "none";
                    document.getElementById("finish_btn").setAttribute("disabled", true);
                } else if (id === 2) {
                    document.getElementById("body_2").style.display = "block";
                    document.getElementById("icon_2").style.background = "lightgray";
                    document.getElementById("edit_2").style.display = "none";
                    document.getElementById("finish_btn").setAttribute("disabled", true);
                } else {
                    document.getElementById("body_3").style.display = "block";
                    document.getElementById("icon_3").style.background = "lightgray";
                    document.getElementById("edit_3").style.display = "none";
                    document.getElementById("finish_btn").setAttribute("disabled", true);
                }
            }
            function submitOrder() {
                if (document.getElementById("payment_card").checked) {
                    payWithPayant();
                } else {
                    $('#order_form').submit();
				}
            }
        </script>
</head>


 <?php $this->load->view('nav/nav') ?>

 <!-- main body -->
      <div class="page-header header-filter" data-parallax="true" style="background-image: url('<?php echo base_url(); ?>assets/img/yankari/yankariaf.jpg');"></div>
  <div class="main main-raised">
            <div class="container">
              <div class="section text-center">
              <div class="main" >
                <form action="<?php echo base_url(); ?>/Booking/order/<?php echo $product->product_id ?>/<?php echo $user->user_id ?>" class="form-horizontal validate" id="order_form" method="post" accept-charset="utf-8">

                <?php $booking_number = uniqid() ?>
                <input name="booking_number" value="<?php echo $booking_number; ?>" hidden >
                <input name="product" value="<?php echo $product->product_id; ?>" hidden >
                <input name="status" value="<?php echo "1"; ?>" hidden >
                <input name="user" value="<?php echo $user->user_id; ?>" hidden >



                <div class="row">
                    <div class="col-12"><br></div>
                    <div class="col-12"><br></div>
                    <div class="col-12"><br><input type="text" value="" id="reference_code" name="reference_code" hidden=""></div>
                    <div class="offset-lg-1 col-lg-6 col-12">
                        <h4 class="col-12 h4 text-center text-info">Checkout</h4>
                        <div class="col-12 col-lg-10 offset-lg-2 card">
                            <div class="row">
                                <!-- Header 1 -->
                                <div class="col-12"><br>
                                    <div class="row">
                                        <div>
                                            <i id="icon_1" class="col-12 now-ui-icons ui-1_check" style="color: white; background-color: lightgray; border-radius: 20px; padding: 3px"></i>
                                        </div>
                                        <div class="col-8">1. USER/VISITOR DETAILS</div>
                                        <a id="add_address_link" data-toggle="modal" data-target="#add_address_modal" class="col-3 text-primary text-right justify-content-end" href="#">
                                            <!-- <i class="now-ui-icons ui-1_simple-add"></i> Add -->
                                        </a>
                                        <a id="edit_1" onclick="unhide(1)" href="#" style="display: none">
                                            <i class="now-ui-icons ui-2_settings-90"></i> Edit
                                        </a>
                                    </div>
                                    <hr>
                                </div>
                                <!-- Body 1 -->
                                <div id="body_1" class="col-12">
                                    <div class="row">
                                        <p class="text-center text-muted" style="font-style: italic">
                                            Please comfirm if the user details is correct
                                        </p>
                                            <div class="col-12">  
                                                <div class="row">
                                                    <div class="col-md-6">
                                                    fullname:<h5> <?php echo $user->fullname ?></h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                    Age:<h5> <?php echo $user->age ?></h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                    gender:<h5><?php  echo $user->gender ?></h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                    Email:<h5><?php echo $user->email ?></h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                    phone Number:<h5><?php  echo $user->phone ?></h5>
                                                    </div>   
                                                </div>
                                            </div>

                                            <div class="col-12"><br></div>
                                            <div class="col-12 text-center">
                                            <button class="btn btn-info btn-sm" type="button" onclick="hide(1);">
                                                OK
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Header 2 -->
                                <div class="col-12">
                                    <hr>
                                    <div class="row">
                                        <div>
                                            <i id="icon_2" class="col-12 now-ui-icons ui-1_check" style="color: white; background-color: lightgray; border-radius: 20px; padding: 3px"></i>
                                        </div>
                                        <div class="col-8">2. Choose a payment method</div>
                                        <a id="edit_2" onclick="unhide(2)" href="#" style="display: none">
                                            <i class="now-ui-icons ui-2_settings-90"></i> Edit
                                        </a>
                                    </div>
                                    <hr>
                                </div>
                                <!-- Body 2 -->
                                <div id="body_2" class="col-12" style="display: none">
                                    <div class="row">
                                        <p class="text-center text-muted" style="font-style: italic">
                                        </p>
                                        <div class="form-check-radio offset-1 col-1">
                                            <label class="form-check-label">
                                                <input name="payment" class="form-check-input" type="radio" value="pay on arrival" checked="">
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="col-9 text-primary">
                                            PAY ON ARRIVAL  <br>   
                                        </div>
                                        <div class="col-12"><br></div>
                                        <div class="form-check-radio offset-1 col-1">
                                            <label class="form-check-label">
                                                <input name="payment" id="payment_card" class="form-check-input" type="radio" value="payonline">
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="col-9 text-primary ">
                                            PAY ONLINE<br>
                                            <text class="text-muted" style="font-size: smaller">
                                        </div>
                                        <div class="col-12"><br></div>

                                        <div class="col-12 text-center">
                                            <button class="btn btn-info btn-sm" type="button" onclick="hide(2);">
                                                OK
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Header 3 -->
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <h4 class="col-12 h4 text-center text-info">Order Summary</h4>
                             <div class="col-12 col-lg-10 offset-lg-0 card container">
                                <div class="row">
								<?php if($product->product_category =='reservation'): ?>
								<img class="col-5" src="<?php echo base_url() ?>assets/img/yankari/yankariaf.jpg" alt="" width="100%" height="80">
							<?php elseif($product->product_category == 'safari tour'): ?>
							<img class="col-5" src="<?php echo base_url() ?>assets/img/yankari/yankaricave.jpg" alt="" width="100%" height="80">
							<?php else : ?>
							<img class="col-5" src="<?php echo base_url() ?>assets/img/yankari/yankaribg.jpg" alt="" width="100%" height="80">
							<?php endif;  ?>
                                    <div class=" col-7">
                                        <div class="row">
                                            <div class="col-12">
                                                <span>
                                                   <?php echo $product->product_name ?>                                               
                                                    <text class="text-info " style="font-size: 11px"><?php echo '₦'. $product->product_price ?> </text>
                                                </span>
                                            </div>
                                            <div class="col-12">
                                                <span class="text-muted">
                                                    <text class="text-muted" style="font-size: 13px">room :</text>  <?php echo $product->room_number ?>                                                 
                                                </span>
                                               
                                                <span class="text-primary">
                                                   <?php echo '₦'. $product->product_price ?>                                             
                                                </span> z
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        <div class="row">
                            <div class="offset-1 offset-lg-0 col-5">
                                VAT Fee(₦): 
                            </div>
                            <div class="col-5 text-right text-primary text_bold">
                            <?php echo '₦'. $product->vat ?> 
                            </div>
                            <div class="offset-1 offset-lg-0 col-5">
                                Total Amount(₦): 
                            </div>
                            <div class="col-5 text-right text-primary text_bold">
                            <?php echo '₦'. $product->product_price, "+" .$product->vat; ?>                          
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <a id="finish_btn" class="btn btn-info" disabled="" onclick="submitOrder()"><i class="now-ui-icons ui-1_check"></i> Finish</a>
                        </div>
                    </div>
                </div>
                </form>            
                </div>
            </div>  
              </div>
            </div>
          </div>
  
  <footer class="footer footer-default">
  <?php $this->load->view('nav/footer_nav')  ?>
