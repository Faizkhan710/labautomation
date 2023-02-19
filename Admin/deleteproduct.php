<?php 
  session_start();
  if(isset($_SESSION['username']) && isset($_SESSION['password'])){

  }
  else{
    header("location:login.php");
  }
?>
<?php require "config.php";
$id=$_GET['id'];
$deletequery="DELETE from addproducts where p_id='$id'";
$runquery=mysqli_query($connect,$deletequery);
if(!$runquery){
    die();
}
else{
    header("location:displayproducts.php");
}
?>
