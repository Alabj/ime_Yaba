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
         <img src="./code.pic/Yaba_logo_2.jpeg" alt="" style="width: 16rem;">
           <Tooltip content="Hello world! anchorId=.me" />
           <div class="mainpage-sideNav-p">
             <p class=" ">Home</p>
           </div>
           <div class="mainpage-sideNav-p">
             <p class="">Previous Appointments</p>
           </div>
           <div class="mainpage-sideNav-p">
             <p class="">Booking Form</p>
           </div>
           <div class="mainpage-sideNav-p" style="margin-top: 120px;">
             <p class=""> <a href="logout.php" class="" style="color: black;" >logout</a></p>
           </div>
         </div>
   <div class="" style=" width: 80%;">
       <div class="">
           <div class=" " style="display: flex; justify-content: end; align-items: center; gap: 20px; padding:12px ;">
             <div class="">
               <CiSearch class="text-gray-700  " />
               <input
                 type="search"
                 class=""
                 placeholder="search"
                 style="border: 2px solid black; padding: 5px; border-radius: 7%;"
               />
             </div>
             <div class="" style="display: flex; gap: 10px; align-items: center;">
               <div class="">
                 <p class="text-md">YABA COLLEGE OF TECHNOLOGY</p>
                 
               </div>
               <div class="">
                 <img
                   src='./code.pic/Yaba_logo_3.png'
                   alt=""
                   class=" "
                   style="width: 50px;"
                 />
               </div>
             </div>
           </div>
         </div>
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