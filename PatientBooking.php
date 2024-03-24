<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $designation_type = $_POST['designation_type'];
   $rfa = mysqli_real_escape_string($conn, $_POST['rfa']);
   $past_illness = mysqli_real_escape_string($conn, $_POST['past_illness']);
   $cci = mysqli_real_escape_string($conn, $_POST['cci']);
   $doa = mysqli_real_escape_string($conn, $_POST['doa']);


   
   $select = " SELECT * FROM booking_form WHERE  = '$' ";

   $result = mysqli_query($conn, $select);
  

   // if(mysqli_num_rows($result) === TRUE){

   //    $error[] = '';

   // }else{

      if($cci != $cci){
         $error[] = 'confirm current clicnical issues!';
      }else{
         $insert = "INSERT INTO booking_form(name, email, designation_type , rfa, past_illness, cci, doa) VALUES('$name','$email','$designation_type','$rfa','$past_illness','$cci','$doa')";
         mysqli_query($conn, $insert);
         header('location:patient.php');
      }
  // }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

       <div class="">
         <div class="patient-container-form">
           <form action="" method="post">
               <h3>Booking/appointment form</h3>
                   <div class="patient-container-form-div">
                       <input type="text" name="name" required placeholder="Enter Name" class="patient-container-form-input">
                       <input type="email" name="email" required placeholder="Enter Email" class="patient-container-form-input">
                   </div>
                   <div class="patient-container-form-div">
                       <input type="text" placeholder="Student Id or Staff Number" class="patient-container-form-input">
                       <!-- <select name="designation_type">
                           <option value="student">Student</option>
                           <option value="staff">Staff</option>
                        </select> -->
                        <input type="text" name="past_illness" required placeholder="Past Illness" class="patient-container-form-input">
                   </div>
                   <div class="" style="margin-top: 20px; margin-right: 38rem;">
                       <p>Input Desired Date of Appointment</p>
                       <input type="date" name="past_illness" required placeholder="Past Illness" id="patient_input">
                       
                   </div>
                       <div class="" style="margin-right: 10rem;">
                           <p class="" style="padding: 10px;">Reason for appointment</p>
                           <textarea name="" id="" cols="90" rows="5" style="border-radius: 5px; width: 35rem;"></textarea>
                       </div>
               <input type="submit" name="submit" value="Book Now" class="patient-container-form-input" style="width: 40%; background-color: rgb(22,156,87); margin-right: 10rem; margin-top: 12px;">
             </form>
       </div>
       </div>
    
    </div>
       </div>
   </div>
</div>
</body>
</html>