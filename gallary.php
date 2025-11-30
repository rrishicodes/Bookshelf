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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
        <title>Gallary</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery-slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <link rel="icon" href="./img/book-shelf.png" type="image/x-icon">
        <style>
          .shadow{
            box-shadow: -6px -6px 6px 6px;
          }
          .btn:hover{
        background-color:black;
        color:white;
        font-weight:bold;
        border-radius:5px;
      }
      .btn{
        background-color:white;
        font-weight:bold;
        border-radius:5px;
      }
        </style>
</head>
<body>
  <div class="container-fluid" >
    <div class="row">
      <div class="col-sm-4">
        <img src="./img/elf-icon.png" height="50px" class="img-fluid" width="50px" alt="">
        <h1 class="font-weight-bold navbar-text " style="font-family: cursive;"> BOOKSHELF</h1>
      </div>
      <div class="col-sm-5"></div>
      <div class="col-sm-3 pt-3"> 
        <a href="https://www.facebook.com/rishu4075/">
          <img class="img-fluid"src="./img/fb3.png"  height="31px" width="31px" alt=""> 
        </a>&nbsp;&nbsp;
        <a style="text-decoration: none;" href="mailto:rishu9335205203@gmail.com">
          <img src="./img/google-gamil.png" class="img-fluid" height="38px" width="38px" alt=""> 
        </a>&nbsp;&nbsp;
        <a style="text-decoration: none;" href="https://twitter.com/RishuGu62261211">
          <img class="img-fluid" src="./img/twitter.png" height="32px" width="32px"  alt="">
        </a>&nbsp;&nbsp;
        <a style="text-decoration: none;" href="https://www.instagram.com/__rrishii__/">
          <img class="img-fluid" src="./img/i.png" height="30px" width="30px"  alt="">
        </a>
        <button class="btn " data-target="#login" data-toggle="modal">Login</button>
      </div>
    </div>
  </div>  
  <!-- next line -->
  <nav class="navbar navbar-expand-lg  bg-light" style="position:sticky;top:0px;z-index:999; width:100%;" >
    <button data-toggle="collapse" data-target="#abc" class="navbar-toggler text-right">
        <span class="navbar-toggler-icon ">
        </span>
    </button>
    <div class="collapse navbar-collapse" id="abc">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="index.php" class="nav-link  text-dark ">Home</a></li>
            <li class="nav-item"><a href="category_books.php" class="nav-link  text-dark">Books</a></li>
            <li class="nav-item"><a href="gallary.php" class="nav-link  text-dark">Gallary</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link  text-dark">Contact</a></li>
            <li class="nav-item"><a href="./aboutus.php" class="nav-link  text-dark">About Us </a></li>
            
        </ul>
    </div>
    <input type="text" name="" id="" placeholder="Search Books" class="border rounded-left "><button  class="border border-danger rounded-right bg-danger  "><img src="./img/icons8-search-50.png"  height="20px" width="20px"alt=""></button> &nbsp;&nbsp;&nbsp;&nbsp;
</nav>
    <!-- next line -->
    <br>
    <div class="container-fluid">
    
        <div class="row">
    <?php
    while ($r=mysqli_fetch_array($res,MYSQLI_BOTH))
    {
    ?>
      <div class="col-sm-2"><img height="80%" width="100%" class="shadow" src="./img/add_gallary/<?php echo $r['1']?>" alt=""></div>
    <?php
    }?> 
        
          </div>   
        
    </div>
    <!-- footer -->
    <div class="badge-dark container-fluid pl-5 pr-5 pb-2 pt-5 ">
        <div class="row p-3">
          <div class="col-sm-4 text-left">
            <div class="font-weight-bold" style="font-size:xx-large">
              <span style="border-bottom:5px solid rgb(248, 2, 2); "  >NEWS</span>LETTER
            </div>
                <br>
                <p> If you want any information or query, so you can Email </p>
                <input type="text" placeholder=" Email"  class="border rounded-left"><button  class="border border-danger rounded-right bg-danger  font-weight-bold " style="font-size:medium;">Send</button>
          </div>
          <div class="col-sm-4">
              <img src="./img/elf-icon.png" height="50px" class="img-fluid" width="50px" alt="">
              <span class="font-weight-bold  text-light" style="font-size:270%"> ℬ𝑜𝑜𝓀𝓈𝒽𝑒𝓁𝒻</span>
              <div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a style="text-decoration: none; "    href="https://www.facebook.com/rishu4075/">
                    <img class="img-fluid" src="./img/fb-square.png"  height="38px" width="38px" alt="">
                  </a>&nbsp;&nbsp;
                  <a style="text-decoration: none; "   href="">
                    <img src="./img/google square.png" class="img-fluid" height="30px" width="30px" alt=""> 
                  </a>&nbsp;&nbsp;
                  <a style="text-decoration: none; "  href="https://twitter.com/RishuGu62261211">
                    <img class="img-fluid" src="./img/twitter square.png" height="33px" width="33px"  alt="">
                  </a>&nbsp;&nbsp;
                  <a style="text-decoration: none; "  href="https://www.instagram.com/__rrishii__/">
                    <img class="img-fluid" src="./img/icons8-instagram-50.png" height="34px" width="34px"  alt="">
                  </a>
                  
              </div>
              </div>
          <div class="col-sm-4 text-right">
                <div class="font-weight-bold" style="font-size:xx-large">
                    CONTACT <span style="border-bottom:5px solid red; ">INFO</span>
                </div><br>
              LUCKNOW <br>
              Bookshelf <br>
              rishu9335205203@gamil.com <br>
              6388324426 <br>
               155/565 220023 <br>
              UTTAR PRADESH, INDIA
          </div>
        </div>
      </div>
      <div class="container-fluid" >
        <div class="row" >
            <div class="col-sm-12 badge-dark text-left  pl-5 pb-1 pt-1" style="background-color: black; font-size: small; ">Copyright 2015-2021 by Bookshelf Publishers, LLC. All Rights Reserved.</div>
        </div>
    </div>
