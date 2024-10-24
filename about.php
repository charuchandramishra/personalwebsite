<?php
$con = mysqli_connect("localhost:3307" , "root");

if($con){
    echo "connection successful";
}
else{
    echo "connection failed";
}

mysqli_select_db($con ,"website");
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$query = "INSERT INTO users (name , email , mobile) VALUES ('$name', '$email', '$mobile')";

mysqli_query($con,$query);
header("location:index.php");

?>