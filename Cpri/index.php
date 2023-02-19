<?php 
  session_start();
  if(isset($_SESSION['cp_username']) && isset($_SESSION['cp_password'])){

  }
  else{
    header("location:login.php");
  }
?>
<?php include "shared/header.php"; ?>
<?php include "shared/aside.php"; ?>
<?php require "config.php"; ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
<div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

         <!-- Sales Card -->
         <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Assigned <span>| Products</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                  <?php
                  $countassigned="SELECT count(p_id) as count from addproducts where p_status='3'";
                  $runpro=mysqli_query($connect,$countassigned);
                  $rowpro=mysqli_fetch_array($runpro);
                  ?>
                  <h6><?php echo $rowpro['count']?></h6>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">

            <div class="card-body">
              <h5 class="card-title">Revenue <span>| This Month</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                  <?php
                  $apppro="SELECT count(cpri_id) as count from cpriapprove join addproducts ON cpriapprove.product_id = addproducts.p_id where addproducts.p_status='4' ";
                  $runapppro=mysqli_query($connect,$apppro);
                  $rowapppro=mysqli_fetch_array($runapppro);
                  ?>
                  <h6><?php echo $rowapppro['count'] ;?></h6>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-12">

          <div class="card info-card customers-card">

            <div class="card-body">
              <h5 class="card-title">Customers <span>| This Year</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                <?php
                  $dispro = "SELECT count(cpri_id) as count from cpriapprove join addproducts ON cpriapprove.product_id = addproducts.p_id where addproducts.p_status='0' ";
                  $rundispro=mysqli_query($connect,$dispro);
                  $rowdispro=mysqli_fetch_array($rundispro);
                  ?>
                  <h6><?php echo $rowdispro['count'] ;?></h6>

                </div>
              </div>

            </div>
          </div>

        </div><!-- End Customers Card -->


          <!-- Top Selling -->
          <div class="col-12">
          <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
              <h5 class="card-title">Approved Products:</h5>

              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                  </tr>
                </thead>
                <?php
                  $selectquery="SELECT * from addproducts where p_status='4'";
                  $runquery=mysqli_query($connect,$selectquery);
                  while($row=mysqli_fetch_array($runquery)){ ?>
                      <tbody>
                  <tr>
                    <th scope="row"><a href="#"><img src="../Admin/images/<?php echo $row['p_image']; ?>" alt=""></a></th>
                    <td><?php echo $row['p_name']; ?></td>
                    <td><?php echo $row['p_price']; ?></td>
                    <td class="fw-bold"><?php echo $row['p_quantity']; ?></td>
                  </tr>
                </tbody>
                <?php  } ?> 
              </table>
            </div>
          </div>
        </div><!-- End Top Selling -->
       
        <!-- Top Selling -->
        <div class="col-12">
          <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
              <h5 class="card-title">Disapproved Products:</h5>

              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                  </tr>
                </thead>
                <?php
                  $selectquery="SELECT * from addproducts where p_status='0'";
                  $runquery=mysqli_query($connect,$selectquery);
                  while($row=mysqli_fetch_array($runquery)){ ?>
                <tbody>
                  <tr>
                    <th scope="row"><a href="#"><img src="../Admin/images/<?php echo $row['p_image']; ?>" alt=""></a></th>
                    <td><?php echo $row['p_name']; ?></td>
                    <td><?php echo $row['p_price']; ?></td>
                    <td class="fw-bold"><?php echo $row['p_quantity']; ?></td>
                  </tr>
                </tbody>
                <?php  } ?> 
              </table>
            </div>
          </div>
        </div><!-- End Top Selling -->
       

      </div>
    </div><!-- End Left side columns -->
    
  </div>
</section>


  </main><!-- End #main -->
<?php include "shared/footer.php"; ?>