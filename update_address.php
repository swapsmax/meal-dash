<!-- database connection -->
<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:login.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Address</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>
   
<?php include 'components/nav_header.php' ?>

<section class="form-container">

   <form action="" method="post">
      <h3>Your Address</h3>
      <input type="text" class="box" placeholder="Unit No." required maxlength="50" name="flat">
      <input type="text" class="box" placeholder="Block No." required maxlength="50" name="building">
      <input type="text" class="box" placeholder="Country" required maxlength="50" name="country">
      <input type="number" class="box" placeholder="Pincode" required max="999999" min="0" maxlength="6" name="pin_code">
      <input type="submit" value="Save Address" name="submit" class="btn">
   </form>

</section>










<?php include 'components/footer.php' ?>







<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>