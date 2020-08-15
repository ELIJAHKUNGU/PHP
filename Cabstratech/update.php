<link rel="stylesheet" href="css/bootstrap.css">
<?php
//get the id
//retrieve the movie
//dispaly
//update the movie
if (isset($_GET["id"]))
{
$id = $_GET["id"];
require 'DB.php';
$sql="select * from product where movie_id = $id";
$result= mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
extract($row);

}
if (isset($_POST["price"]))
{
    $price =$_REQUEST["price"];
    $discount =$_REQUEST["discount"];
    $quantity =$_REQUEST["quantity"];

    $id =$_REQUEST["id"];
    require 'DB.php';
    $sql ="update product set price=$price, discount=$discount , quantity=$quantity
    where movie_id=$id";
    mysqli_query($conn ,$sql) or die (mysqli_error($conn));
    header("location:show.php");
}


?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>updating</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
require 'navbar.php';
?>

<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Updating Stocks


                </div>

            </div>
            <div class="card-body">
                <div class="card-header">
                    <?="$title";?>
                </div>
                <?php

                if (isset($message))
                    echo "<p class='text-danger'>$message</p>"



                ?>

                <form action="update.php" method="post">
                    <input type="hidden" name="id" value="<?=$movie_id?>">


                    </div>

                    <div class="form-group">


                        <div class="form_group">
                            <label for="title">Price</label>
                            <input value="<?=$price?>" type="number" step="0.5" class="form-control" name="price" required>

                        </div>

                        <div class="form_group">
                            <label for="title">Discount</label>
                            <input value="<?=$discount?>" type="number" step="0.5" class="form-control" name="discount" required>

                        </div>
                        <div class="form_group">
                            <label for="title">quantity</label>
                            <input value="<?=$quantity?>"  type="number" class="form-control" name="quantity" required>

                        </div>




                    </div>


                    <button class="btn btn-dark btn-block">Update Stock</button>

                </form>

            </div>
        </div>


    </div>
</div>

<br><br><br>


<div class="footer_copyright" align="center">
					<span>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Cabstratech</a>
</span>
</div>

</a>
</body>
</html>
