<?php 
  session_start();
  if(isset($_SESSION['t_username']) && isset($_SESSION['t_password'])){

  }
  else{
    header("location:login.php");
  }
?>
<?php

require "config.php";
$tid=$_SESSION['tid'];
?>
<?php include "shared/header.php"; ?>
<?php include "shared/aside.php"; ?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Approve/Disapprove Products</h1>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-10">

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
            $selectquery="SELECT * from addproducts a JOIN tested t ON a.p_id=t.product_id where (a.p_status='2' OR a.p_status='0')  and t.tester_id='$tid'";
            $runquery=mysqli_query($connect,$selectquery);
            while($row=mysqli_fetch_array($runquery)){ ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $row['p_id']; ?></th>
                <th scope="row"><img src="../Admin/images/<?php echo $row['p_image']; ?>" alt="" style="height: 40px; width: 50px;"></th>
                <td><?php echo $row['p_name']; ?></td>
                <td><?php echo $row['p_price']; ?></td>
                <td><?php echo $row['p_quantity']; ?></td>
                <?php if($row['p_status']==3){?>
                                  <td><button type="button" class="btn btn-secondary" name="submit">Approved</button></td>
                <td><a href="disapprove.php?id=<?php echo $row['p_id']; ?>"><button type="submit" class="btn btn-primary" name="submit">Disapprove</button></td></a>

            <?php    } else {
              ?>
                                  <td><a href="approve.php?id=<?php echo $row['p_id']; ?>"><button type="submit" class="btn btn-primary" name="submit">Approve</button></a></td>

                <td><a href="disapprove.php?id=<?php echo $row['p_id']; ?>"><button type="submit" class="btn btn-primary" name="submit">Disapprove</button></td></a>
              </tr>
            </tbody>
            <?php }} ?>
          </table>
          <!-- End Default Table Example -->
        </div>
      </div>

    </div>

  </div>
</section>

</main><!-- End #main -->
<?php include "shared/footer.php"; ?>