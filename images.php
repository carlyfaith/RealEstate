<?php include'header.php';?>
<?php require_once 'conn.php';?>
<body>
<h3>Add More Images</h3>
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
                <input type="file" class="form-control-file" name="files[]" multiple>
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Upload Images" style="width: auto">
            <a href="update.php" class="btn btn-success" style="width: auto">Back</a>
        </form>
    </div>
<div class="col-lg-4 col-sm-4"></div>
</div>

<?php include'footer.php';?>
