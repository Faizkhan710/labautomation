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
    $id=$_GET['id'];
    if(isset($_POST['edit'])){
        $name=$_POST['name'];
        $description=$_POST['description'];
        $price=$_POST['price'];
        $quantity=$_POST['quantity'];
        if(isset($_FILES['image'])){
            $imgsize=$_FILES['image']['size'];
            $imgname=$_FILES['image']['name'];
            $imgtype=$_FILES['image']['type'];
            $imgtmp=$_FILES['image']['tmp_name'];
            $imgerror=$_FILES['image']['error'];
            $imgblob=addslashes(file_get_contents($imgtmp));
            $allowedext=array("png","jpg","jpeg","gif","jfif");
            $ext=explode('.',$imgname);
            $imgext=strtolower(end($ext));
            if(in_array($imgext,$allowedext)===false){
                $error[]="This extension is not allowed";
            }
            if($imgsize>1572864){
                $error[]="This file is too large";
            }
            if(empty($error)===true){
                move_uploaded_file($imgtmp,"images/".$imgname);
            }
        }
        $updatequery="UPDATE addproducts set p_name='$name',p_description='$description',p_price='$price',p_quantity='$quantity',p_image='$imgname' where p_id='$id'";
        $runquery=mysqli_query($connect,$updatequery);
    }
    ?>
        <?php  
            $sql1="select * from addproducts where p_id='$id'";
            $query=mysqli_query($connect,$sql1);
            $row=mysqli_fetch_array($query);?>
        <main id="main" class="main">
        <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Product</h5>

              <!-- General Form Elements -->
              <form method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Product Name</label>
                  <div class="col-sm-10">
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
                  <label for="inputPassword" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="price" value="<?php echo $row['p_price']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Quantity</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="quantity" value="<?php echo $row['p_quantity']; ?>">
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
                    <button type="submit" class="btn btn-primary" name="edit">Edit Product</button>
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






















