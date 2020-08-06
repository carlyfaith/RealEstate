
<?php include'header.php';
require_once 'conn.php';
?>
<?php
    $property_id =$_GET['property_id'];
    $sql = "SELECT * FROM property WHERE `property_id` = '$property_id '";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $property_id = $row['property_id'];
        $property_image = $row['property_image'];
        $property_title = $row['property_title'];
        $property_desc = $row['property_desc'];
        $property_det = $row['property_detail'];
        $price = $row['price'];
        $category = $row['category'];
        $agent = $row['agent'];

}

        ?>

<body>
<h3>Add Property Form</h3>
<div class="row" style="text-align: justify; margin-left: 20px">
    <div class="col-lg-4 col-sm-4"></div>
    <div class="col-lg-4 col-sm-4">
        <form action="update.php?property_id=<?php echo $property_id ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="property_title">Property Title</label>
                <input type="text" id="property_title" class="form-control" name="property_title" value="<?php echo $property_title ?>">
            </div>
            <div class="form-group">
                <label for="product_desc">Property Description</label>
                <input type="text" id="property_desc" class="form-control"  name="property_desc"value="<?php echo $property_desc ?>">
            </div>
            <div class="form-group">
                <label for="property_details">Property Details</label>
                <textarea class="form-control" rows="10" id="property_details" name="property_detail"><?php echo $property_det ?></textarea>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" id="category" class="form-control" name="category"value="<?php echo $category ?>">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" id="property_price" class="form-control" name="price" value="<?php echo $price ?>">
            </div>
            <div class="form-group" >
                <label for="price" >Contact Agent</label>
                <input type="text" class="form-control"  id="agent" name="agent" value="<?php echo $agent ?>">
            </div>
            <div class="form-group">
                <label for="property_title">Featured Image</label>
                <input type="file" class="form-control-file"  name="property_image"><img src="images/<?php echo $property_image ?>" width="400" height="300">
            </div>
            <div class="form-group">
                <label for="property_title">More Images</label>
                <input type="file" name="img[]" multiple class="form-control-file">
            </div>

            <input type="submit" name="update" class="btn btn-success" value="Update" style="width: auto">
            <a href="dashboard.php" input type="reset" name="submit" class="btn btn-success" value="Cancel" style="width: auto">Cancel</a>
            <a href="addNew.php" class="btn btn-success" style="width: auto">Add More</a>
        </form>

    </div>
<div class="col-lg-4 col-sm-4"></div>
</div>

<?php include'footer.php';?>