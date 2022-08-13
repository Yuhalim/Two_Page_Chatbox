<?php
$fchat="";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $text = $_POST['text'];
        $fchat= "Friend: ".$text;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRIEND</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body class="friend">
    <form class="textarea" action="you.php" method="post">
        <p>Friend:</p>
        <textarea name="text" placeholder="Message"></textarea>  
        <br>
        <button name="send">send</button> 
    </form>
    <form action="login.php">           
        <button class="log">log out</button>
    </form>
    <div>
        <?php
            echo $fchat;
        ?>
    </div>
</body>

</html>