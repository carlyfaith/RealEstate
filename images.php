<?php include'header.php';?>
<?php require_once 'conn.php';
if(isset($_POST['submit'])){
//     get property data
$property_id = $_POST['property_id'];

//    get the image uploaded
$images = $_FILES["property_image"]["name"];
$property_image_tmp = $_FILES['property_image']['tmp_name'];
move_uploaded_file($property_image_tmp,"images/$images");

    $sql = "INSERT INTO `images`(`property_id`, `image`) VALUES ('$property_id','$images')";
    $query = mysqli_query($conn, $sql);
    if ($conn->query($sql) === TRUE) {
        echo "product updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}


?>
<body>
<h3>Add More Images</h3>
<div class="row" style="text-align: justify; margin-left: 20px">
    <div class="col-lg-4 col-sm-4"></div>
    <div class="col-lg-4 col-sm-4">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product_id">Product Id</label>
                <input type="text" id="product_id" class="form-control" name="property_id" required>
            </div>
            <div class="form-group">
                <label for="images">Images</label>
                <input type="file" class="form-control-file" name="property_image" multiple>
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Upload Images" style="width: auto">
            <a href="update.php" class="btn btn-success" style="width: auto">Back</a>
        </form>
    </div>
<div class="col-lg-4 col-sm-4"></div>
</div>

<?php include'footer.php';?>
