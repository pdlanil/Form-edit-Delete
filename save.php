<?php
include_once ("db.php");
$dbcon = mysqli_connect('localhost', 'root', '', 'student');

// initialize variables
$id = "";
$name = "";
$address = "";
$phone_number = "";
$email = "";



if (isset($_POST['save'])) {
    $id=$_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    if (empty($id)|| empty($name) || empty($address)||empty($phone_number)||empty($email)){
        echo "<font color='red'>Please don't leave blank space.</font><br/>";

    }
    else{
        mysqli_query($dbcon, "INSERT INTO cloud(id,name,address,phone_number,email) VALUES ('$id','$name', '$address','$phone_number','$email')");
        $_SESSION['message'] = "Data saved";
        header('location: datas.php');
    }
}
?>
