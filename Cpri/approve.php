<?php 
  session_start();
  if(isset($_SESSION['cp_username']) && isset($_SESSION['cp_password'])){

  }
  else{
    header("location:login.php");
  }
?>
<?php
$cpri= $_SESSION['cpid'];
 ?>
<?php require "config.php"; ?>
<?php
    $id= $_GET['id'];
    $selectquery="SELECT * from addproducts where p_id = '$id'";
    $runquery=mysqli_query($connect,$selectquery);
    $row=mysqli_fetch_array($runquery);
?>
<?php 
    if(isset($_POST['submit'])){
  
      $testing=$_POST['testing'];
      $comment=$_POST['comment'];
      $updatequery="INSERT INTO `cpriapprove`( `product_id`, `cpri_id`, `testing_id`, `comments`) VALUES ('$id','$cpri','$testing','$comment')";
      $updatestatusquery="UPDATE addproducts set p_status='4' where p_id='$id'";
      $runupdatequery=mysqli_query($connect,$updatequery);
      $runquery1=mysqli_query($connect,$updatestatusquery);
      if(!$runquery1){
        die();
      }
      else{
        header("location:displayproducts.php");
      }
   
    }
 include "shared/header.php";
 include "shared/aside.php";


?>

<main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Approve Product</h5>

              <!-- General Form Elements -->
              <form method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Product Name</label>
                  <div class="col-sm-10">
                  <input type="hidden" class="form-control" name="pid" value="<?php echo $row['p_id']; ?>">

                    <input type="text" class="form-control" name="name" value="<?php echo $row['p_name']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Product Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="description" value="<?php echo $row['p_description']; ?>">
                  </div>
                </div>
              
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Testing Method</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="testing">
                    <?php 
                        $selectquery="SELECT * from testingprocess";
                        $runquery=mysqli_query($connect,$selectquery);
                        while($row=mysqli_fetch_array($runquery)){ ?>
                      <option value="<?php echo $row['testing_id'];?>"><?php echo $row['testing_name'];?></option>
                      <?php } ?> 
                    </select>
                  </div>
                </div>
                <div class="form-floating mb-3">
                      <textarea class="form-control" name="comment" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
                      <label for="floatingTextarea">Reason</label>
                    </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">Approve Product</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

       
      </div>
    </section>

  </main><!-- End #main -->
  <?php include "shared/footer.php"; ?>