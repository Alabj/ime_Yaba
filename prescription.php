<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $past_diagnosis = mysqli_real_escape_string($conn, $_POST['past_diagnosis']);
   $present_diagnosis = mysqli_real_escape_string($conn, $_POST['present_diagnosis']);
   $prescribed_drugs = mysqli_real_escape_string($conn, $_POST['prescribed_drugs']);
   $admission = mysqli_real_escape_string($conn, $_POST['admission']);


   $select = " SELECT * FROM prescription_form WHERE  = '$' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = '';

   }else{

      if($name != $name){
         $error[] = 'confirm name on appointment, must be same!';
      }else{
         $insert = "INSERT INTO prescription_form(name, past_diagnosis, present_diagnosis, prescribed_drugs, admission) VALUES('$name','$past_diagnosis','$present_diagnosis','$prescribed_drugs','$admission')";
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
   <title>prescription form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css.css">

</head>
<body>
   
<!-- <div class="form-container">

   <form action="" method="post">
      <h3>prescriptions</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter Name">
      <input type="text" name="past_diagnosis" required placeholder="Input Past Diagnosis">
      <input type="text" name="present_diagnosis" required placeholder="Input Present Diagnosis">
      <input type="text" name="prescribed_drugs" required placeholder="Input Prescribed Drugs">
      <input type="text" name="admission" required placeholder="Does the Patient Need to be Admitted">
      <input type="submit" name="submit" value="SUBMIT" class="form-btn">
      <a href="mainpage.php" class="btn">Go Back</a>
    </form>

</div> -->

<div class="div-form-side">
       
             
       <div class="mainpage-sideNav" style="width: 20%; background-image: url(./css/codepic/Frame.png);">
           <div>
             <img src="./css/codepic/Yaba_logo_2.jpeg" alt="" style="width: 16rem;">
           <div class="mainpage-sideNav-p" >
             <a href="index.php">Home</a>
           </div>
           <div class="mainpage-sideNav-p">
            <a href="vitals.php" class="">Vitals Check</a>
           </div>
           <div class="mainpage-sideNav-p">
             <a href="confirmation.php" class="">Appointments Confirmation</a>
           </div>
           <div class="mainpage-sideNav-p">
            
               <a href="prescription.php" class="">Pharmacist Prescription</a>
            
           </div>
           <div class="mainpage-sideNav-p" style="margin-top: 120px;">
             <span>
               <RxExit />
             </span>
             
             <a href="logout.php" class="">logout</a>
 
           </div>
           </div>
       </div>
     <div class="" style=" width: 80%;">
       <nav class="" style="display: flex; padding: 5px;   background-color: rgb(63, 225, 0);">
         <div class="">
           <img src="./css/codepic/109879063-user-avatar-icon-sign-profile-symbol.jpg" alt="" class="" style="width: 4rem; border-radius: 50%; margin-left: 62rem;">
         </div>
     </nav>
         <div class="mainpage-subDiv">
           <h3 class="mainpage-sub-h3">prescriptions</h3>
               <div class="form-container-main" >
                 <form action="" method="post">
                  
                     <input type="text" name="name" required placeholder="Enter Name">
                     <input type="text" name="past_diagnosis" required placeholder="Input Past Diagnosis">
                     <input type="text" name="present_diagnosis" required placeholder="Input Present Diagnosis">
                     <input type="text" name="prescribed_drugs" required placeholder="Input Prescribed Drugs">
                     <input type="text" name="admission" required placeholder="Does the Patient Need to be Admitted">
                     <input type="submit" name="submit" value="SUBMIT" class="form-btn">
                     <!-- <a href="mainpage.php" class="btn">Go Back</a> -->
                   </form>
               
               </div>
         </div>
     </div>
 </div>

</body>
</html>