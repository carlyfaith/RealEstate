<?php include'header.php';?>
<?php require_once 'conn.php';?>
    <!-- banner -->
    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="index.php">Home</a> /Property Details</span>
            <h2>Property Details</h2>
        </div>
    </div>

<?php

if(isset($_GET['property_id'])){
    $property_id =$_GET['property_id'];
    $sql = "SELECT * FROM property WHERE `property_id` = '$property_id '";
    $result = mysqli_query($conn, $sql);
    while($row=mysqli_fetch_array($result)) {
        $property_id = $row['property_id'];
        $property_image = $row['property_image'];
        $property_title = $row['property_title'];
        $property_desc = $row['property_desc'];
        $property_det = $row['property_detail'];
        $price = $row['price'];
        $category = $row['category'];

        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-8 col-xm-12">
                    <h3 style="text-align:center ;"><?php echo $property_title;?></h3>
                    <img src="images/<?php echo $property_image;?>" class="img-responsive thumbnail" width="600px"  alt="realestate">
                    <p class="card-text"><?php echo $property_det;?>
                    <p class="card-text"><?php echo $price;?>
                    <hr>
                    <h3 style="text-align: center">More Images</h3>
                </div>
                <div class="col-lg-4 col-sm-8 col-xm-12">

                </div>
            </div>
                    <?Php
                    if(isset($_GET['property_id'])){
                        $property_id =$_GET['property_id'];
                        $query = "SELECT * FROM images  WHERE `property_id` = '".$row["property_id"]."'";
                        $result1 = mysqli_query($conn, $query);
                        $counter =0;
                    }
                    foreach ($result1 as $value) {
                        echo ($counter % 3==0) ? '<div class="row">':null;
                        ?>
                        <div class="col-lg-4 col-sm-8 col-xm-12">
                            <div class="card">
                                <img src="images/<?php echo $value['image'];?>" class="img-responsive thumbnail" width="600px"  alt="realestate">
                            </div>
                        </div>

                    <?php
                        $counter++;
                        echo ($counter % 3==0) ? '</div>':null;
                    }?>

            </div>
            <a href="sale.php" class="btn btn-success" style="width: auto;float: right">Back</a>
        </div>
        </div>

    <?php }?>
<?php }?>





<?php include'footer.php';?>