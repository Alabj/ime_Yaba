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
                        <h1 class="">YCT MEDICAL CENTER</h1>
                    </div>
                </div>
                <div class="index-container-nav-2">
                    <button>Book Appointment</button>
                    <button>About Us</button>
                    <button>Contact Us</button>
                </div>
            </nav>

            <div class="index-container-main" style="display: flex; justify-content: center; padding: 12px;">
                <div class="" style="border-radius: 5px;">
                    <img src="./css/codepic/Medical-tools.webp" alt="" class="" style="width: 39rem; border-radius: 5px; border: 0;">
                </div>
                <div class="">
                    <div class="content-index">
                        <h1 >Exceptional Medical</h1>
                        <h1 style=" color: rgb(63, 225, 0);">Care For You </h1>
                        <p style="font-size: 17px;">The Medical Centre is where all of the College's medical services are provided. It is a comprehensive
                            medical center that includes medical laboratory services, x-ray, medical records, pharmacy, out-
                            patient department, consulting rooms, nurses station, treatment rooms, minor theatre, male and female
                            observation rooms (wards) with 3-4 beds each, immunization and dressing rooms, and so on.</p>
                        <br>
                        <a href="login.php" class="btn" style=" background-color: rgb(63, 225, 0); width: 10rem;">Login</a>
                     </div>
                </div>
            </div>
     
     </div>

</body>
</html>