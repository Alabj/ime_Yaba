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
   <title>mainpage</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css.css">

</head>
<body>
   
<!-- <div class="container">

   <div class="content">
      <h3>HI, <span>DOCTOR/NURSE/PHARMACIST</span></h3>
      <br>
      <h1>WELCOME BACK TO YOUR DASHBOARD</h1>
      <br>
      <h3>This is where <span>VITALS</span> can be recorded</h3>
      <br>
      <h3>and also where <span>PRESCRIPTIONS</span> are recorded</h3>
      <br>
      <br>
      <a href="vitals.php" class="btn">Vitals Check</a>
      <a href="confirmation.php" class="btn">Doctors Appointments Confirmation</a>
      <a href="prescription.php" class="btn">Doctors/Pharmacist Prescription</a>
      <a href="logout.php" class="btn">logout</a>
   </div>


</div> -->

<div class="" >

<div class="div-form-side">

  <div class="mainpage-sideNav" style="width: 20%; background-image: url(./code.pic/Frame.png);">
    <img src="./css/codepic/Yaba_logo_2.jpeg" alt="" style="width: 16rem;">
      <Tooltip content="Hello world! anchorId=.me" />
      <div class="mainpage-sideNav-p" >
        <p class=" "><a href="index.php">Home</a></p>
      </div>
      <div class="mainpage-sideNav-p">
        <p><a href="vitals.php" class="">Vitals Check</a></p>
      </div>
      <div class="mainpage-sideNav-p">
        <p class=""> <a href="confirmation.php" class="">Appointments Confirmation</a></p>
      </div>
      <div class="mainpage-sideNav-p">
        <p class=""> 
          <a href="prescription.php" class="">Pharmacist Prescription</a>
       </p>
      </div>
      <div class="mainpage-sideNav-p" style="margin-top: 120px;">
        <span>
          <RxExit />
        </span>
        <p class="">
        <a href="logout.php" class="">logout</a>
        </p>
      </div>
    </div>
<div class="" style="width: 80%;">
          <nav class="" style="display: flex; padding: 5px;   background-color: rgb(63, 225, 0);">
            <div class="">
              <img src="./css/codepic/109879063-user-avatar-icon-sign-profile-symbol.jpg" alt="" class="" style="width: 4rem; border-radius: 50%; margin-left: 62rem;">
            </div>
        </nav>
  <div class="mainpage-subDiv">
    <h3 class="mainpage-h3">HI, <span class="mainpage-h3" style="color: rgb(0,128,0);"> DOCTORS/NURSES/PHARMASICT</span></h3>
    <h3 class="mainpage-h3">WELCOME BACK TO YOUR DASHBOARD</h3>
  </div>
</div>
</div>
</div>

</body>
</html>