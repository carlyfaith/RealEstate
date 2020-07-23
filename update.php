
<?php include'header.php';
require_once 'conn.php';


if(isset($_POST['submit'])){
//     get property data
    $property_title = $_POST['property_title'];
    $property_desc = $_POST['property_desc'];
    $property_detail =$_POST['property_detail'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $agent = $_POST['agent'];

//    get the image uploaded
    $images = $_FILES["property_image"]["name"];
    $property_image_tmp = $_FILES['property_image']['tmp_name'];
    move_uploaded_file($property_image_tmp,"images/$images");

    $sql = "INSERT INTO `property`(`property_id`, `property_image`, `property_title`, `property_desc`, `property_detail`, `price`, `category`, `agent`) VALUES ('','$images','$property_title','$property_desc','$property_detail','$price','$category','$agent')";
    $query = mysqli_query($conn, $sql);
    if ($conn->query($sql) === TRUE) {
       header("location:images.php?");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}


?>

<body>
<h3>Add Property Form</h3>
<div class="row" style="text-align: justify; margin-left: 20px">
    <div class="col-lg-4 col-sm-4"></div>
    <div class="col-lg-4 col-sm-4">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="property_title">Property Title</label>
                <input type="text" id="property_title" class="form-control" name="property_title" required>
            </div>
            <div class="form-group">
                <label for="property_title">Images</label>
                <input type="file" class="form-control-file"  name="property_image" required>
            </div>
            <div class="form-group">
                <label for="product_desc">Property Description</label>
                <input type="text" id="property_desc" class="form-control"  name="property_desc" required>
            </div>
            <div class="form-group">
                <label for="property_details">Property Details</label>
                <textarea class="form-control" rows="10" id="property_details" name="property_detail" required></textarea>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" id="category" class="form-control" name="category" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" id="property_price" class="form-control" name="price">
            </div>
            <div class="form-group" >
                <label for="price" >Contact Agent</label>
                <input type="text" class="form-control"  id="agent" name="agent">
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Add property">
            <a href="images.php" class="btn btn-success">Add More Images</a>
        </form>
    </div>
<div class="col-lg-4 col-sm-4"></div>
</div>
<?php include'footer.php';?>