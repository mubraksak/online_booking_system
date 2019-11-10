
<!doctype html>
<html lang="en">

<head>
  <title>Hello, world!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="<?php echo base_url(); ?>assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
</head>

<body>
  <?php $this->load->view('nav/admin_nav') ?>

  <br><br><br><br><br>
  <!-- <div class="page-header header-filter" data-parallax="true" style="background-image: url('<?php echo base_url(); ?>assets/img/city-profile.jpg');"></div> -->
    <div class="container">
    <div class="profile-content">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand text-center">
            <!-- <h1>Di-Hub For Kids</h1>
            <h3 class="title text-center">Subtitle</h3> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">





  <div class="content">
  <div class="section text-center">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">welcome Mr Admin</h4>
                  <p class="card-category"> pls check out the new booking and approve them</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">

                 
                    <div class="row">
                    <?php foreach($booking as $booked): ?>
                    <div class="col-md-4">
                        <h4>Full Name: <small><?php echo $booked->fullname; ?></small></h4>
                    </div>
                    <div class="col-md-4">
                        <h4>gender: <small><?php echo $booked->gender; ?></small></h4>
                    </div>
                    <div class="col-md-4">
                        <h4>age: <small><?php echo $booked->age; ?></small></h4>
                    </div>
                    <div class="col-md-4">
                        <h4>email: <small><?php echo $booked->email; ?></small></h4>
                    </div>
                    <div class="col-md-4">
                        <h4>phone number: <small><?php echo $booked->phone; ?></small></h4>
                    </div>
                    <div class="col-md-4">
                        <h4>booking number: <small><?php echo $booked->booking_number; ?></small></h4>
                    </div>
                    <div class="col-md-4">
                        <h4>booked item: <small><?php echo $booked->product_name; ?></small></h4>
                    </div>
                    <div class="col-md-4">
                        <h4>caegory: <small><?php echo $booked->product_category; ?></small></h4>
                    </div>
                    <div class="col-md-4">
                        <h4>price: <small><?php echo $booked->product_price; ?></small></h4>
                    </div>
                    <div class="col-md-4">
                        <h4>booking status: <small><?php echo $booked->status_name; ?></small></h4>
                    </div>

                        <?php if($booked->status == 2): ?> 
                        <?php echo $booked->status_name; ?>
                        <hr>
                        <?php elseif($booked->status == 3): ?>
                        <?php echo $booked->status_name; ?>
                        <!-- this code display approve and reject button.. -->

                        <?php else:?>
                        <!-- this is the finalize request button -->
                            <a href="<?php echo base_url(); ?>Admin/accept/<?php echo $booked->booking_id ?>">
                            <button name='status' value='2' class="btn btn-primary btn-sm" >finalize request</button> 
                            </a>
                        <!-- this is the cancel request button -->
                            <a href="<?php echo base_url(); ?>Admin/rejected/<?php echo $booked->booking_id ?>">
                            <button name='status' value='3' class="btn btn-primary btn-sm" >cancel request</button>
                            </a>
                        <?php endif ?>
                        <!-- ends for each loop -->
                        <?php endforeach ?>
                    </div>


                    <!-- <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                        visitor name
                        </th>
                        <th>
                          Age 
                        </th>
                        <th>
                          Gender 
                        </th>
                        <th>
                        class
                        </th>
                        <th>
                          email
                        </th>
                        <th>
                        phone
                        </th>
                        <th>
                       
                        </th>
                        <th>
                      booking number
                        </th>
                        <th>
                      Action
                        </th>
                      </thead>
                      <tbody>
                          <?php foreach($booking as $booked): ?>
                        <tr>
                          <td>
                          <?php echo $booked->fullname; ?>
                          </td>
                          <td>
                          <?php echo $booked->age; ?>
                          </td>
                          <td>
                          <?php echo $booked->gender; ?>
                          </td>
                          <td>
                          <?php echo $booked->email; ?>
                          </td>
                          <td class="text-primary">
                          <?php echo $booked->phone; ?>
                          </td>
                          <td>
                          <?php echo $booked->booking_number; ?>
                          </td>
                          <td>
                          <?php echo $booked->product_name; ?>
                          </td>
                          <td>
                          <?php echo $booked->status_name; ?>
                          </td>
                          <td>
                          <?php if($booked->status == 2): ?> 
                        <?php echo $booked->status_name; ?>
                       
                        <hr>
                        <?php elseif($booked->status == 3): ?>
                        <?php echo $booked->status_name ?>

                        <?php else:?>
                        <a href="<?php echo base_url(); ?>Admin/accept/<?php echo $booked->booking_id ?>">
                            <button name='status' value='2' class="btn btn-primary btn-sm" >finalize request</button> 
                            </a>

                            <a href="<?php echo base_url(); ?>Admin/rejected/<?php echo $booked->booking_id ?>">
                            <button name='status' value='3' class="btn btn-primary btn-sm" >cancel request</button>
                            </a>
                        <?php endif ?>

                          </td>
                        </tr>
                       <?php endforeach ?>
                      </tbody>
                    </table> -->
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>






    <div class="container">
      
  </div>
  <footer class="footer footer-default">
     <?php $this->load->view('nav/footer_nav')  ?>