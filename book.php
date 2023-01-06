<?php
require("includes/database_connect.php");
$sql = "select count(*) from bookings";
$result = mysqli_query($conn,$sql);
$properties = mysqli_fetch_array($result, MYSQLI_NUM);
$value = $properties[0];
$avl = 30-$value;

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
  if($avl>0)
  {
?>
  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Book A Table
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form method="post" action="book_table.php">
              <div>
                <input type="text" class="form-control" placeholder="Your Name" name="name" required/>
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Phone Number" name="phone" required/>
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Your Email" name="email" required/>
              </div>
              <div>
                <select class="form-control nice-select wide" name="persons" required>
                  <option value="" disabled selected>
                    How many persons?
                  </option>
                  <option value="2">
                    2
                  </option>
                  <option value="3">
                    3
                  </option>
                  <option value="4">
                    4
                  </option>
                  <option value="5">
                    5
                  </option>
                  <option value="6">
                    6
                  </option>
                </select>
              </div>
              
              <div class="btn_box">
                <button type="submit">
                  Book Now
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <h1 align="center">Available Tables:<?php echo $avl?></h1>
        </div>
      </div>
    </div>
  </section>
  <?php
  }
  else
  {
    ?>
    <h1 align="center">No Tables Available</h1>
  <?php
  }
  ?>


  <?php
    include "includes/footer.php";
    mysqli_close($conn);
    ?>


</body>

</html>