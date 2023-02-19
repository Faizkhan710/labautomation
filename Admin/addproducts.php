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
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $description=$_POST['description'];
        $price=$_POST['price'];
        $quantity=$_POST['quantity'];
        if(isset($_FILES['image'])){
            $imgname=$_FILES['image']['name'];
            $imgtype=$_FILES['image']['type'];
            $imgsize=$_FILES['image']['size'];
            $imgerror=$_FILES['image']['error'];
            $imgtmpname=$_FILES['image']['tmp_name'];
            $allowedextension=array("png","jpg","jpeg","gif","jfif");
            $extension=explode('.',$imgname);
            $imgextension=strtolower(end($extension));
            if(in_array($imgextension,$allowedextension)===false){
                $error[]="This extenion is not allowed";
            }
            if($imgsize>1572864){
                $error[]="This file is too large";
            }
            if(empty($error)===true){
                move_uploaded_file($imgtmpname,"images/".$imgname);
            
        $insertquery="INSERT into addproducts(p_name,p_description,p_price,p_quantity,p_image,p_status)values('$name','$description','$price','$quantity','$imgname','1')";
        $runquery=mysqli_query($connect,$insertquery);
        if(!$runquery){
          die();
        }
        else{
          header("location:displayproducts.php");
        }
            }
        }
        
    }
?>
<?php include "shared/header.php"; ?>
<?php include "shared/aside.php"; ?>
<main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Products</h5>

              <!-- General Form Elements -->
              <form method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Product Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Product Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="description">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="price">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Quantity</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="quantity">
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
                    <button type="submit" class="btn btn-primary" name="submit">Add Product</button>
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