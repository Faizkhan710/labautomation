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
<?php 
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $insertquery="INSERT into testingprocess(testing_name)values('$name')";
        $runquery=mysqli_query($connect,$insertquery);
    }
?>

<main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Testers</h5>

              <!-- General Form Elements -->
              <form method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Testing Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">Add Testingprocess</button>
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