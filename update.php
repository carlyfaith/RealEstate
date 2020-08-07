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

//    update property in the database
    if (isset($_POST['update'])) {
        $property_id = $_GET['property_id'];
        $property_title= $_POST['property_title'];
        $property_desc = $_POST['property_desc'];
        $property_detail = $_POST['property_detail'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $agent = $_POST['agent'];

        //    get the image uploaded
        $images = $_FILES["property_image"]["name"];
        $property_image_tmp = $_FILES['property_image']['tmp_name'];
        move_uploaded_file($property_image_tmp, "images/$images");

        $sql = "UPDATE property SET `property_image`='$images',`property_title`='$property_title',`property_desc`='$property_desc',
    `property_detail`='$property_detail',`price`='$price',`category`='$category',`agent`='$agent'WHERE property_id = '$property_id '";
        if ($conn->query($sql) === TRUE) {
            header("location:dashboard.php");
        } else {
            echo "Error updating property: " . $conn->error;
        }

        $conn->close();


}

?>
