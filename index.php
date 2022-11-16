<?php
session_start();

require('./database/database.php');
// include('./functions/query.php');
// include('./functions/alertify.php');
include("./includes/header.php");
?>

<header class="header-2">
	<div class="page-header min-vh-100 relative">
		<!-- style="background-image: url('./resources/img/lucas-hoang-ojZ4wJNUM5w-unsplash.jpg')" -->
		<span class="mask bg-gradient-dark opacity-4"></span>
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-center mx-auto">
					<h2 class="text-white pt-3 mt-n5">We are offering exceptional low wholesale price, discounts for bulk orders, and an additional 5% discount to our loyal customers.</h2>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- <div class="card card-body shadow-xl mx-3 mx-md-4"> -->
<div class="container">
	<div class="section">
		<div class="card shadow-dark px-3 py-2">
			<div class="row justify-content-center">

				<div class="col-12">
					<h4 class="my-2 px-4">TOP PRODUCTS</h4>
				</div>

				<!-- display top product -->
				<?php include("./helpers/h-fetch-top-products.php") ?>
				<!-- display top product end  -->

				<!-- display product overview -->
				<?php include("./templates/t-product-overview.php") ?>
				<!-- display product overview end  -->

			</div>
		</div>
	</div>
</div>
<!-- </div> -->

<?php
include("./includes/footer.php");
?>

<!-- <script src="./resources/js/product.js" type="module"></script> -->
<script src="./resources/js/p-cart.js" type="module"></script>