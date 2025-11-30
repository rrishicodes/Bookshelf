<?php
$conn=mysqli_connect("localhost","root","","bookshelf");
if(!$conn)
{
    echo " no connection";
}
else{
   # echo " connection ";
}
$sel="select * from books  limit 0,6";
$res=mysqli_query($conn,$sel);

$select="select * from books limit 0,6";
$rest=mysqli_query($conn,$select);
$selbook="select * from books where id='".$_REQUEST['id']."'";
$resbook=mysqli_query($conn,$selbook);
$rowbook=mysqli_fetch_array($resbook,MYSQLI_BOTH);
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
          .dropbtn {
            font-size: 16px;
            border: none;
          }

          .dropdown {
            position: relative;
            display: inline-block;
          }

          .dropdown-content {
            display: none;
            background:white;
            position: absolute;
            min-width: 300px;
            z-index: 1;
          }

          .dropdown-content a {
            color: black;
            text-decoration: none;
            display: block;
          }

          .dropdown-content a:hover {background-color: #ddd;}

          .dropdown:hover .dropdown-content {display: block ;}

          .dropdown:hover .dropbtn {color: #075aa8;}
        
          .arrow {
           border: solid black;
           border-width: 0 2px 2px 0;
           display: inline-block;
           padding: 3px;
          }     
        
          .down {
           transform: rotate(45deg);
           -webkit-transform: rotate(45deg);
          }
          .text-decoration{
            text-decoration: none;
          }
          #pages-size{
            height: 35px;
            width: 35px;
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
          .heading{
            font-size:larger;
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
            <button class="btn " data-target="#registration" data-toggle="modal">Registration</button>
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
        <form action="search.php">
        <input type="text" name="" id="" placeholder="Search Books" class="border rounded-left "><button  class="border border-danger rounded-right bg-danger  "><img src="./img/icons8-search-50.png"  height="20px" width="20px"alt=""></button> &nbsp;
        </form>
    </nav>
        <!--  -->
        <div class="container-fluid">
            <a href="book_page.php" class="text-dark" style="color: black;">&#10094; back to results</a><br>
            <div class="row">    
              <div class="col-sm-3"> <img src="./img/book_img/<?php echo $rowbook['1']?>" class="img-fluid p-2" height="100%" width="100%" alt=""></div>
                <div class="col-sm-9 text-capitalize">
                    <h2 ><?php echo $rowbook['2']?><span class="text-muted" style="font: size 40px;"> bookshelf edition</span></h2>by <span class="text-info"> <?php echo $rowbook['4']?>  </span> 
                      <span class="text-muted">(Author)&nbsp;&nbsp;|&nbsp;&nbsp;format:</span>&nbsp;<span class="text-danger">Bookself edition</span>
                      <hr>
                      <center>
                      <div class="row">
                          <div class="col-sm-3 card">
                            <div class="card-body">
                              <div class="card-title p-0">bookshelf edition</div>
                              <div class="card-text text-danger"><?php echo $rowbook['3']?></div>
                            </div>
                          </div>
                          <div class="col-sm-3 card">                      
                            <div class="card-body text-muted">
                              <div class="card-title p-0 ">soft cover</div>
                              <div class="card-text text-danger">330.00</div>
                            </div>
                          </div>
                          <div class="col-sm-3 card">                      
                            <div class="card-body text-muted">
                              <div class="card-title p-0 ">hard cover</div>
                              <div class="card-text text-danger">330.00</div>
                            </div>
                          </div>
                      </div>
                      </center>
                      <br>
                      <div class="row">
                        <div class="col-sm-3 border rounded badge-warning text-center p-2"> <a href="" style="text-decoration: none;" class="text-light font-weight-bold">Add to cart</a></div>&nbsp;
                        <div class="col-sm-3  border rounded badge-warning text-center p-2"><a href="" style="text-decoration: none white; "  class="text-light font-weight-bold"  > Buy now</a></div>
                        <div class="col-sm-6"></div>
                      </div> <br>
                      <hr>
                      <br>
                      <div class="row">
                        <div class="col-sm-8">
                          <p> An exquisitely designed leather-bound edition of one of the most powerful self-help title, this book comes with a ribbon bookmark, gilded edges and beautiful endpapers. Ideal to be read and treasured, it makes for a perfect addition to any library. This remarkable book by Dr. Joseph Murphy, one of the pioneering voices of affirmative-thinking, will unlock for you The truly staggering powers of your Subconscious mind. Combining time-honoured spiritual wisdom with cutting edge scientific research, Dr. Murphy explains<span id="dots">...</span>
                              <span id="more" style="display: none;">how the subconscious mind influences every single thing that you do and how, by understanding It and learning to control its incredible force, you can improve the quality of your daily life. Everything, from the promotion that you wanted and the raise you think you deserve, to overcoming phobias and bad habits and strengthening interpersonal relationships, The power of your Subconscious mind will open a world of happiness, success, prosperity and peace for you. It will change your life and your world by changing your beliefs.
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
                        <div class="col-sm-4"></div>
                      </div>
                      <br><hr><br>
                      <div class="row text-center">
                        <div class="col-sm-2 font-weight-bold "><span class="text-muted font-weight-bold">Pages</span> <br> <img src="./img/pages.png" id="pages-size" alt=""> <br> 256 pages</div>
                        <div class="col-sm-2 font-weight-bold "> <span class="text-muted font-weight-bold"> language</span> <br> <img src="./img/worldwide.png" id="pages-size" alt=""><br> English</div>
                        <div class="col-sm-2 font-weight-bold "><span class="text-muted font-weight-bold"> Publisher</span>   <br> <img src="./img/building.png" id="pages-size" alt=""><br> Fingerprint! publishing</div>
                        <div class="col-sm-2 font-weight-bold "> <span class="text-muted font-weight-bold"> Publishing Date</span>  <br> <img src="./img/calendar.png" id="pages-size" alt=""><br> 1 December</div>
                        <div class="col-sm-2 font-weight-bold "> <span class="text-muted font-weight-bold"> Dimentions</span>  <br> <img src="./img/circuit.png" id="pages-size" alt=""><br> 20 x 14 x 14</div> 
                        <div class="col-sm-2"></div>
                      </div>
                </div>
              </div>
            </div>
        </div>
        <br> <hr> <br>
        <!--  -->
        <h2 class="p-4"> Customer who bought this item also bought</h2><br>
        <div class="container-fluid text-capitalize">
          <div class="row">
          <?php while($r=mysqli_fetch_array($res,MYSQLI_BOTH))
                 {?>
            <div class="col-sm-2" >
              <a href="bookpage.php?id=<?php echo $r['0']?>" class="text-dark" style="text-decoration: none;">
                <img src="./img/book_img/<?php echo $r['1']?>" alt="" class="card-img-top" height="200px">
                      <h2 class="card-title text-left font-italic" style="font-size: small;"><?php echo $r['2']?></h2>
                      <p class="card-text " style="font-size: smaller;">by <span class="text-uppercase"><?php echo $r['4']?></span></p>
              </a>
            </div>
            <?php
                 }
        ?>  
          </div>
        </div>
      <br><hr><br>
      <h2 class="p-4"> Product related to this item</h2><br>
        <div class="container-fluid text-capitalize">
          <div class="row">
          <?php while($re=mysqli_fetch_array($rest,MYSQLI_BOTH))
                 {?>
            <div class="col-sm-2" >
              <a href="bookpage.php?id=<?php echo $re['0']; ?>" class="text-dark" style="text-decoration: none;">
                <img src="./img/add_gallary/<?php echo $re['1']?>" alt="" class="card-img-top" height="200px">
                    <h2 class="card-title text-left font-italic" style="font-size: small;"><?php echo $re['2']?></h2>
                    <p class="card-text " style="font-size: smaller;">by <span class="text-uppercase"><?php echo $re['4']?></span></p>
              </a>
            </div>
            <?php
                 }
        ?>  
          </div>
        </div>
      <hr>
      <h2 class="text-muted p-2">Product description</h2>
      <h3 style="text-decoration-color: black;" class="p-2">About the author</h3>
      <p class="pl-5 pt-2 ml-2-">Rhonda byrne was a Divine Science minister and author. Murphy was born in Ireland, the son of a private boy’s school headmaster and raised a Roman Catholic. He studied for the priesthood and joined the Jesuits. In his twenties, an experience with healing prayer led him to leave the Jesuits and move to the United States. Murphy has given lectures and written books for audiences all over the world. In his lectures he points out how real people can radically improve their lives by applying specific aspects of his concepts.</p>
                              
    <!--  -->
    
                              
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
                                  <div class="form-group text-center">
                                    Do you have an account? <a href=""  data-target="#login" data-toggle="modal"  data-dismiss="modal"  data-dismiss="modal">Sign in</a> 
                                </div>
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
                  Email <input type="email" class="form-control" name="email" id="">
                  Password <input type="password" name="password" class="form-control" id="">
                  <br>
                  <button class="form-control badge-dark font-weight-bold">LOGIN</button>
                  </form>
              </div>
          </div>
      </div>
    </div>