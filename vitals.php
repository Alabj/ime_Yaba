<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $pulse_rate = mysqli_real_escape_string($conn, $_POST['pulse_rate']);
   $respiratory_rate = mysqli_real_escape_string($conn, $_POST['respiratory_rate']);
   $blood_pressure = mysqli_real_escape_string($conn, $_POST['blood_pressure']);
   $body_temperature = mysqli_real_escape_string($conn, $_POST['body_temperature']);


   $select = " SELECT * FROM vitals_form WHERE  = '$' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = '';

   }else{

      if($name != $name){
         $error[] = 'confirm name on appointment, must be same!';
      }else{
         $insert = "INSERT INTO vitals_form(name, pulse_rate, respiratory_rate, blood_pressure, body_temperature) VALUES('$name','$pulse_rate','$respiratory_rate','$blood_pressure','$body_temperature')";
         mysqli_query($conn, $insert);
         header('location:mainpage.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>vitals form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css.css">

</head>
<body>
   
<!-- <div class="form-container">

   <form action="" method="post">
      <h3>vitals check</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter Name">
      <input type="text" name="pulse_rate" required placeholder="Input Pulse Rate">
      <input type="text" name="respiratory_rate" required placeholder="Input Respiratory Rate">
      <input type="text" name="blood_pressure" required placeholder="Input Blood Pressure">
      <input type="text" name="body_temperature" required placeholder="Input Body Temperature">
      <input type="submit" name="submit" value="SUBMIT" class="form-btn">
      <a href="mainpage.php" class="btn">Go Back</a>
    </form>

</div> -->

<div class="div-form-side">
       
       <div class="mainpage-sideNav" style="width: 20%; background-image: url(./css/codepic/Frame.png);">
         <img src="./css/codepic/Yaba_logo_2.jpeg" alt="" style="width: 16rem;">
           <Tooltip content="Hello world! anchorId=.me" />
           <div class="mainpage-sideNav" >
             <p class=" "><a href="index.php">Home</a></p>
           </div>
           <div class="mainpage-sideNav">
             <p><a href="vitals.php" class="">Vitals Check</a></p>
           </div>
           <div class="mainpage-sideNav">
             <p class=""> <a href="confirmation.php" class="">Appointments Confirmation</a></p>
           </div>
           <div class="mainpage-sideNav">
             <p class=""> 
               <a href="prescription.php" class="">Pharmacist Prescription</a>
            </p>
           </div>
           <div class="mainpage-sideNav" style="margin-top: 120px;">
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
             <div class="mainpage-subDiv">
               <h3 class="mainpage-sub-h3">vitals check</h3>
                   <div class="form-container-main" >
                     <form action="" method="post">
                         
                               <input type="text" name="name" required placeholder="Enter Name">
                               <input type="text" name="pulse_rate" required placeholder="Input Pulse Rate">
                               <input type="text" name="respiratory_rate" required placeholder="Input Respiratory Rate">
                               <input type="text" name="blood_pressure" required placeholder="Input Blood Pressure">
                               <input type="text" name="body_temperature" required placeholder="Input Body Temperature">
                         <input type="submit" name="submit" value="SUBMIT" class="form-btn" style="background-color: rgb(63, 225, 0)"><br>
                         <!-- <a href="mainpage.php" class="btn">Go Back</a> -->
                       </form>
                   
                   </div>
             </div>
         </div>
     </div>

</body>
</html>