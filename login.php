<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'staff'){

         $_SESSION['staff_name'] = $row['name'];
         header('location:mainpage.php');

      }elseif($row['user_type'] == 'patient'){

         $_SESSION['patient_name'] = $row['name'];
         header('location:booking.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css.css">

</head>
<body>
   
<!-- <div class="form-container">

   <form action="" method="post">
      <h3>Login</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter Email">
      <input type="password" name="password" required placeholder="Enter Password">
      <input type="submit" name="submit" value="login" class="form-btn">
      <p>Don't have an account? <a href="registration.php">Register</a></p>
      <a href="index.php" class="btn">Homepage</a>
   </form>

</div> -->

<div class="login-container">
        <img src="./code.pic/Yaba_logo_3.png" alt="" style="width: 10rem; margin-left: 37rem;">
        <div class="Login-subDiv">
            <form action="" method="post">
            <?php
               if(isset($error)){
                  foreach($error as $error){
                     echo '<span class="error-msg">'.$error.'</span>';
                  };
               };
               ?>
                <h3 id="login-h3" style="color: green; font-size: 2rem; margin-top: 20px;" >Login</h3>
                <input type="email" name="email" required placeholder="Enter Email">
                <input type="password" name="password" required placeholder="Enter Password">
                <input type="submit" name="submit" value="login" class="form-btn" style="background-color: green; color: white; font-weight: bolder;">
                <p>Don't have an account? <a href="registration.php">Register</a></p>
                <a href="index.php" class="btn">Homepage</a>
             </form>
        </div>
     
     </div>

</body>
</html>