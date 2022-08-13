<?php
include ('config.php');
$comment = "";

if(isset($_POST['register'])){

/*declare variable to select all the the values inside the field 'username' in the database*/ 
    $check = mysqli_query($conn, "SELECT * FROM chat WHERE username = '{$_POST['user']}'");

   if($_POST['fname']=="" || $_POST['lname']=="" || $_POST['user']=="" || $_POST['pass']=="" || $_POST['conf']=="" ){
        $comment = "all fields are required";
   }

   elseif(mysqli_num_rows($check) > 0){
       $comment = "Sorry, username already exists";
   }

   elseif(strlen($_POST['pass']) < 7){
       $comment = "the password must be longer";
   }

   elseif($_POST['pass'] != $_POST['conf']){
       $comment = "Both password must be correct";
   }

   else{
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $confirm = $_POST['conf'];
    $date = 'monday';
    $insert = mysqli_query($conn, "INSERT INTO chat(fname, lname, username, password, date_time) VALUES('$firstname', '$lastname', '$username', '$password','$date')");
    header('Location:login.php');

    if($insert){
        $comment = "you have successfully submitted";
    }
    }
}
?>
<!DOCTYPE html>
<html> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Page</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body class="home">
    <form method="post">
        <input type="text" name="fname" placeholder="Enter your first name" class="fname">
        <br><br>
        <input type="text" name="lname" placeholder="Enter your last name" class="lname">
        <br><br>
        <input type="text" name="user" placeholder="Enter your username" class="user">
        <br><br>
        <input type="password" name="pass" placeholder="Enter your password" class="pass">
        <br><br>
        <input type="password" name="conf" placeholder="Confirm your password" class="conf">
        <br><br>
        <input type="submit" name="register" class="register" value="Register">
        <br><br>
        <div style="color: green; font-weight: bold">
            <?php
                echo $comment;
            ?>
        </div>
    </form>
</body>
</html>
