<?php include "Shared/header.php"; ?>
<?php 
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        $insertquery="INSERT into contactus(name,email,subject,message)values('$name','$email','$subject','$message')";
        $runquery=mysqli_query($connect,$insertquery);
        if(!$runquery){
            die();
        }
        else{
            header("location:contact us.php");
        }
    }
?>
<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper">
    <div class="container">
        <div class="row">
            <!-- Start Contact Info  -->
            <div class="col-lg-6">
                <div class="contact-info-wrap contact-method">
                    <h2>Contact Info</h2>
                    <div class="contact-info-items">
                        <div class="single-contact-info">
                            <h3><i class="fa fa-phone"></i> Call</h3>
                            <a href="tel:+23140596971">+231 40596971</a>
                        </div>

                        <div class="single-contact-info">
                            <h3><i class="fa fa-envelope"></i> Mail</h3>
                            <a href="mailto:your@email.here">your@email.here</a>
                        </div>

                        <div class="single-contact-info">
                            <h3><i class="fa fa-map-marker"></i> Address</h3>
                            <a href="#" target="_blank">San Francisco, CA 94111, United States</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Info  -->

            <!-- Start Contact Form -->
            <div class="col-lg-6">
                <div class="contact-form-wrap contact-method">
                    <h2>Write to Us</h2>
                    <form method="post">
                        <div class="row">
                                <div class="single-input-item">
                                    <input type="text" name="Name" placeholder="Name" required/>
                                </div>
                        </div>

                        <div class="single-input-item">
                            <input type="email" name="email" placeholder="Email Address" required/>
                        </div>

                        <div class="single-input-item">
                            <input type="text" name="subject" placeholder="Subject" required/>
                        </div>

                        <div class="single-input-item">
                            <textarea name="message" cols="30" rows="4"
                                      placeholder="Write your Message" required></textarea>
                        </div>

                        <div class="single-input-item">
                            <button class="btn" type="submit" name="submit">Send Message</button>
                        </div>
                        <!-- Show Succes or Error Message -->
                    </form>
                </div>
            </div>
            <!-- End Contact Form -->
        </div>
    </div>
</div>
<!--== Page Content Wrapper End ==-->

<!-- Start Map Area Wrapper -->
<div class="map-area-wrapper">
    <div id="map_content" data-lat="37.7721981" data-lng="-122.4216935" data-zoom="8" data-maptitle="Tienda HQ"
         data-mapaddress="San Francisco, CA 94111, United States">
    </div>
</div>
<!-- End Map Area Wrapper -->
<?php include "Shared/footer.php"; ?> 