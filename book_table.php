<?php
require("includes/database_connect.php");
if(isset($_POST['name'])){
  if(!empty($_POST['name'])){

$full_name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$persons = $_POST['persons'];

$sql = "insert into bookings (name,phoneno,email,persons) values ('$full_name','$phone','$email','$persons')";
$result = mysqli_query($conn,$sql);
$sql1 = "insert into tabs (phoneno) values ('$phone')";
$result1 = mysqli_query($conn,$sql1);
mysqli_close($conn);
require("includes/database_connect.php");
$sql2 = "select id from tabs where phoneno='$phone'";
$result2 = mysqli_query($conn,$sql2);
$properties = mysqli_fetch_array($result2, MYSQLI_NUM);
$value = $properties[0];
mysqli_close($conn);
}
}
?>
<!DOCTYPE html>
<html>

<head>
  
<?php
    include "includes/meta.php";
    ?>

</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <?php
    include "includes/header.php";
    ?>
    
  </div>
  <?php
    if (!$result)
    {
    ?>
    <h1 align="center">Booking Failed Try Again</h1>
    <?php
    }
    else
    {
    ?>
    <h1 align="center">Booked Sucessfully</h1>
    <center><p>Name:<?php echo $full_name;?></p></center>
    <center><p>Phone Number:<?php echo $phone; ?></center>
    <center><p>No of persons:<?php echo $persons; ?></center>
    <center><p>Table Number:<?php echo $value; ?></center>
    <?php
    }
    
   ?>
  

  <?php
    include "includes/footer.php";
    ?>


</body>

</html>



