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
  <h1>Display Testers</h1>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-7">

      <div class="card">
        <div class="card-body">

          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Tester Name</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
              </tr>
            </thead>
            <?php 
            $selectquery="SELECT * from addtesters";
            $runquery=mysqli_query($connect,$selectquery);
            while($row=mysqli_fetch_array($runquery)){ ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $row['t_id']; ?></th>
                <td><?php echo $row['t_name']; ?></td>
                <td><?php echo $row['t_email']; ?></td>
                <td><?php echo $row['t_username']; ?></td>
                <td><?php echo $row['t_password']; ?></td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
          <!-- End Default Table Example -->
        </div>
      </div>

    </div>

  </div>
</section>

</main><!-- End #main -->
<?php include "shared/footer.php"; ?>