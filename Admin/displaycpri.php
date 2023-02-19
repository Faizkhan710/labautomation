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
  <h1>Display CPRI</h1>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">

          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">CPRI Name</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
              </tr>
            </thead>
            <?php 
            $selectquery="SELECT * from addcpri";
            $runquery=mysqli_query($connect,$selectquery);
            while($row=mysqli_fetch_array($runquery)){ ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $row['cp_id']; ?></th>
                <td><?php echo $row['cp_name']; ?></td>
                <td><?php echo $row['cp_email']; ?></td>
                <td><?php echo $row['cp_username']; ?></td>
                <td><?php echo $row['cp_password']; ?></td>
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