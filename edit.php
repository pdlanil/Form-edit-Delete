<?php
include('db.php');
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone_number=$_POST['phone_number'];
    $email=$_POST['email'];

    if(empty($id) || empty($name) || empty($address) || empty($phone_number) || empty($email)) {
        echo "Donot leave empty field";
    } else {

        $result = mysqli_query($conn, "UPDATE cloud SET id='$id',name='$name',address='$address',phone_number='$phone_number',email='$email' WHERE id=$id");
        header("Location: datas.php");
    }
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM cloud WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $id=$res['id'];
    $name = $res['name'];
    $address = $res['address'];
    $phone_number = $res['phone_number'];
    $email = $res['email'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <style>
        h1 {
            text-align: center;
            text-effect: outline;
        }

        body {
            font-size: 19px;
        }

        table {
            width: 50%;
            margin: 30px auto;
            border-collapse: collapse;
            text-align: left;
        }

        tr {
            border-bottom: 1px solid #cbcbcb;
        }

        th, td {
            border: none;
            height: 30px;
            padding: 2px;
        }

        tr:hover {
            background: #F5F5F5;
        }

        form {
            width: 45%;
            margin: 50px auto;
            text-align: left;
            padding: 20px;
            border: 1px solid #bbbbbb;
            border-radius: 5px;
        }

        .input-group {
            margin: 10px 0px 10px 0px;
        }

        .input-group label {
            display: block;
            text-align: left;
            margin: 3px;
        }

        .input-group input {
            height: 30px;
            width: 93%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
        }

        .btn {
            padding: 10px;
            font-size: 15px;
            color: white;
            background: #5F9EA0;
            border: none;
            border-radius: 5px;
        }

    </style>
</head>
<body>
<h1>Form fill up </h1>
<form method="post" action="edit.php">
    <div class="input-group">
        <label>ID</label>
        <input type="number" name="id" value="<?php echo $id;?>">
    </div>
    <div class="input-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $name;?>">
    </div>
    <div class="input-group">
        <label>Address</label>
        <input type="text" name="address" value="<?php echo $address;?>">
    </div>
    <div class="input-group">
        <label>Phone Number</label>
        <input type="number" name="phone_number" value="<?php echo $phone_number;?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email;?>">
    </div>
    <div class="input-group">
        <button class="btn" type="submit" name="update">Update</button>
    </div>
</form>
</body>
</html>
