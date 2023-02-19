<?php 
  session_start();
  if(isset($_SESSION['username']) && isset($_SESSION['password'])){

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
  <h1>Disapproved Products</h1>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-8">

      <div class="card">
        <div class="card-body">

          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
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
                <th scope="row"><?php echo $row['p_id']; ?></th>
                <th scope="row"><img src="images/<?php echo $row['p_image']; ?>" alt="" style="height: 40px; width: 50px;"></th>
                <td><?php echo $row['p_name']; ?></td>
                <td><?php echo $row['p_price']; ?></td>
                <td><?php echo $row['p_quantity']; ?></td>
              </tr>
            </tbody>
            <?php } 
            ?>
            
          </table>
          <!-- End Default Table Example -->
        </div>
      </div>

    </div>

  </div>
</section>

</main><!-- End #main -->
<?php include "shared/footer.php"; ?>