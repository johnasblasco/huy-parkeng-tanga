<?php
    include("include/connection.php");
    session_start();
    error_reporting(0);

    $username = $_POST["username"];
    $password = $_POST["password"];

    if(isset($_POST['burat'])){
        $query = mysqli_query($conin_ka_ni_lord, "SELECT * FROM tbladmin where username='$username' and password='$password'; ");
        
        if($query){
            if(mysqli_num_rows($query) > 0){
               echo"<p>nakuha ko pre</p>";
               header("Location: dashboard.php");
               exit();
            }
            else{
               echo"<p>di ko makita sa database gar</p>";
            }
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style> 
        main{
            display:grid;
            place-content:center;
            margin-top: 15%;
        }
        form{
            width: 60vw;
        }
        
    </style>
</head>
<body>

    <main class = "container">
       
        <form method="POST">
            <input type="text" class="form-control mb-3" name="username" placeholder="Username">
            <input type="password" class="form-control mb-3" name="password" placeholder="Password">
            <input type="submit" class="form-control btn btn-primary" value="Log In" name="burat">

        </form>

    </main>

<script src="js/bootstrap.js"></script>
</body>
</html>