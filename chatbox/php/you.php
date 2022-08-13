<?php
$mechat="";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $text = $_POST['text'];
        $mechat= "friend: ".$text;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ME</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body class="you">
    <form class="textarea" action="friend.php" method="post">
        <p>You:</p>
        <textarea name="text" placeholder="Message"></textarea>  
        <br>
        <button name="send">send</button> 
    </form>
    <form action="login.php">           
        <button class="log">log out</button>
    </form>
    <div>
        <?php
            echo $mechat;
        ?>
    </div>
</body>
</html>