</body>
</html>
<!-- registration button -->
<div class="modal " id="registration" >
  <div class="modal-dialog " >
      <div class="modal-content ">
        <div class="modal-header" style="background: linear-gradient(red,rgba(248, 82, 32, 0.904));"><h1 class="modal-title">Registration</h1> <button class="close" data-dismiss="modal"><span >&times;</span></button></div>
          <div class="modal-body badge-light">
            <form action="registration_code.php" method="post">
                      <div class=" font-weight-bold">
                              <div class="form-group" >
                                  <label for="" class="text-dark" >First Name</label>
                                  <input type="text" name="name"  id="" class="form-control">
                                  <label for="" class="text-dark" >Second Name</label>
                                  <input type="text" name="name"  id="" class="form-control">
                              </div>
              
                              <div class="form-group">
                                  <label for="" class="text-dark">Email</label>
                                  <input type="email" name="email" id="" class="form-control">
                              </div>
              
                              <div class="form-group">
                                  <label for="" class="text-dark"> Mobile</label>
                                  <input type="number" name="number" id="" class="form-control">
                              </div>
              
                              <div class="form-group">
                                  <label for="" class="text-dark">Gender</label> <br>
                                  <input type="radio" name="gen" value="Male" >&nbsp;Male <br>
                                  <input type="radio" name="gen"  value="Female">&nbsp;Female
                              </div>              
                              <div class="form-group">
                                <label for="" class="text-dark">City</label> <br>
                                <input type="text" class="form-control" placeholder="City">
                              </div>
              
                              <div class="form-group">
                                <label for="" class="text-dark">State</label> <br>
                                <input type="text" class="form-control" placeholder="State">
                              </div>
              
                              <div class="form-group">
                                  <label for="" class="text-dark" >Address</label>
                                  <textarea name="Address" id="" cols="30" rows="10" class="form-control"> </textarea>
                              </div>
              
                              <div class="form-group">
                                  <label for="" class="text-dark">Password</label> 
                                  <input type="password" name="password" class="form-control">
                              </div>
                              <div class="form-group"> <button class="form-control badge-dark font-weight-bold">Submit</button></div>
                      </div>
                  </div>
              </div>
            </form>
          </div> 
        </div>         
      </div>
  </div>
</div>
<!-- Login button -->
<div class="modal" id="login" >
  <div class="modal-dialog" >
      <div class="modal-content">
          <div class="modal-header" style="background: linear-gradient(red,rgba(248, 82, 32, 0.904));"><h1 class="modal-title">Login</h1> <button class="close"  data-dismiss="modal"><span >&times;</span></button></div>
          <div class="modal-body badge-light">
            <form action="logincode.php" method="post">
              Email <input type="email" class="form-control" name="email" id="">
              Password <input type="password" name="password" class="form-control" id="">
              <br>
              <button class="form-control badge-dark font-weight-bold">LOGIN</button>
              <div class="form-group text-center">
                 Don't you have an account? <a href=""  data-target="#registration" data-toggle="modal"  data-dismiss="modal">Sign up</a> 
              </div>
              </form>
          </div>
      </div>
  </div>
</php