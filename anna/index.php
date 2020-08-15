<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/popper.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <?php
    require_once 'db.php'
    ?>
    <div class="justify-content-center">



<form action="db.php"  method="POST">

    <div class="form-group">
    <label for="">Name</label>
    <input type="text" name="name" value="Enter the name" class="form-control">
    </div>
    <div class="form-group">
    <label for="">Location</label>
        <div class="form-group">
    <input type="text" name="location" value="Enter the location" class="form-control">
        </div>
    <button type="submit" class ="btn btn-info" name="save">Save</button>

</form>
    </div>
</div>
</body>
</html>