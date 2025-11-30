
<?php
$conn=mysqli_connect("localhost","root","","bookshelf");
if(!$conn)
{
    echo " no connection";
}
else{
   # echo " connection ";
}
$sel="select*from user_registration";
$res=mysqli_query($conn,$sel);
?>

<?php
$con=mysqli_connect("localhost","root","","bookshelf");
if(!$con)
{
    echo " no connection";
}
else{
   # echo " connection ";
}
$select="select * from books";
$rest=mysqli_query($con,$select);
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Bookself</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="icon" href="./img/book-shelf.png" type="image/x-icon">
    <style>
      body, html {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
      }
      
      * {
        box-sizing: border-box;
      }
      
      .bg-image {
        /* The image used */
        background-image: url("./img/Journal.jpg");
        
        /* Add the blur effect */
        filter: blur(8px);
        -webkit-filter: blur(8px);
        
        /* Full height */
        height: 100%; 
        
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      
      /* Position text in the middle of the page/image */
      .bg-text {
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
        color: white;
        font-weight: bold;
        border: 3px solid #f1f1f1;
        border-radius: 10px;
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        padding: 20px;
        text-align: center;
      }
      .bg-image-s{
        background-image: url("./img/Journal.jpg");
        
        /* Add the blur effect */
        
        /* Full height */
        
        
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

      }
      #bg-text{
       /* Black w/opacity/see-through */
        color : black;
        font-weight: bold;
        text-align: center;
      }
      #bg-text-t{
        font-weight: bold;
        top:14%;
        text-align: center;
       
      }
      #float{
        float: left;
      }


      .dropdown {
        position: relative;
        display: inline-block;
        top:5%;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 179px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        border-radius:5px;
      }

      .dropdown-content a {
        color: black;
        padding: 8px 12px;
        text-decoration: none;
        display: block;
        border-radius:5px;
        text-align:left;
      }

      .dropdown-content a:hover {background-color: #ddd;}

      .dropdown:hover .dropdown-content {display: block;}
    
    </style>
    
</head>
<body class="" >
  <div class="container-fluid" id="bg-text" style="position:relative;" >
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <img src="./img/elf-icon.png" height="50px" class="img-fluid" width="50px" alt="">
        <h1 class="font-weight-bold navbar-text " style="font-family: cursive;"> BOOKSHELF</h1>
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-3">
      <div class="dropdown">
              <a class="dropbtn"><img src="img/user.png" height="40px"  alt=""></a>
              <div class="dropdown-content p-2">
                <a href="my_profile.php">update profile</a>
                <a href="" data-target="#cng_pass" data-toggle="modal">Change password</a>
                <a href="about.php">Get Help</a>
                <a href="">Settings</a>
                <a href="">cart</a>
                <a href="logout_user.php">Logout</a>
              </div>
        </div>
      </div>
    </div>
  </div><br>
  <!--  -->
    <div class="container-fluid pb-2" id="bg-text-t"  >
      <div class="row" >
        <div class="col-sm-12" style="font-family: cursive; position:static;top:0px;z-index:999; width:100%;" >
                <a style="text-decoration: none;" href="index.php" class="nav-item  text-dark font-weight-bold  ">Home</a>
       &nbsp;   <a style="text-decoration: none;" href="category_books.php" class="nav-item  text-dark font-weight-bold ">Books</a>
       &nbsp;   <a style="text-decoration: none;" href="gallary.php" class="nav-item  text-dark font-weight-bold ">Gallary</a>
       &nbsp;   <a style="text-decoration: none;" href="contact us.php" class="nav-item  text-dark font-weight-bold ">Contact</a>
       &nbsp;   <a style="text-decoration: none;" href="./aboutus.php" class="nav-item  text-dark font-weight-bold ">About Us </a>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="container-fluid" >
            <div class="row">
                <div class="col-sm-12 p-0 " >
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100 img-fluid"  style="height:600px;" src="./img/qoutes.jpg" alt="Third slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 img-fluid"  style="height:600px;" src="./img/library.jpg" alt="Third slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 img-fluid"   style="height:600px;" src="./img/slider_1.jpg" alt="Third slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 img-fluid" style="height:600px;" src="./img/slider_2.jpg" alt="Third slide">
                          </div>
                          <div class="carousel-item ">
                            <img class="d-block w-100  img-fluid "   style="height:600px;" src="img/Journal.jpg" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 img-fluid "  style="height:600px;" src="./img/bookshelves.jpg" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev " href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
            </div>
        </div> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 pt-5 "><center><h2>SERVICES I CAN PROVIDE</h2><h6 class="text-muted">WE ARE MORE THEN HAPPY TO OFFER YOU</h6></center></div>
                <div class="col-sm-4"></div>
            </div>
        </div>
            <br>
      <div class="container-fluid">
        <div class="row" >
                  <div class="col-sm-4 carousel-inner " >
                      <div class="card text-center carousel-item active" style="height: 300px; width: 370px; ">
                        <br>
                        <img  src="./img/build.png" alt="" class="card-img-top" style="height: 15%;width:15%;margin:0px auto;">
                          <div class="card-body">
                              <h2 class="card-title">BUILD</h2>
                              <p class="card-text text-muted ">we are more then happy to offer you bla bla bla bla khcbsdkjc</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="card text-center" style="height: 300px; width: 370px; "><br>
                        <img style="height: 15%;width:15%;margin:0px auto;" src="./img/ideas.png" alt="" class="card-img-top" >
                          <div class="card-body">
                            <h2 class="card-title">IDEAS</h2>
                            <p class="card-text  text-muted">we are more then happy to offer you bla bla bla bla khcbsdkjc</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-4">
                          <div class="card text-center" style=" height: 300px; width: 370px; ">
                            <br>
                            <img style="height: 15%;width:15%;margin:0px auto;" src="./img/tech support.png" alt="" class="card-img-top" >
                                <div class="card-body">
                                  <h2 class="card-title">SUPPORT</h2>
                                  <p class="card-text  text-muted">we are more then happy to offer you bla bla bla bla khcbsdkjc</p>
                                </div>
                          </div>
                  </div>
                  <div class="col-sm-4">
                          <div class="card text-center" style="height: 300px; width: 370px; ">
                            <br>
                            <img style="height: 15%;width:15%;margin:0px auto;" src="./img/design.png" alt="" class="card-img-top" >
                                 <div class="card-body">
                                     <h2 class="card-title">DESIGN</h2>
                                     <p class="card-text  text-muted">we are more then happy to offer you bla bla bla bla khcbsdkjc</p>
                                 </div>
                          </div>
                  </div>
        </div>
      </div><br><br>
          <br>
          <img src="./img/scroller.jpg" width="100%" alt=""><br>
          <div class="container-fluid text-capitalize">
            <div class="row">
            <?php while($r=mysqli_fetch_array($rest,MYSQLI_BOTH))
                 {?>
              <div class="col-sm-2" >
                <a href="book_page.php" class="text-dark" style="text-decoration: none;">
                  <div class="card text-center mb-1 pb-1" style="padding: 0%; height: 320px;"><img src="./img/book_img/<?php echo $r['1']?>" alt="" class="card-img-top pb-1" height="200px">
                      <h2 class="card-title text-left font-italic" style="font-size: small;"><?php echo $r['2']?></h2>
                      <p class="card-text " style="font-size: smaller;">by <span class="text-uppercase"><?php echo $r['4']?></span></p>
                      <span class="card-text " style="font-size: smaller;" class="text-uppercase"><?php echo $r['4']?></span>
                  </div>
                </a>
              </div>
              <?php
                 }
        ?>
              
            </div>
        </div>  
        <br><br>

       
        <!-- about section -->
    <div class="text-center">
          <h2>BOOKSHELF PUBLISHERS</h2>
          <h5 class=" text-muted">We are more then happy to offer you</h5>
    </div>
    <div class="container-fluid">
      <div class="row p-5">
        <div class="col-sm-4  ml-5 mt-4 "><img src="./img/about pics.jpg" class="img-fluid" height="300px" width="450px" alt=""></div>
        <div class="col-sm-7 ml-5 mt-4">
           <p> Bookself Publishers- Good books to read! <br><br>

          Bookshelf Publishers, LLC is a rapidly growing traditional and independent small press that focuses on delivering exceptional content created by talented authors. Creative Texts publishes on average more than four dozen new release books per year in a variety of genres including post-apocalyptic fiction, westerns, science fiction, and more.<span id="dots">...</span>
          <br>
            <span id="more" style="display: none;"> Please take your time and browse all of our new release books, best sellers, and genres. Most of all, please check out our talent section and learn more about our authors and preferred narrators. We are confident you will find something you like, but if you are looking for something else, please let us know!
            </span>
          </p>
          <button onclick="myFunction()" id="myBtn" class="badge-danger border-danger rounded">Read more</button>
          <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
        </div>
      </div>  
    </div>
    <!-- comment section -->
<div class="bg-light-dark text-dark a">
        <div class="text-center"><h2 class="pt-3">LATEST FROM THE BLOG</h2><h5 class=" text-muted">We are more then happy to offer you</h5></div>
        <br><br> <br>
        <div>
          <h4 class="pl-5  ml-5"  > <a href="" class="text-dark" style="text-decoration: none;" > Lorem ipsum dolor sit amet consectetur adipisicing elit.</a> </h4>
          <div class="pl-5  ml-5">
            <a style="text-decoration: none;" href="" class=" text-muted"> <img src="./img/clock.png" style=" width:1.5%;" alt="">&nbsp; November 3, 2019</a> &nbsp; 
            <a style="text-decoration: none;" href="" class="text-muted"><img src="./img/comment.png" style=" width:1.5%;" alt=""> &nbsp;03 Comments </a> &nbsp;
            <a style="text-decoration: none;" href="" class="text-muted"> <img src="./img/tag.png" style="width: 1.5%;" alt=""> &nbsp;Link</a>
          </div>          
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-5"></div>
              <div class="col-sm-5"></div>
              <div class="col-sm-2" >&nbsp;&nbsp;&nbsp;<a href="" style="text-decoration: none;" class="text-muted"><img class="img-fluid" src="./img/user.png" style="width: 5%; text-decoration: none;"  alt="">&nbsp;  -By</a><a href="" class="text-dark text-truncate" style="text-decoration: none;"> Ana Jhonosn</a></div>
            </div>
          </div> 
        </div>
        <br>
        <div>
          <h4 class="pl-5  ml-5"  > <a href="" style="text-decoration: none;" class="text-dark" style="text-decoration: none;" > Lorem ipsum dolor sit amet consectetur adipisicing elit.</a> </h4>
          <div class="pl-5  ml-5">
            <a style="text-decoration: none;" href="" class=" text-muted"> <img src="./img/clock.png" style=" width:1.5%;" alt="">&nbsp; November 3, 2019</a> &nbsp; 
            <a style="text-decoration: none;" href="" class="text-muted"><img src="./img/comment.png" style=" width:1.5%;" alt=""> &nbsp;03 Comments </a> &nbsp;
            <a style="text-decoration: none;" href="" class="text-muted"> <img src="./img/tag.png" style="width: 1.5%;" alt=""> &nbsp;Link</a>
          </div>          
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-5"></div>
              <div class="col-sm-5"></div>
              <div class="col-sm-2" >&nbsp;&nbsp;&nbsp;<a href="" style="text-decoration: none;" class="text-muted"><img class="img-fluid" src="./img/user.png" style="width: 5%;"  alt="">&nbsp;  -By</a> <!-- problem --> <a style="text-decoration: none;" href="" class="text-dark"> Rahul</a></div>
            </div>
          </div> 
        </div>
        <br>
        <div>
          <h4 class="pl-5  ml-5"  > <a href="" class="text-dark" style="text-decoration: none;" > Lorem ipsum dolor sit amet consectetur adipisicing elit.</a> </h4>
          <div class="pl-5  ml-5">
            <a href="" style="text-decoration: none;" class=" text-muted"> <img src="./img/clock.png" style=" width:1.5%;" alt="">&nbsp; November 3, 2019</a> &nbsp; 
            <a href="" style="text-decoration: none;" class="text-muted"><img src="./img/comment.png" style=" width:1.5%;" alt=""> &nbsp;03 Comments </a> &nbsp;
            <a href="" style="text-decoration: none;" class="text-muted"> <img src="./img/tag.png" style="width: 1.5%;" alt=""> &nbsp;Link</a>
          </div>          
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-5"></div>
              <div class="col-sm-5"></div>
              <div class="col-sm-2" >&nbsp;&nbsp;&nbsp;<a href="" class="text-muted" style="text-decoration: none;"><img class="img-fluid" src="./img/user.png" style="width: 5%;"  alt="">&nbsp;  -By</a> <!-- problem --> <a href="" style="text-decoration: none;" class="text-dark"> GAURAV</a></div>
            </div>
          </div>
        </div>
        <br>
        <div>
          <h4 class="pl-5  ml-5"  > <a href="" class="text-dark" style="text-decoration: none;" > Lorem ipsum dolor sit amet consectetur adipisicing elit.</a> </h4>
          <div class="pl-5  ml-5">
            <a href="" style="text-decoration: none;" class=" text-muted"> <img src="./img/clock.png" style=" width:1.5%;" alt="">&nbsp; November 3, 2019</a> &nbsp; 
            <a href="" style="text-decoration: none;" class="text-muted"><img src="./img/comment.png" style=" width:1.5%;" alt=""> &nbsp;03 Comments </a> &nbsp;
            <a href="" style="text-decoration: none;" class="text-muted"> <img src="./img/tag.png" style="width: 1.5%;" alt=""> &nbsp;Link</a>
          </div>          
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-5"></div>
              <div class="col-sm-5"></div>
              <div class="col-sm-2" >&nbsp;&nbsp;&nbsp;<a href="" class="text-muted " style="text-decoration: none;"><img class="img-fluid" src="./img/user.png" style="width: 5%;"  alt="">&nbsp;  -By</a> <!-- problem --> <a href="" style="text-decoration: none;" class="text-dark">AMIT</a></div>
            </div>
          </div>
        </div> <br><br>
</div>
<!-- footer  -->
<div class="badge-dark container-fluid pl-5 pr-5 pb-2 pt-2 ">
  <div class="row p-4">
    <div class="col-sm-4 text-left">
      <div class="font-weight-bold" style="font-size:xx-large">
        <span style="border-bottom:5px solid rgb(252, 4, 4); "  >NEWS</span>LETTER
      </div>
          <br>
          <p> If you want any information or query, so you can Email </p>
          <input type="text" placeholder="Email"  class="border rounded-left"><button  class="border border-tomato rounded-right badge-tomato ">Send</button>
    </div>
    <div class="col-sm-4">
        <img src="./img/elf-icon.png" height="50px"  class="img-fluid" width="50px" alt="">
        <span class="font-weight-bold  text-light" style="font-size:270%"> BOOKSHELF</span>
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
<!-- change password -->
<div class="modal" id="cng_pass" >
  <div class="modal-dialog" >
      <div class="modal-content">
          <div class="modal-header" ><h1 class="modal-title">change password</h1> <button class="close"  data-dismiss="modal"><span >&times;</span></button></div>
          <div class="modal-body badge-light">
            <form action="change_user_password_code.php" method="post">
              Old password <input type="text" class="form-control" name="old_pass" id="">
               New Password <input type="text" name="new_pass" class="form-control" id="">
               Confirm Password <input type="password" name="con_pass" class="form-control" id=""><br><br>
              <button class="form-control badge-dark font-weight-bold">Change</button>
              </form>
          </div>
      </div>
  </div>
</div>