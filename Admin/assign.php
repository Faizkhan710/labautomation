<?php 
  session_start();
  if(isset($_SESSION['username']) && isset($_SESSION['password'])){

  }
  else{
    header("location:login.php");
  }
?>
<?php require "config.php"; ?>
<?php 
    $pid=$_GET['id'];
    if(isset($_POST['submit'])){
 
        $testerid=$_POST['testerid'];
     
       
        $insertquery="INSERT into tested(product_id,tester_id,testing_id)values('$pid','$testerid','0')";
        $updatequery="UPDATE addproducts set p_status='2' where p_id='$pid'";
        $runinsertquery=mysqli_query($connect,$insertquery);
        $runupdatequery=mysqli_query($connect,$updatequery);
         
    if(!$runupdatequery){
        die();
    }
    else{
        header("location:displayproducts.php");
    }

    }
?>
<?php include "shared/header.php"; ?>
<?php include "shared/aside.php"; ?>
<main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Products</h5>

              <!-- General Form Elements -->
              <form method="post" enctype="multipart/form-data">
                <?php
                $getproduct= "SELECT * from addproducts where p_id = '$pid'";
                $rungetproduct=mysqli_query($connect, $getproduct);
                $rowprod= mysqli_fetch_array($rungetproduct);
                ?>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Product Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $rowprod['p_name'] ?>" name="name">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Select Tester</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="testerid" aria-label="Default select example">
                    <?php
                $gettester= "SELECT * from addtesters";
                $rungettester=mysqli_query($connect, $gettester);
                while($rowtester= mysqli_fetch_array($rungettester)){

               
                ?>
                      <option value= "<?php echo $rowtester['t_id'] ?>"><?php echo $rowtester['t_name'] ?></option>
                      <?php
                }

                ?>
                    </select>
                  </div>
                </div>
               
               
               
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">Assign</button>
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