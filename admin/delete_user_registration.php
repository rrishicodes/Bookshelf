<?php
$conn=mysqli_connect("localhost","root","","bookshelf");
if(!$conn)
{
    echo"connection failed";

}
else{
   # echo"connection ok";
}
$delid=$_REQUEST['ids'];
$del="delete from user_registration where id=$delid";
if(mysqli_query($conn,$del))
{
   
    echo header("all_registration.php");
}
else{
    echo "data not deleted";
}
?>