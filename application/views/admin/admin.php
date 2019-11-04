
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
                    <table class="table">

                  
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
                    </table>
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