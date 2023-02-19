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
<?php include "config.php"; ?>
<?php 
  if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $insertquery="INSERT into addtesters(t_name,t_email,t_username,t_password)values('$name','$email','$username','$password')";
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
                  <label for="inputText" class="col-sm-2 col-form-label">Tester Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="yourEmail" class="col-sm-2 col-form-label">Tester Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="yourEmail" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Tester Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Tester Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="image">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">Add Tester</button>
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