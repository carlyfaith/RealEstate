<?php include'header.php';
require_once 'conn.php';

?>
<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="index.php">Home</a> / Properties</span>
        <h2>Properties</h2>
    </div>
</div>





<div class="container">
    <div class="properties-listing spacer">
        <h3 style="text-align: center">Featured Property and Land for sale</h3>
        <?php
        $sql = "SELECT * FROM property order by RAND() LIMIT 0,12";
        $result = mysqli_query($conn, $sql);

        while($row=mysqli_fetch_array($result)) {

            $property_image = $row['property_image'];
            $property_title = $row['property_title'];
            $property_desc = $row['property_desc'];
            $price = $row['price'];






        ?>

                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <img class="card-img-top" src="images/<?php echo $property_image;?>"  alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $property_title;?></h4>
                                <p class="card-text"><?php echo $property_desc;?>
                                <p class="price"><?php echo $price;?></p>
                               <a href="property-detail.php" class="btn btn-success">View Details...</a>
                            </div>
                        </div>

                    </div>
                    <!-- properties -->


<!--                </div>-->
        <?php } ?>
           </div>
    </div>


    <?php include'footer.php';?>
