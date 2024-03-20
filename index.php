<?php

@include 'config.php';

session_start();

if(!isset($_SESSION[''])){
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>homepage</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css.css">

</head>
<body>
   
<!-- <div class="container1">

   <div class="content">
      <h3><span>WELCOME TO</span></h3>
      <br>
      <h1>YABA COLLEGE OF EDUCATION</h1>
      <br>
      <h3><span>IME EMRS</span></h3>
      <br>
      <br>
      <a href="about.php" class="btn">About EMRS</a>
      <a href="registration.php" class="btn">Register</a>
      <a href="login.php" class="btn">DASHBOARD</a>
      <a href="contact.php" class="btn">Contact US</a>
   </div>

</div> -->

<div class="index-container">
            <nav class="">
                <div class="" style="display: flex; justify-content: space-around; gap: 20px; align-items: center;">
                    <div class="">
                        <img src="./code.pic/Yaba_logo_3.png" alt="" class="" style="width: 4rem;">
                    </div>
                    <div class="">
                        <h1 class="">YABA COLLEGE OF TECHNOLOGY</h1>
                    </div>
                </div>
                <div class="index-container-nav-2">
                    <button href="registration.php">Register</button>
                    <button  href="about.php">About Us</button>
                    <button href="contact.php">Contact Us</button>
                </div>
            </nav>

            <div class="index-container-main">
                <div class="">
                    <div class="content">
                        <h3><span>WELCOME TO</span></h3>
                        <br>
                        <h1>YABA COLLEGE OF EDUCATION</h1>
                        <br>
                        <h3><span>IME EMRS</span></h3>
                        <br>
                        <br>
                        <a href="registration.php" class="btn">Register</a>
                        <a href="login.php" class="btn">DASHBOARD</a>
                        <a href="contact.php" class="btn">Contact US</a>
                     </div>
                </div>
            </div>
     
     </div>

</body>
</html>