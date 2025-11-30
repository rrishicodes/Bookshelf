<?php
$conn=mysqli_connect("localhost","root","","bookshelf");
if(!$conn)
{
    echo " no connection";
}
else{
   # echo " connection ";
}
$sel="select*from contact_data";
$res=mysqli_query($conn,$sel);
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

   </style>
</head>
<body>
    <div class="container-fluid style" style="z-index:999; ">
        <div class="row">
            <div class="col-sm-12 p-2 "> Admin Dashboard</div>
        </div>
    </div>
    <div class="container-fluid" style="width:100%;">
        <div class="row" style="background: rgb(185, 205, 248);">
            <div class="col-sm-3 side_bar pt-2 ">
                <img src="../img/elf-icon.png" alt="" height="50px">&nbsp;<span style="font-size: xx-large; font-family: cursive; ">Bookshelf</span><br>
                 <div class="style_n row mt-2">
                     <div class="col-sm-12 p-2 "><a href="dashboard.php" class="text_n"  style="text-decoration: none;">Dashboard</a></div>
                 </div>
                <br>
                <a href="all_registration.php" class="text" style="text-decoration: none;">All Registration</a><br><br>
                <a href="all_contact.php" class="text" style="text-decoration: none;">All Contact</a><br><br>
                <a href="add_gallary.php" class="text" style="text-decoration: none;">Add Gallery</a><br><br>
                <a href="show_gallary.php" class="text" style="text-decoration: none;">Show Gallery </a><br><br>
                <a href="add_category.php" class="text" style="text-decoration: none;">Add Category</a><br><br>
                <a href="show_category.php" class="text" style="text-decoration: none;">Show Category</a><br><br>
                <a href="add_books.php" class="text" style="text-decoration: none;">Add Books</a><br><br>
                <a href="show_books.php" class="text" style="text-decoration: none;">Show Books</a><br><br>
                <a href="change_password.php" class="text" style="text-decoration: none;">Change Password</a><br><br>
                <a href="logout.php" class="text" style="text-decoration: none;">Log Out</a><br><br><br>
                <br>
            
            </div>
            <div class="col-sm-9 p-3 ">
                <center>
                <table class="table table-bordered table_style table-responsive " style="width:64%" >
                 <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Phone Number</th>
                     <th>Message</th>
                     <th>Delete</th>
                </tr>
                 <?php while($r=mysqli_fetch_array($res,MYSQLI_BOTH))
                 {?>
                 <tr>
                     <td class="element"><?php echo $r['0']?></td>
                     <td class="element"><?php echo $r['1']?></td>
                     <td class="element"><?php echo $r['2']?></td>
                     <td class="element"><?php echo $r['3']?></td>
                     <td class="element"><?php echo $r['4']?></td>
                     <td><a href="delete_contact.php?ids=<?php echo $r['0'];?>">Delete</a></td>

                 </tr>
                 <?php
                 }
                 ?>
                </table>
                </center>
            </div>
                    
            
        </div>
    </div>
</body>
</html>