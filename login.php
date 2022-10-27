<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>
   
<!-- header section starts  -->
   <?php include 'components/nav_header.php'; ?>
<!-- header section ends -->

<div class="form-container">

   <form action="" method="post">
      <h3>Login and order something delicious!</h3>
      <input type="email" name="email" required placeholder="Email" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" required placeholder="Password" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="LOGIN" name="submit" class="btn">
      
      <p><br>Don't have an account? <br><a href="register.php" style="color: #4FAE5A; font-weight: bolder;">Register Now!</a></p>
   </form>

</div>











<?php include 'components/footer.php'; ?> 






<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>