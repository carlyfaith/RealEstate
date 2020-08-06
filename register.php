<?php include'header.php';
require_once 'conn.php';

?>
<?php
$query = "SELECT * FROM property";
$tab_result = mysqli_query($conn, $query);

$tab_content = '';
$counter = 0;
while($row = mysqli_fetch_array($tab_result))
{


        $tab_content .= '
  <div class="col-lg-4 col-sm-8 col-xm-12" >
  <div class="card">
   <img class="card-img-top" src="images/'.$row["property_image"].'" class="img-responsive img-thumbnail" />
   <h4 class="card-title">'.$row["property_title"].'</h4>
   <p class="card-text">'.$row["property_desc"].'</>
   <p class="price">'.$row["price"].'</p>
   </div>
  </div>
  ';
    }
    $tab_content .= '<div style="clear:both"></div></div>';
    $counter++;

?>



<div class="container">
    <h2 align="center">Create Dynamic Tab by using Bootstrap in PHP Mysql</a></h2>
    <br />

    <div class="tab-content">
        <br />
        <?php
        echo $tab_content;
        ?>
    </div>
</div>

