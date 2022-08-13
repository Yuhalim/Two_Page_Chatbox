<?php
$conn = mysqli_connect("localhost", "root", "", "messanger");
if($conn===false)
{
    die("error" .mysqli_connect_error());
}
?>