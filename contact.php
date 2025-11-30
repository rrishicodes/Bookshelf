<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
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
       color : white;
        font-weight: bold;
        position:absolute;
        top:8%;
        left: 47%;
        transform: translate(-50%, -50%);

        text-align: center;

      }
      #bg-text-t{
        color : white;
        font-weight: bold;
        position:absolute;
        top:18%;
        left: 49%;
        transform: translate(-50%, -50%);

        text-align: center;
       
      }
      #float{
        float: left;
      }
      </style>
</head>
<body  >
  
  <div class="bg-image"></div>
  <div class="container-fluid" id="bg-text" >
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <img src="./img/elf-icon.png" height="50px" class="img-fluid" width="50px" alt="">
        <h1 class="font-weight-bold navbar-text " style="font-family: cursive;"> BOOKSHELF</h1>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
  <!--  -->
    <div class="container-fluid" id="bg-text-t">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="font-family: cursive;">
                <a style="text-decoration: none;" href="index.php" class="nav-item  text-light ">Home</a>
       &nbsp;   <a style="text-decoration: none;" href="category_books.php" class="nav-item  text-light">Books</a>
       &nbsp;   <a style="text-decoration: none;" href="gallary.php" class="nav-item  text-light">Gallary</a>
       &nbsp;   <a style="text-decoration: none;" href="contact.php" class="nav-item  text-light underline">Contact</a>
       &nbsp;   <a style="text-decoration: none;" href="./aboutus.php" class="nav-item  text-light">About Us </a>

        </div>
        <div class="col-sm-4"></div>
      </div>
    </div> 

  <form action="contact_code.php" method="post" class="bg-text bg-image-s">
  <h1 class=" font-weight-bold " style="font-family: cursive;" > Contact</h1>
  <span>For all enquiries, please email us using the form below</span><br><br>
   
   <input type="text" name="name" id=""  style="height: 40px; width: 400px;"  class="border rounded" maxlength="30"  placeholder="Name" ><br><br>
 
  <input type="email"  style="height: 40px; width: 400px;" name="email" class="border rounded" maxlength="20" placeholder="Email"><br><br>
  
  <input type="number" style="height: 40px; width: 400px;" name="number" class="border rounded " maxlength="10" placeholder="Mobile number"><br><br>
  
  <textarea style="height: 40px; width: 400px;" name="message" class="border rounded" placeholder="Your message" cols="30" rows="50"></textarea><br><br>
  <button style="height: 40px; width: 400px; background: linear-gradient(skyblue,rgb(139, 139, 219));" class="border rounded font-weight-bold"> Continue</button>
  
  </form>
  <!--  -->
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9685958042364!2d78.12909768781171!3d29.38226306659753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390bee38465daf5f%3A0x363e82424e405f75!2sPankaj%20Pustak%20Bhandar!5e0!3m2!1sen!2sin!4v1633417787678!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  <!--  -->
  <div class="badge-dark container-fluid pl-5 pr-5 pb-2 pt-2 ">
    <div class="row p-4">
      <div class="col-sm-4 p-4">
          <img src="./img/elf-icon.png" height="50px"  class="img-fluid" width="50px" alt="">
          <span class="font-weight-bold  text-light" style="font-size:270%;font-family: cursive;"> BOOKSHELF</span>
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
      <div class="col-sm-4"></div>
      <div class="col-sm-4 text-right" style="font-family: cursive;">
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
</htphp