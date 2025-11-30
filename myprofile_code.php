<?php


$i=$_FILES['img']['name'];
$j=$_FILES['img']['type'];
$k=$_FILES['img']['size'];
$l=$_FILES['img']['tmp_name'];

$a=$_POST['name'];
#echo $a;
#echo "<br>";

$b=$_POST['email'];
# echo $b;
#echo "<br>";

$c=$_POST['number'];
#echo $c;
#echo"<br>";

$d=$_POST['gen'];
#echo $d;
#echo"<br>";

$e=$_POST['city'];
#echo $f;
#echo "<br>";

$f=$_POST['state'];
#echo $g;
#echo "<br>";

$g=$_POST['Address'];
# echo $h;
# echo "<br>";

$h=$_POST['password'];
# echo $i;
# echo "<br>";

$upid=$_POST['ids'];

 $conn=mysqli_connect("localhost","root","","bookshelf");
 if(!$conn)
 {
     echo"connection wrong";
 }
 else{
     #echo"connection ok";
 }
 $location="./img/user_images/";

$update="update user_registration set img_name='$i',name='$a',email='$b',mobile='$c',gender='$d',city='$e',state='$f',address='$g' where id='$upid'";

if(mysqli_query($conn,$update))
{
        # echo "data insert";
        $up="update user_login set email='$b',mobile='$c',password='$h' where id='$upid'";
        if(mysqli_query($conn,$up))
            {
                #echo "data inserted";
                move_uploaded_file($l,$location.$i);
                echo header("location:my_profile.php");
            }
        else{
            echo"data not inserted in table";
            }

}
else{
    echo "data not inserted";
}
?>

 
