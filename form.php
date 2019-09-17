<?php  include('save.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        h1{
            text-align: center;
            text-effect: outline;
        }
        body {
            font-size: 19px;
        }
        table{
            width: 50%;
            margin: 30px auto;
            border-collapse: collapse;
            text-align: left;
        }
        tr {
            border-bottom: 1px solid #cbcbcb;
        }
        th, td{
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
        .edit_btn {
            text-decoration: none;
            padding: 2px 5px;
            background: #2E8B57;
            color: white;
            border-radius: 3px;
        }

        .del_btn {
            text-decoration: none;
            padding: 2px 5px;
            color: white;
            border-radius: 3px;
            background: #800000;
        }
        .msg {
            margin: 30px auto;
            padding: 10px;
            border-radius: 5px;
            color: #3c763d;
            background: #dff0d8;
            border: 1px solid #3c763d;
            width: 50%;
            text-align: center;
        }
    </style>
</head>
<body>
 <h1>Form fill up </h1>
<form method="post" action="save.php" >
    <div class="input-group">
        <label>ID</label>
        <input type="number" name="id" value="">
    </div>
    <div class="input-group">
        <label>Name</label>
        <input type="text" name="name" value="">
    </div>
    <div class="input-group">
        <label>Address</label>
        <input type="text" name="address" value="">
    </div>
    <div class="input-group">
        <label>Phone Number</label>
        <input type="number" name="phone_number" value="">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="">
    </div>

    <div class="input-group">
        <button class="btn" type="submit" name="save" >Save</button>
    </div>
</form>
</body>
</html>