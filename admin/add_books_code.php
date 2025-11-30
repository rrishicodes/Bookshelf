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
$e=$_POST['name'];
$f=$_POST['price'];
$g=$_POST['author'];
$con=mysqli_connect("localhost","root","","bookshelf");
if(!$con)
{
    echo" not working";
}
else{
   # echo"working";
}
$location="../img/book_img/";
$ins="insert into books(img_name,name,price,author_name)values('$a','$e','$f','$g')";
if(mysqli_query($con,$ins))
{
    #echo "working";
    move_uploaded_file($d,$location.$a);
    echo header("location:add_books.php");
}
else{
    echo "not working";
}

?>