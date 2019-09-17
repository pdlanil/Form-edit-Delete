<?php
include_once "db.php";
$result = mysqli_query($conn,"SELECT * FROM cloud");
?>
<!DOCTYPE html>
<html>
<head>
    <title> Retrieve data</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: white;
        }</style>
</head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
    ?>
    <table >
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Address</td>
            <td>Phone Number</td>
            <td>Email</td>
        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["address"]; ?></td>
                <td><?php echo $row["phone_number"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><a href='edit.php?id=<?php echo    $row["id"]; ?>' >Edit</a>| <a href='delete.php?id=<?php echo    $row["id"]; ?>' > Delete </a> </td>
            </tr>
            <?php
            $i++;
        }
        ?>
    </table>
    <?php
}
else{
    echo "<h1>No data found</h1>";
}
?>
</body>
</html>
