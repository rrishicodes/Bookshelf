<?php
$a=$_POST['old_pass'];
$b=$_POST['new_pass'];
$c=$_POST['con_pass'];
session_start();
$sesid=$_SESSION['user'];
if(!$sesid){
   # header("location:dashboard.php");
   echo "not working";
}
$con=mysqli_connect("localhost","root","","bookshelf");
$select="select* from login_data where email='$sesid'";
$res=mysqli_query($con,$select);
$r=mysqli_fetch_array($res,MYSQLI_BOTH);
if($r['3']==$a)
{
    if($b==$c){
        $up="update login_data set password='$b' where email='$sesid'";
        if(mysqli_query($con,$up))
        {
            header("location:dashboard.php");
        }
        else{
            echo "password not change";
        }
    }
    else{
        echo "new and confirm password are not same";
    }
}
else{
    echo "old passwword is not same";
}
?>
