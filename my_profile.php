
<!DOCTYPE html>
<html lang="en">
<head>
   <title>My profile</title>
   <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="icon" href="./img/book-shelf.png" type="image/x-icon">
    <?php
$conn=mysqli_connect("localhost","root","","bookshelf");
if(!$conn)
{
    echo"connection failed";

}
else{
    #echo"connection ok";
}
session_start();
$ses=$_SESSION['user'];
$sel="select * from user_registration where email='$ses'";
$res=mysqli_query($conn,$sel);
$r=mysqli_fetch_array($res,MYSQLI_BOTH);
?>
</head>
<body class="badge-dark">
<form action="myprofile_code.php" method="post"  enctype="multipart/form-data">
    <center class="p-5">
       <img src="img/user_images/<?php echo $r['1']?>" style="border-radius:50%;" height="150px" width="150px" value=""  alt=""><br><br>
       <input type="file" name="img" value="" id="">
    </center>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <input type="hidden" name="ids" value="<?php echo $r['0']?>">
                    <label for="">Name</label><br>
                    <input class="form-control" name="name" type="text" value="<?php echo $r['2']?>"><br>
                    <label for="">Email</label><br>
                    <input class="form-control" name="email" type="text" value="<?php echo $r['3']?>"><br>
                    <label for="">Mobile</label><br>
                    <input class="form-control" name="number" type="text" value="<?php echo $r['4']?>"><br>
                    <label for="">Gender</label><br>
                    <input type="radio" name="gen" value="Male"
                    <?php
                    if($r['5']=='Male')
                    {
                        echo"checked";
                    }
                    ?>
                     >&nbsp;Male <br>
                    <input type="radio" name="gen"  value="Female" 
                    <?php
                    if($r['5']=='Female')
                    {
                        echo"checked";
                    }
                    ?>
                    >&nbsp;Female
                    
                    <br>
                    <label for="">City</label><br>
                    <input class="form-control" type="text" name="city" value="<?php echo $r['6']?>"><br>
                    <label for="">State</label><br>
                    <input class="form-control" type="text" name="state" value="<?php echo $r['7']?>"><br>
                    <label for="">Address</label><br>
                    <textarea name="Address" id="" cols="30" rows="10" class="form-control"><?php echo $r['8'];?> </textarea><br>
                    <button class="btn form-control">update</button>

            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</form><br><br> 
    
</body>
</html>