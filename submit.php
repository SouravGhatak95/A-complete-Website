<?php

session_start();

header('location:explorelovers.php');

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'submit');

$email=$_POST['email'];
$number=$_POST['number'];

$s="select * from table1 where email='$email' ";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if ($num==1) {
	echo "Email Id Already Exist";
} else {
	$reg="insert into table1(email,number) values('$email','$number')";
    mysqli_query($con,$reg);
    echo "Info submited";
}

?>