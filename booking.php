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
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>booking form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css.css">

</head>
<body>
   
<!-- <div class="form-container">

   <form action="" method="post">
      <h3>Booking/appointment form</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter Name">
      <input type="email" name="email" required placeholder="Enter Email">
      <select name="designation_type">
         <option value="student">Student</option>
         <option value="staff">Staff</option>
      </select>
      <input type="text" name="rfa" required placeholder="Reason For Appointment">
      <input type="text" name="past_illness" required placeholder="Past Illness">
      <input type="text" name="cci" required placeholder="Current Clinical Issues">
      <p>Input your Desired Date for your Appointment</p>
      <input type="date" name="doa" required placeholder="Date of Appointment">
      <input type="submit" name="submit" value="Book Now" class="form-btn">
    </form>

</div> -->

<div class="bookingForm-container">
        <div class="booking-container">
            <div class="" style="background-color: rgb(141,218,170) ; padding: 20px;">
                <img src="./css/codepic/Yaba_logo_3.png" alt="" style="width: 10rem; margin-top: 90px;">
            </div>
            <div class="booking-container-form">
                <form action="" method="post">
                    <h3>Booking/appointment form</h3>
                        <div class="booking-container-form-div">
                            <input type="text" name="name" required placeholder="Enter Name" class="booking-container-form-input">
                            <input type="email" name="email" required placeholder="Enter Email" class="booking-container-form-input">
                        </div>
                        <div class="booking-container-form-div">
                            <input type="text" placeholder="Student Id or Staff Number" class="booking-container-form-input">
                            <!-- <select name="designation_type">
                                <option value="student">Student</option>
                                <option value="staff">Staff</option>
                             </select> -->
                             <input type="text" name="past_illness" required placeholder="Past Illness" class="booking-container-form-input">
                        </div>
                        <div class="" style="margin-top: 20px; margin-right: 27rem;">
                            <p>Date of Appointment</p>
                            <input type="date" name="past_illness" required placeholder="Past Illness" id="booking_input">
                            
                        </div>
                            <div class="" style="margin-right: 10rem;">
                                <p class="" style="padding: 10px;">Reason for appointment</p>
                                <textarea name="" id="" cols="90" rows="5" style="border-radius: 5px; width: 35rem;"></textarea>
                            </div>
                    <input type="submit" name="submit" value="Book Now" class="booking-container-form-input" style="width: 50%; background-color: rgb(22,156,87); margin-right: 10rem; margin-top: 12px;">
                  </form>
            </div>
        </div>
   </div>

</body>
</html>