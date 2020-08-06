<?php require_once 'header.php';?>
<?php require_once 'conn.php';?>
<?php
if(isset($_GET['property_id'])) {

    $property_id = $_GET['property_id'];
    $sql = "delete from property where property_id = '$property_id'";

    if ($conn->query($sql) === TRUE) {

        header("location:dashboard.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

    $conn->close();
    ?>













require_once 'footer.php';
?>
