<?php
session_start();
$a=$_POST['email'];
$b=$_POST['password'];
$con=mysqli_connect("localhost","root","","bookshelf");
$select="select * from user_login where email='$a' or password='$b'";
$res=mysqli_query($con,$select);
$r=mysqli_fetch_array($res,MYSQLI_BOTH);

if($a=='' or $b=='')
{
  echo "ok";# header("location:admin.php");
}
else{
if($r['1']==$a)
{
    if($r['3']==$b)
    {
        $_SESSION['user']=$a;
       # echo " working";
        header("location:after_login.php");
    }
    else{
        echo "wrong password";
    }
}
else{
    echo "wrong email";
}
}
?>