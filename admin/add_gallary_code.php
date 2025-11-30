<?php

$a=$_FILES['img']['name'];
#echo $a;
#echo "<br>";

$b=$_FILES['img']['type'];
#echo $b;
#echo "<br>";

$c=$_FILES['img']['size'];
#echo $c;
#echo "<br>";

$d=$_FILES['img']['tmp_name'];
#echo $d;
#echo "<br>";
$con=mysqli_connect("localhost","root","","bookshelf");
if(!$con)
{
    echo" not working";
}
else{
   # echo"working";
}
$location="../img/add_gallary/";
$ins="insert into img(name)values('$a')";
if(mysqli_query($con,$ins))
{
    #echo "working";
    move_uploaded_file($d,$location.$a);
    echo header("location:add_gallary.php");
}
else{
    echo "not working";
}

?>