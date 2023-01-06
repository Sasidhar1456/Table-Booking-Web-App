<!DOCTYPE html>
<html>

<head>
  <?php
    include "includes/meta.php";
    ?>

</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <?php
    include "includes/header.php";
    ?>
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Fast Food Restaurant
                    </h1>
                    <p>
                      Here at Super Toast we take particular care when selecting the ingredients for our range of chicken meals. From fresh chicken to the salads and bread we procure and prepare the food ingredients on daily basis.
                    </p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" ></li>
          </ol>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <?php
    include "includes/footer.php";
    ?>



</body>

</html>