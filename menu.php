<?php 
session_start();
include "conn.php";
?>
<!DOCTYPE html>
<html>
  <head>
          <h1> Menu </h1> 
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="menu.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  </head>
  <body>
    <br />
    <div class="container">
      <?php
        $query = "SELECT * FROM tbl_product ORDER BY id ASC";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?>
      <div class="col-md-3">
        <form method="post" action="cart1.php?id=<?php echo $row["id"]; ?>">
          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
            <img src="images/<?php echo $row["image"]; ?>" class="img-responsive"/><br />

            <h4 class="text-info"><?php echo $row["name"]; ?></h4>

            <h4 class="text-danger">Rs <?php echo $row["price"]; ?></h4>

            <input type="number" min="1" name="quantity" class="form-control" required placeholder="Place Your Quantity" >

            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" required >

            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" required >

            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">

          </div>
        </form>
      </div>
      <?php
          }
        }
      ?>
      <div style="clear:both"></div>
    </div>
  </div>
  <div class= "men"> <a href="canteen.php">Go Home</a></div>
   <div class= "car"> <a href="cart1.php">View Cart</a></div>
  </body>
</html>
 
