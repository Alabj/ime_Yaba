<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>patient page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css.css">

</head>
<body>
   
<!-- <div class="container">

   <div class="content">
      <h3>HI, <span>Patient</span></h3>
      <h1>HEALTH IS WEALTH</h1>
      <p>Thank you for filling the booking form.</p>
      <p>We would get back to you via e-mail.</p>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div> -->

<div class="div-form-side">
       
       <div class="mainpage-sideNav" style="width: 20%; background-image: url(./code.pic/Frame.png);">
         <img src="./css/codepic/Yaba_logo_2.jpeg" alt="" style="width: 16rem;">
           <Tooltip content="Hello world! anchorId=.me" />
           <div class="mainpage-sideNav-p">
             <a href="" class="">Home</a>
           </div>
           <div class="mainpage-sideNav-p">
             <a href="">Previous Appointments</a>
           </div>
           <div class="mainpage-sideNav-p">
             <a href="">Booking Form</a>
           </div>
           <div class="mainpage-sideNav-p" style="margin-top: 120px;">
           <a href="logout.php" class="" style="color: black;" >logout</a>
           </div>
         </div>
     <div class="" style=" width: 80%;">
       <nav class="" style="display: flex; padding: 5px;   background-color: rgb(63, 225, 0);">
         <div class="">
           <img src="./css/codepic/109879063-user-avatar-icon-sign-profile-symbol.jpg" alt="" class="" style="width: 4rem; border-radius: 50%; margin-left: 62rem;">
         </div>
     </nav>
         <div class="mainpage-subDiv" style="height: 565px;">
            <div class="">
 
         <div class="content">
            <h3>HI, <span>Patient</span></h3>
            <h1>HEALTH IS WEALTH</h1>
            <p>Thank you for filling the booking form.</p>
            <p>We would get back to you via e-mail.</p>
         </div>
      
      </div>
         </div>
     </div>
 </div>

</body>
</html>