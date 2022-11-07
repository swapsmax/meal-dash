<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>category</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
	<link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>
    <?php include 'components/nav_header.php'; ?>

    <div class="heading">
		<!-- <i class="fa-solid fa-dash"></i> -->
        <h1>MENU</h1>
        <h3>Discover Our Menu</h3>
		<p class="menu-desc">We have one of the widest menu with mouthwatering dishes to pick from, a delicious line of desserts and thirst-quenching drinks to satisfy your cravings.</p>
        <p class="path">
			<a href="home.php">Home</a>
			<span> > <a href="menu.php">Menu</a></span>
            <span> 
                > 
                <?php
                    $category = $_GET['category'];
                    $select_products = $conn->prepare("SELECT * FROM `products` WHERE category = ?");
                    $select_products->execute([$category]);
                    $fetch_products = $select_products->fetch(PDO::FETCH_ASSOC);
                ?>
                <?= $fetch_products['category']; ?>
            </span>
		</p>
    </div>

    <div class="products">
		<h1 class="title" style="text-decoration: underline solid transparent;">
		<b>Food Category</b></h1>
		
		<div class="container">
			<!-- php to view 6 latest products from database -->
			<?php
                $category = $_GET['category'];
				$select_products = $conn->prepare("SELECT * FROM `products` WHERE category = ?");
				$select_products->execute([$category]);
				if($select_products->rowCount() > 0){
					while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
			?>
			<form action="" method="post" class="box">
				<input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
				<input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
				<input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
				<input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
				<a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
				<!-- <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button> -->
				<img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
				<div class="name"><?= $fetch_products['name']; ?></div>
				<a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
				<div class="flex">
					<div class="price"><span>$</span><?= $fetch_products['price']; ?></div>
					<input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
				</div>
				<div class="add-to-cart">
					<button type="submit" class="add-btn" name="add_to_cart">Add to Cart</button>
				</div>
			</form>
			<?php
					}
				}else{
					echo '<p class="empty">No Products Added Yet!</p>';
				}
			?>
		</div>
</body>

<footer>
	 <br><br><?php include 'components/footer.php'; ?> 
</footer>

</html>