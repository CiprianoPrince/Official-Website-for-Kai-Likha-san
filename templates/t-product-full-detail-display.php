<div class="col-md-5 bg-image p-2">
	<div class="card shadow-dark">
		<div class="card-header">

			<?php
			if (file_exists("./src/uploads/products/" . $product['image'])) :
			?>

				<img src="./src/uploads/products/<?= urlencode($product["image"]) ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">

			<?php
			else :
			?>

				<img src="./src/uploads/products/no-image-1234567890.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">

			<?php
			endif;
			?>

		</div>
		<div class="card-body">
		</div>
	</div>
</div>

<div class="col-md-7 px-4 py-2">

	<div class="row my-4">
		<div class="col">
			<h2 id="js-product-name" class="card-title text-truncate mx-0 my-0"><?= $product["product_name"] ?></h2>
		</div>
	</div>

	<div class="row my-4">
		<div class="col">
			<h6 class="text-secondary d-inline-block mx-0 my-0"><s>₱<?= number_format($product['original_price'], 2) ?></s></h6>
			<h6 class="text-primary d-inline-block ms-2 me-0 my-0" style="font-size: 2rem;">₱<?= number_format($product['selling_price'], 2) ?></h6>
		</div>
	</div>

	<div class="row my-4">

		<div class="col-4">
			<label class="align-self-center text-lg m-0" for="">Shipping</label>
		</div>

		<div class="col">
			<label class="align-self-center text-lg m-0" for="">₱</label>
		</div>

	</div>

	<div class="row my-4">

		<div class="col-4">
			<label class="align-self-center text-lg m-0" for="">Color</label>
		</div>

		<div class="col">
			<label class="align-self-center text-lg m-0" for="">Blue</label>
		</div>

	</div>

	<div class="row my-4">

		<div class="col-4">
			<label class="align-self-center text-lg m-0" for="">Size</label>
		</div>

		<div class="col">
			<label class="align-self-center text-lg m-0" for="">XL</label>
		</div>

	</div>

	<div class="row my-4">

		<div class="col-4">
			<div class="input-group">
				<label class="align-self-center text-lg my-0 m-0" for="add-to-cart-qty">Quantity</label>
			</div>
		</div>

		<div class="col">
			<div class="input-group">
				<button id="js-remove-cart-qty-btn" class="border-primary bg-transparent"><i class="align-self-center material-icons mt-1">remove</i></button>
				<input id="js-add-to-cart-qty" type="number" class="js-add-to-cart-qty border-primary text-center w-25" value="1">
				<button id="js-add-cart-qty-btn" class="border-primary bg-transparent"><i class="align-self-center material-icons mt-1">add</i></button>
			</div>
		</div>

	</div>

	<div class="row my-4">

		<div class="col-4">
			<label class="align-self-center text-lg m-0" for="">Stock</label>
		</div>

		<div class="col">
			<h6><?= $product['quantity'] . ' pieces available' ?></h6>
		</div>

	</div>

</div>