<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our panel.</h1>
    <p>

    <p> <form action="upload.php" method="post" enctype="multipart/form-data">
    Select json File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form> </p>
        
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out
           
        </a>
    </p>
</body>
</html>