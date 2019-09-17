<?php

$servername="localhost";
$username="root";
$password="";
$dbname="student";

$conn=mysqli_connect($servername,$username,"",$dbname);
if ($conn->connect_error){
    die("<h2>connection failed:</h2>".$conn->connect_error);
}
else
    echo "<h2>Data from Student</h2>";

?>

