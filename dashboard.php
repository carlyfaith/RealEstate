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

    <div class="row">
        <h3 style="text-align: center">All our Featured Property</h3>
        <?php
        $sql = "SELECT * FROM property order by category";
        $result = mysqli_query($conn, $sql);
        $counter =0;
            foreach ($result as $row){
            $property_id = $row['property_id'];
            $property_image = $row['property_image'];
            $property_title = $row['property_title'];
            $property_desc = $row['property_desc'];
            $category = $row['category'];
            $price = $row['price'];

                echo ($counter % 3==0) ? '<div class="row">':null;
            ?>

            <div class="col-lg-4 col-sm-8 col-xm-12">
                <div class="card">
                    <img class="card-img-top" src="images/<?php echo $property_image;?>"  alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $property_title;?></h4>
                        <p class="card-text"><?php echo $property_desc;?>
                        <p class="card-text">For&nbsp<?php echo $category;?>
                        <p class="price">Price:&nbsp <?php echo $price;?></p>
                       <?php  echo "<a href='edit.php?property_id=$property_id' class='btn btn-success' style='width: auto'>update</a>";?>
                       <?php  echo "<a href='delete.php?property_id=$property_id' class='btn btn-success' style='width: auto'>Delete</a>";?>



                    </div>
                </div>
            </div>

                <?php
                $counter++;
                echo ($counter % 3==0) ? '</div>':null;
            } ?>


    </div>
    <div class="pull-right viewall"><a href="addNew.php" class="btn btn-primary">Add More Properties</a>
        <hr class="my-4">
</div>
</div>



<?php include'footer.php';?>

