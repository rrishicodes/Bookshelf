<?php
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['number'];
$d=$_POST['message'];
$con=mysqli_connect("localhost","root","","bookshelf");

$ins="insert into contact_data(name,email,mobile,message)values('$a','$b','$c','$d')";

if(mysqli_query($con,$ins))
{
    header("location:contact.php");

    alert("submit message");
}