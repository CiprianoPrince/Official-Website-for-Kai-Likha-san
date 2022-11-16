<?php
session_start();
include('./database/database.php');
include("./includes/header.php");
?>

<?php
include("./helpers/h-fetch-headings.php");
include("./templates/t-headings.php");
?>

<div class="container mt-3">

	<div class="row">
		<div class="col-md-12">
			<div class="card-group">
				<div class="card p-4">

					<div id="products-row" class="row justify-content-center">

						<?php include("./helpers/h-fetch-products.php") ?>

					</div>

					<div class="row">

						<div class="col-md-5 my-2">
							<div class="card shadow-dark px-3 py-2">
								<h1>Product Description</h1>
							</div>
						</div>

						<div class="col-md-7 my-2">
							<div class="card shadow-dark px-3 py-2">
								<h1>Product Specification</h1>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card shadow-dark px-3 py-2">
				<h1>Row for similar items</h1>
			</div>
		</div>
	</div>

</div>

<?php
include("./includes/footer.php");
?>

<!-- <script src="./resources/js/product.js" type="module"></script> -->