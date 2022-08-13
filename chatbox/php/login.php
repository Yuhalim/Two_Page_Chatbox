<?php
include ('config.php');
session_start();
$message="";
$mess="";
if(isset($_POST['login'])){
    if($_POST['user']!="" && $_POST['pass']!=""){
        $username= $_POST['user'];
        $password = $_POST['pass'];
        $verify = mysqli_query($conn, "SELECT * FROM chat WHERE username='$username' && password='$password'");
        $count = mysqli_num_rows($verify);
        if($count==1){
            $username=$_SESSION['username'];
            $password=$_SESSION['password'];
            header('Location:you.php');
        }else{
            $message = 'username and password not valid';
        }
    }else{
        $mess='please fill all areas';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <form method="post">
        <input type="text" name="user" placeholder="Type in your username">
        <br><br>
        <input type="password" name="pass" placeholder="Type in your password">
        <br><br>
        <input type="submit" name="login" class="register">
    </form>
    <div class="error">
        <?php
            echo $message;
            echo $mess;
        ?>
    </div>
</body>
</html>