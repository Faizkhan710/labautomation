<?php include "Shared/header.php"; ?>
<?php require "config.php"; ?>
<style>

  p{
    color:black;
  }
</style>
<!--== Page Content Wrapper Start ==-->
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
                                         <div class="single-product-item">
                                        <figure class="product-thumb">
                                            <img src="../Admin/images/<?php echo $row['p_image']; ?>" alt="Product">
                                        </figure>
                                        <div class="product-details">
                                            <h3>Product Name:</h3><br>
                                            <p><?php echo $row['p_name'] ?></p><br>
                                            <h3>Product Description:</h3><br>
                                            <p><?php echo $row['p_description']; ?></p>
                                        </div>
                                    </div>
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
<!--== Page Content Wrapper End ==-->
<?php include "Shared/footer.php"; ?>