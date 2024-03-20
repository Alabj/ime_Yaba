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

       <div class="">
          <div class="patient-container-form">
           <form action="" method="post">
           <?php
                     if(isset($error)){
                        foreach($error as $error){
                           echo '<span class="error-msg">'.$error.'</span>';
                        };
                     };
                     ?>
               <h3>Booking/appointment form</h3>
                   <div class="patient-container-form-div">
                       <input type="text" name="name" required placeholder="Enter Name">
                       <input type="email" name="email" required placeholder="Enter Email">
                   </div>
                   <div class="patient-container-form-div">
                       <select name="designation_type">
                           <option value="student">Student</option>
                           <option value="staff">Staff</option>
                        </select>
                        <input type="text" name="rfa" required placeholder="Reason For Appointment">
                   </div>
                   <div class="patient-container-form-div">
                       <input type="text" name="past_illness" required placeholder="Past Illness">
                       <input type="text" name="cci" required placeholder="Current Clinical Issues">
                   </div>
               <p>Input your Desired Date for your Appointment</p>
               <input type="date" name="doa" required placeholder="Date of Appointment" style="width: 50%;">
               <input type="submit" name="submit" value="Book Now" class="form-btn" style="width: 50%; background-color: rgb(22,156,87);">
             </form>
       </div>
       </div>
    
    </div>
       </div>
   </div>
</div>
</body>
</html>