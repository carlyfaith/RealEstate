<?php include'header.php';?>
<?php require_once 'conn.php';?>




    <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
                <div class="bg-img bg-img-1"></div>
              <h2><a href="#">Rent Collection/ Remitance</a></h2>
<!--              <blockquote>-->
<!--                  <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>-->
<!--              </blockquote>-->
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <h2><a href="#">Tenant Screening / Placement</a></h2>
<!--              <blockquote>              -->
<!--              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>-->
<!--              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>-->
<!--              <cite>$ 20,000,000</cite>-->
<!--              </blockquote>-->
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <h2 ><a href="#">Area Market Rent Surveys</a></h2>
<!--              <blockquote>              -->
<!--              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>-->
<!--              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>-->
<!--              <cite>$ 20,000,000</cite>-->
<!--              </blockquote>-->
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4"></div>
              <h2><a href="#">Lease Management / Renewals</a></h2>
<!--                  <blockquote>              -->
<!--                  <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>-->
<!--                  <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>-->
<!--                  <cite>$ 20,000,000</cite>-->
<!--                  </blockquote>-->
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5"></div>
              <h2><a href="#">Properties Maintenance / Inspections</a></h2>
<!--              <blockquote>              -->
<!--              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>-->
<!--              <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>-->
<!--              <cite>$ 20,000,000</cite>-->
<!--              </blockquote>-->
            </div>
          </div>
        </div>



        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div>
  <div class="container">

                <div class="properties-listing spacer">
                  <h3 style="text-align: center">Featured Properties</h3>
                  <?php
                  $sql = "SELECT * FROM property order by RAND() LIMIT 1,3";
                  $result = mysqli_query($conn, $sql);

                  while($row=mysqli_fetch_array($result)) {
                  $property_id = $row['property_id'];
                  $property_image = $row['property_image'];
                  $property_title = $row['property_title'];
                  $property_desc = $row['property_desc'];
                  $price = $row['price'];

                  ?>

                  <div class="row">
                      <div class="col-lg-4 col-sm- col-xm-12">
                          <div class="card">
                              <img class="card-img-top" src="images/<?php echo $property_image;?>"  alt="Card image" style="width:100%">
                              <div class="card-body">
                                  <h4 class="card-title"><?php echo $property_title;?></h4>
                                  <p class="card-text"><?php echo $property_desc;?>
                                  <p class="price"><?php echo $price;?></p>
                                  <?php  echo "<a href='property-detail.php?property_id=$property_id' class='btn btn-success'>view details</a>";?>

                              </div>
                          </div>
                      </div>

                      <?php } ?>

                  </div>
              </div>
          <div class="pull-right viewall"><a href="property.php" class="btn btn-primary">--View more properties--</a>
              <hr class="my-4">
          </div>
      </div>
  </div>
</div>
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="jumbotron">
                <h3>Why Choose Ninalink Realtors?</h3>
                <ul style="list-group">
                    <li>Get paid timely on the agreed date for your convenience</li>
                    <li>We offer free letting services to all our clients maintaining low turnover</li>
                    <li>We offer market rent advice to ensure you get the proper value for your investment</li>
                    <li>Full assistance on filling returns to all our clients</li>
                    <li>Benefits from our strong relationship within our service providers</li>
                </ul>
            </div>

        </div>
    </div>

    <!--what our clients says-->
    <h2 style="text-align: center">Our Happy Clients</h2>
    <div class="slideshow-container">
       <div class="mySlides fade">
            <p align="center">It’s been a pleasure to work with Ninalink Realtor during my short stay in Kenya. Finally I managed to get a plot in Eldoret breeze estate. The process was wonderful and I enjoyed working with the likes of Peter and Rop, very interesting employees who were patient with me through the process. As I fly back to the US tomorrow, I will go and tell my friends to also contemplate about investing with Ninalink. It has been an honor working with your company. I will go and say hello to Lawi for you.</p>
            <h3 align="center">Kari Faith</h3>
        </div>
        <div class="mySlides fade">
         <p align="center">It’s been a pleasure to work with Ninalink Realtors during my short stay in Kenya. Finally I managed to get a plot in Eldoret breeze estate. The process was wonderful and I enjoyed working with the likes of Peter and Rop, very interesting employees who were patient with me through the process. As I fly back to the US tomorrow, I will go and tell my friends to also contemplate about investing with Ninalink. It has been an honor working with your company. I will go and say hello to Lawi for you.</p>
            <h3 align="center">Jacky Honor</h3>
        </div>

        <div class="mySlides fade">
            <p align="center">It’s been a pleasure to work with Ninalink Realtors during my short stay in Kenya. Finally I managed to get a plot in Eldoret breeze estate. The process was wonderful and I enjoyed working with the likes of Peter and Rop, very interesting employees who were patient with me through the process. As I fly back to the US tomorrow, I will go and tell my friends to also contemplate about investing with Ninalink. It has been an honor working with your company. I will go and say hello to Lawi for you.</p>
            <h3 align="center">John Doe</h3>
        </div>


    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
<!--javascript for clients sliders-->
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>

<?php include'footer.php';?>