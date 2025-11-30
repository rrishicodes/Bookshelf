<?php
$conn=mysqli_connect("localhost","root","","bookshelf");
if(!$conn)
{
    echo " no connection";
}
else{
   # echo " connection ";
}
$sel="select * from books limit 0,12";
$res=mysqli_query($conn,$sel);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bookself</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="icon" href="./img/book-shelf.png" type="image/x-icon">
    <style>
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
      #hover{
        position:sticky;
        top:0px;z-index:999; 
        width:100%;
      }
    </style>
    <script>
      function demo() {
       var a=document.getElementById("hover");
        
      }

    </script>
</head>
<body class="" >
  <div class="container-fluid"  >
    <div class="row">
      <div class="col-sm-4" >
        <img src="./img/elf-icon.png"  class="img-fluid" width="50px" alt="" >
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
            <li class="nav-item"><a href="category_books.php" class="nav-link  text-dark"> Books category</a></li>
            <li class="nav-item"><a href="gallary.php" class="nav-link  text-dark">Gallary</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link  text-dark">Contact</a></li>
            <li class="nav-item"><a href="./aboutus.php" class="nav-link  text-dark">About Us </a></li>
            
        </ul>
    </div>
    <form action="search.php" method="post">
    <input type="text" name="search" id="" placeholder="Search Books" class="border rounded-left "><button  class="border border-danger rounded-right bg-danger  "><img src="./img/icons8-search-50.png"  height="20px" width="20px"alt=""></button> &nbsp;&nbsp;&nbsp;&nbsp;
  </form>
</nav>
        <!-- next line   -->
        
        <div class="container-fluid" style="top:0px;">
            <div class="row">
                <div class="col-sm-12 p-0 " >
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100 img-fluid"  style="height:700px;" src="./img/qoutes.jpg" alt="Third slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 img-fluid"  style="height:700px;" src="./img/library.jpg" alt="Third slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 img-fluid"   style="height:700px;" src="./img/slider_1.jpg" alt="Third slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 img-fluid" style="height:700px;" src="./img/slider_2.jpg" alt="Third slide">
                          </div>
                          <div class="carousel-item ">
                            <img class="d-block w-100  img-fluid "   style="height:700px;" src="img/Journal.jpg" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 img-fluid "  style="height:700px;" src="./img/bookshelves.jpg" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
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
          <img src="./img/scroller.jpg" width="100%" alt="">

        <div class="container-fluid text-capitalize">
            <div class="row">
            <?php while($r=mysqli_fetch_array($res,MYSQLI_BOTH))
                 {?>
              <div class="col-sm-2 mb-2" >
                <a href="books_page.php" class="text-dark" style="text-decoration: none;">
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
<!-- registration button -->
<div class="modal " id="registration" >
  <div class="modal-dialog " >
      <div class="modal-content ">
        <div class="modal-header" style="background: linear-gradient(red,rgba(248, 82, 32, 0.904));"><h1 class="modal-title">Registration</h1> <button class="close" data-dismiss="modal"><span >&times;</span></button></div>
          <div class="modal-body badge-light">
            <form action="registration_code.php" method="post">
                      <div class=" font-weight-bold">
                              <div class="form-group" >
                                  <label for="" class="text-dark" > Name</label>
                                  <input type="text" name="name"  id=""  required class="form-control">
                              </div>
              
                              <div class="form-group">
                                  <label for="" class="text-dark">Email</label>
                                  <input type="email" name="email" id=""  required class="form-control">
                              </div>
              
                              <div class="form-group">
                                  <label for="" class="text-dark"> Mobile</label>
                                  <input type="number" name="number" id=""  required class="form-control">
                              </div>
              
                              <div class="form-group">
                                  <label for="" class="text-dark">Gender</label> <br>
                                  <input type="radio" name="gen"  required value="Male" >&nbsp;Male<br>
                                  <input type="radio" name="gen"  value="Female">&nbsp;Female
                              </div>              
                              <div class="form-group">
                                <label for="" class="text-dark">City</label> <br>
                                <input type="text" class="form-control"  required name="city" placeholder="City">
                              </div>
              
                              <div class="form-group">
                                <label for="" class="text-dark">State</label> <br>
                                <input type="text" class="form-control" name="state" placeholder="State">
                              </div>
              
                              <div class="form-group">
                                  <label for="" class="text-dark"  required >Address</label>
                                  <textarea name="Address" id="" cols="30" rows="10" class="form-control"> </textarea>
                              </div>
              
                              <div class="form-group">
                                  <label for="" class="text-dark"  required>Password</label> 
                                  <input type="password" name="password" class="form-control">
                              </div>
                              <div class="form-group"><button class="form-control badge-dark font-weight-bold">Submit</button></div>
                              
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
            <form action="userlogincode.php" method="post">
              Email <input type="email" class="form-control"  required name="email" id="">
              Password <input type="password" name="password"  required class="form-control" id="">
              <a href="" data-target="#forgot" data-toggle="modal"  data-dismiss="modal">forgot password</a>
              <br>
              <button class="form-control badge-dark font-weight-bold">LOGIN</button>
              <div class="form-group text-center">
                 Don't you have an account? <a href=""  data-target="#registration" data-toggle="modal"  data-dismiss="modal">Sign up</a> 
              </div>
              </form>
          </div>
      </div>
  </div>
</div>
<div class="modal" id="forgot" >
  <div class="modal-dialog" >
      <div class="modal-content">
          <div class="modal-header"><h2 class="modal-title">forgot password</h2></div>
          <div class="modal-body badge-light">
            <form action="userlogincode.php" method="post">
              </form>
          </div>
      </div>
  </div>
</div>
