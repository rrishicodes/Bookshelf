<?php

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

 $conn=mysqli_connect("localhost","root","","bookshelf");
 if(!$conn)
 {
     echo"connection wrong";
 }
 else{
     #echo"connection ok";
 }
$ins="insert into user_registration(name,email,mobile,gender,city,state,address,password)values('$a','$b','$c','$d','$e','$f','$g','$h')";

if(mysqli_query($conn,$ins))
{
        # echo "data insert";
        $in="insert into user_login(email,mobile,password)values('$b','$c','$h')";
        if(mysqli_query($conn,$in))
            {
                #echo "data inserted";
                echo header("location:after_login.php");
            }
        else{
            echo"data not inserted in table";
            }

}
else{
    echo "data not inserted";
}
?>

 
