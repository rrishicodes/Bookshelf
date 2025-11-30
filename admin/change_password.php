<?php

$con=mysqli_connect("localhost","root","","bookshelf");
if(!$con)
{
    echo "no connection";
}
else{
  #  echo "connection";
}
$select="select *from img";
$res=mysqli_query($con,$select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
   <title>Dashoard</title>
   <link rel="icon" href="../img/admin (1).png" type="image/x-icon">
   <style>
       .style{
           background:linear-gradient(white,rgb(238, 189, 54));
           font-size: xx-large;
           text-align: center;
       }
       .style_n{
           background:linear-gradient(rgb(224, 95, 95),rgb(88, 88, 88));
           font-size: larger;
           
       }
       .side_bar{
           height: 100%;
           background: linear-gradient(rgb(114, 170, 253),rgb(73, 73, 248));
           width: 100%;
           text-align: center;
           font-size:larger;
           font-weight: 700;
       }
       .text{
           color: cornsilk;
       }
       .text:hover{
           color: darkblue;
       }
       .text_n{
           color: rgb(26, 25, 24);
       }
       .text_n:hover{
        color: rgb(26, 25, 24);
       }
       #back{
           background: linear-gradient(rgb(226, 248, 30),rgb(255, 60, 0),brown);
           border-radius: 10px;
       }
       #back:hover{
        background: linear-gradient(rgb(226, 248, 30),rgb(132, 132, 228),red);
       }
       .table_style{
           background:linear-gradient(white,rgb(65, 62, 62));
           color: black;
       }
       .element{
        font-weight: 450;
       }
       #reset{
           text-align:left;

       }
       #resetn{
           text-align:right;
         

       }
       .left{
           float:left;
       }

   </style>
    <script>
        function demo()
        {
            alert('Password');
        }
    </script>
</head>
<body>
    <div class="container-fluid style" style="z-index:999; ">
        <div class="row">
            <div class="col-sm-12 p-2 "> Admin Dashboard</div>
        </div>
    </div>
    <div class="container-fluid" style="width:100%;">
        <div class="row" style="background: rgb(185, 205, 248);">
            <div class="col-sm-2 side_bar pt-2 ">
                <img src="../img/elf-icon.png" alt="" height="50px">&nbsp;<span style="font-size: xx-large; font-family: cursive; ">Bookshelf</span><br>
                 <div class="style_n row mt-2">
                     <div class="col-sm-12 p-2 "><a href="dashboard.php" class="text_n"  style="text-decoration: none;">Dashboard</a></div>
                 </div>
                <br>
                <a href="all_registration.php" class="text" style="text-decoration: none;">All Registration</a><br><br>
                <a href="all_contact.php" class="text" style="text-decoration: none;">All Contact</a><br><br>
                <a href="add_gallary.php" class="text" style="text-decoration: none;">Add Gallery</a><br><br>
                <a href="show_gallary.php" class="text" style="text-decoration: none;">Show Gallery </a><br><br>
                <a href="" class="text" style="text-decoration: none;">Add Category</a><br><br>
                <a href="" class="text" style="text-decoration: none;">Show Category</a><br><br>
                <a href="" class="text" style="text-decoration: none;">Add Books</a><br><br>
                <a href="" class="text" style="text-decoration: none;">Show Books</a><br><br>
                <a href="change_password.php" class="text" style="text-decoration: none;">Change Password</a><br><br>
                <a href="logout.php" class="text" style="text-decoration: none;">Log Out</a><br><br><br>
                <br>
            
            </div>
            <div class="col-sm-10 p-5 " >
                <center>
                        <div class="col-sm-5 p-5  m-5">
                            <form action="change_password_code.php" method="post" >
                                <h3>Change password</h3>
                                <input type="text" name="old_pass" class="form-control" id="" placeholder="OLD PASSWORD">
                                <input type="text" class="form-control" name="new_pass" id="" placeholder="NEW PASSWORD">
                                <input type="text" class="form-control" name="con_pass" id=""placeholder="COMFIRM PASSWORD"><br>        
                                <button class="btn form-control btn-dark" onclick="demo()">Change</button>                  
                            </form>
                        </div>
                </center>
            </div>
        </div>
    </div>
</body>
</html>
