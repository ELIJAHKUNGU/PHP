<?php


if (isset($_POST["password"])) {
    require 'DB.php';
    extract($_POST);
    $sql = "select * from users where email='$email' and password='$password' LIMIT 1";

    $result= mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) ==1){
        //success
        $info = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["info"] = $info;
        header("location:show.php");

    }else{
        $message="Wrong username or password";
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
//include 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header bg-warning">
                    <h2 class="text-white text-center font-weight-bold" style="font-size: 25px">
                        Sign in
                    </h2>
                </div>
                 <div class="card-body">


                        <?php
                        if (isset($message))
                            echo "<p class='text-danger'>$message</p>";
                        ?>

                     <form action="login.php" method="post" >

                        <div class="form-group">
                            <label for="title">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="title">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>

                        <button class="btn btn-info btn-block">Sign in</button>

                     </form>
                </div>
            </div>
        </div>
    </div>



</div>






</body>
</html>