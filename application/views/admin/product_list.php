
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
    <div class="container">
    <div class="profile-content">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand text-center">
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
                  <h4 class="card-title ">product list</h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">

                  
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                           product name
                        </th>
                        <th>
                          product_category 
                        </th>
                        <th>
                          product price 
                        </th>
                        <th>
                        vat
                        </th>
                        <th>
                         product number
                        </th>
                        <th>
                      Action
                        </th>
                      </thead>
                      <tbody>
                          <?php foreach($products as $product): ?>
                        <tr>
                        <td>
                          <?php echo $product->product_id; ?>
                          </td>
                          <td>
                          <?php echo $product->product_name; ?>
                          </td>
                          <td>
                          <?php echo $product->product_category; ?>
                          </td>
                          <td>
                          <?php echo $product->product_price; ?>
                          </td>
                          <td>
                          <?php echo $product->vat; ?>
                          </td>
                          <td>
                          <?php echo $product->room_number; ?>
                          </td>
                          <td>
                            <a href="<?php echo base_url(); ?>Admin/edit_product/<?php echo $product->product_id ?>">
                            <button class="btn btn-primary btn-sm" >edit product</button>
                            </a>
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