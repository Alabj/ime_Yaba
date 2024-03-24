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
   <title>confirmation page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css.css">

</head>
<body>
<!-- <div class="container1">

<div class="content">
   <h3><span>Doctors Confirmation of Appointments</span></h3>
   <h1>Please Note that in order to archieve this process, you must be connected to an internet service provider.</h1>
   <br>
   <p>Kindly click the link below to Redirect you to the Microsoft Office Online Excel sheet.</p>
   <br>
   <a href="https://onedrive.live.com/View.aspx?resid=535E049DD3322B!224&authkey=!AL-IcRNKJpzJF0Y" class="btn">Doctors Schedule</a>
   <br>
   <br>
   <p>OR</p>
   <br>
   <a href="mainpage.php" class="btn">Go Back</a>
</div>

</div> -->

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
   <div class="" style=" width: 80%;">
     <nav class="" style="display: flex; padding: 5px;   background-color: rgb(63, 225, 0);">
       <div class="">
         <img src="./css/codepic/109879063-user-avatar-icon-sign-profile-symbol.jpg" alt="" class="" style="width: 4rem; border-radius: 50%; margin-left: 62rem;">
       </div>
   </nav>
       <div class="mainpage-subDiv" style="height: 569px;">
            <div class="">

       <div class="content">
          <h3><span>Doctors Confirmation of Appointments</span></h3>
          <h1>Please Note that in order to archieve this process, you must be connected to an internet service provider.</h1>
          <br>
          <p>Kindly click the link below to Redirect you to the Microsoft Office Online Excel sheet.</p>
          <br>
          <a href="https://onedrive.live.com/View.aspx?resid=535E049DD3322B!224&authkey=!AL-IcRNKJpzJF0Y" class="btn">Doctors Schedule</a>
       </div>
       
       </div>
       </div>
   </div>
</div>

</body>
</html>