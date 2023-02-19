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
  <h1>Display Products</h1>
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
                <th scope="col" colspan="2">Actions</th>
                
              </tr>
            </thead>
            <?php 
            $selectquery="SELECT * from addproducts where p_status='1' OR p_status='2' ";
            $runquery=mysqli_query($connect,$selectquery);
            while($row=mysqli_fetch_array($runquery)){ ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $row['p_id']; ?></th>
                <th scope="row"><img src="images/<?php echo $row['p_image']; ?>" alt="" style="height: 40px; width: 50px;"></th>
                <td><?php echo $row['p_name']; ?></td>
                <td><?php echo $row['p_price']; ?></td>
                <td><?php echo $row['p_quantity']; ?></td>
                <td><a href="editproduct.php?id=<?php echo $row['p_id']; ?>"><i class="bi bi-pencil" style="font-size: 27px;"></i></a></td>
                <td><a href="deleteproduct.php?id=<?php echo $row['p_id']; ?>"><i class="bi bi-trash" style="font-size: 27px;"></i></a></td>
                <?php
                  if( $row['p_status']== 2)
                  {
                ?>
                <td><button type="button" class="btn btn-secondary" name="submit">Assigned</button></td>
                <?php
                  } else {
?>
                <td><a href="assign.php?id=<?php echo $row['p_id']; ?>"><button type="submit" class="btn btn-primary" id="assign" name="submit">Assign</button></td></a>

<?php
                  }
                  ?>
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