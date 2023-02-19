<?php include "Shared/header.php"; ?>
<?php require "config.php"; ?>
<style>

  p{
    color:black;
  }
</style>
<!-- carousel  -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="height: 75%;">
    <div class="carousel-item active">
      <img src="../Admin/images/pic4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../Admin/images/pic2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../Admin/images/pic3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div id="page-content-wrapper">
    <div class="container">
        <div class="row">
            <!-- Start Shop Page Content -->
            <div class="col-lg-12">
              <h1 style="text-align:center; font-size:50px;">Products</h1>
                    <div class="shop-page-products-wrap">
                        <div class="products-wrapper">
                            <div class="row">
                                <!-- Single Product Start -->
                                    <?php 
                                    $selectquery="SELECT * from addproducts where p_status='4'";
                                    $runquery=mysqli_query($connect,$selectquery);
                                    while($row=mysqli_fetch_array($runquery)){ ?>
                                <div class="col-lg-4 col-sm-6">
                                  <div class="card p-4">
                                    <a href="products.php">
                                         <div class="single-product-item">
                                        <figure class="product-thumb">
                                            <img src="../Admin/images/<?php echo $row['p_image']; ?>" alt="Product">
                                        </figure>
                                        <hr>
                                        <div class="product-details">
                                            <h2>Product Name:</h2><br>
                                            <p><?php echo $row['p_name'] ?></p><br>
                                            <h2>Product Price:</h2><br>
                                            <p><?php echo $row['p_price'] ?></p><br>
                                            <h2>Product Quantity:</h2><br>
                                            <p><?php echo $row['p_quantity'] ?></p>
                                        </div>
                                    </div>
                                    </a>
                                    </div>
                                    </div>
                                   <?php }  ?>        
                                
                                <!-- Single Product End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Shop Page Content -->
        </div>
    </div>
</div>
<?php include "Shared/footer.php"; ?>