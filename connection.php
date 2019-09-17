<?php

$servername="localhost";
$username="root";
$password="";
$dbname="student";

//creation a new database student
$connect=new mysqli($servername,$username,"");
if ($connect->connect_error){
    die("<h1>connection failed:</h1>".$connect->connect_error);
}
echo "<h1> connected successfully</h1>";
$sql = "CREATE DATABASE student";
if ($connect->query($sql) === TRUE) {
    echo "<h1>Database created successfully</h1>";
} else {
    echo "<h1>Error creating database: </h1>" . $connect->error;
}
$connect->close();




//adding table in database student
$conn = new mysqli($servername,$username,"",$dbname);
if ($conn->connect_error){
    die("<h2>connection failed:</h2>".$conn->connect_error);
}
echo "<h2>connected successfully</h2>";

#table contents
$sql= "create table cloud(
id integer(5)  UNIQUE PRIMARY KEY,
name varchar(20) NOT NULL,
address varchar(30) NOT NULL,
phone_number integer (10),      
email varchar(50) NOT NULL 
)";
if ($conn->query($sql) === TRUE) {
    echo "<h2>Table cloud created successfully</h2>";
} else {
    echo "<h2>Error creating table:</h2> " . $conn->error;
}
$conn->close();




// adding data inside table in database
$con = new mysqli($servername,$username,"",$dbname);
if ($con->connect_error){
    die("<h3> addition connection failed:</h3>".$con->connect_error);
}
echo "<h3>addition connected successfully</h3>";

//adding data to table
$sql = "INSERT INTO cloud(id,name,address,phone_number,email)
VALUES (23,'James', 'Ohio', 56565556,'john@example.com');";
$sql.= "INSERT INTO cloud(id,name,address,phone_number,email)
VALUES (12,'Jonny', 'NY', 5656456,'jonny@example.com');";
$sql.= "INSERT INTO cloud(id,name,address,phone_number,email)
VALUES (10,'Messi', 'Argentina',9845655,'messi@gmail.com');";
$sql.= "INSERT INTO cloud(id,name,address,phone_number,email)
VALUES (7,'Ronaldo', 'Portugal', 7894566,'Ronaldo@portugal.com');";
$sql.= "INSERT INTO cloud(id,name,address,phone_number,email)
VALUES (8,'Xavi', 'Dubai', 52346456,'xavi@spain.com');";

if ($con->multi_query($sql) === TRUE) {
    echo "<h3>New records created successfully</h3>";
} else {
    echo "<h3>Error:</h3> " . $sql . "<br>" . $con->error;
}
$con->close();

?>
