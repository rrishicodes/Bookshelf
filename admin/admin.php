<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <link rel="icon" href="../img/admin (1).png" type="image/x-icon">
    <title>Admin</title>
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
  background-image: url("../img/admin\ \(1\).png");
  
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
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  padding: 20px;
  text-align: center;
}
.bg-text-f{
  background-color: rgb(0, 0, 0);
  background-color: rgb(0, 0, 0, 0.4);
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1 ;
  border-radius: 10px;
  position:absolute;
  top: 108%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 101.5%;
  z-index: 2;
  padding: 10px;
  text-align: center;
}
</style>
</head>
<body>

<div class="bg-image"></div>

<form class="bg-text" action="adminlogincode.php" method="post" style="font-family: cursive;" >
  <img src="../img/admin (1).png" alt="">
  <h1> User Admin</h1>
  <h3>Login</h3>
  <input type="email"  style="height: 40px; width: 400px;" name="email" class="border rounded" maxlength="30" placeholder="Email"><br><br>
  <input type="password" style="height: 40px; width: 400px;" name="password" class="border rounded " maxlength="12" placeholder="Password"><br>
  <a href="" style="text-align:right; text-decoration: none;" class="text-light">forget password?</a><br>
  <button style="height: 40px; width: 400px; background: linear-gradient(skyblue,rgb(139, 139, 219));" class="border rounded font-weight-bold">Login</button>
  
</form><br>


</body>
</html>