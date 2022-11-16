<!-- <div class="col-auto bg-image my-4">
	<div class="card shadow-dark" data-animation="true">

		<div class="card-header p-0 mt-n2 mx-3 z-index-2">

			<?php
			if (file_exists("./src/uploads/products/" . $product['image'])) :
			?>

				<img src="./src/uploads/products/<?= urlencode($product["image"]) ?>" alt="img-blur-shadow" class="img-fluid avatar-xxxl shadow border-radius-lg">

			<?php
			else :
			?>

				<img src="./src/uploads/products/no-image-1234567890.jpg" alt="img-blur-shadow" class="img-fluid avatar-xxxl shadow border-radius-lg">
			<?php
			endif;
			?>
		</div>

		<div class="card-body px-4 py-0">

			<div class="d-flex mt-n4 mx-auto">

				<input type="hidden" value="<?= $product['product_id']; ?>">

				<?php
				if (in_array($product['product_id'], $cart_item_product_id)) :
				?>

					<button type="button" class="js-add-to-cart-btn-<?= $product['product_id']; ?> btn btn-link text-dark m-auto border-0 my-1 p-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Remove from cart">
						<i class="material-icons text-lg">shopping_cart</i>
					</button>

				<?php
				else :
				?>

					<button type="button" class="js-add-to-cart-btn-<?= $product['product_id']; ?> btn btn-link text-dark m-auto border-0 my-1 p-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add to cart">
						<i class="material-icons text-lg">add_shopping_cart</i>
					</button>

				<?php
				endif;

				if (in_array($product['product_id'], $wishlist_item_product_id)) :
				?>

					<button type="button" class="js-add-to-wishlist-btn-<?= $product['product_id']; ?> btn btn-link text-dark m-auto border-0 my-1 p-0" data-bs-placement="bottom" title="Remove from wishlist">
						<i class="material-icons text-lg">favorite</i>
					</button>

				<?php
				else :
				?>

					<button type="button" class="js-add-to-wishlist-btn-<?= $product['product_id']; ?> btn btn-link text-dark m-auto border-0 my-1 p-0" data-bs-placement="bottom" title="Add to wishlist">
						<i class="material-icons text-lg">favorite_outline</i>
					</button>

				<?php
				endif;
				?>

				<button type="button" class="btn btn-link text-dark m-auto border-0 js-quickview my-1 p-0" data-bs-placement="bottom" title="Quickview" data-bs-toggle="modal" data-bs-target="#modaler">
					<i class="material-icons text-lg">search</i>
				</button>

			</div>

			<a class="d-block blur-shadow-image" href="product.php?category=<?= urlencode($product["category_slug"]) ?>&product=<?= urlencode($product["product_slug"]) ?>">
				<h6 class="card-title hide-after-two my-0" title="<?= $product["product_name"] ?>"><?= $product["product_name"] ?></h6>
			</a>

			<?php
			if (!isset($_GET['category'])) :
			?>

				<p class="card-text my-1"><?= $product["category_name"] ?></p>

			<?php
			endif;
			?>
			<input type="hidden" value="<?= $product["product_id"] ?>">

		</div>

		<div class="card-footer px-4 py-0 pb-2">

			<div class="">

				<h5 class="d-inline-block text-primary ms-0 me-0 my-0">₱<?= number_format($product['selling_price'], 2) ?></h5>

				<span class="float-end text-sm ms-1 me-0 my-1"><?= $sold !== 0 ? '' : $sold . ' sold'; ?></span>

			</div>

			<div class="">

				<span class="text-secondary text-sm mx-0 my-1"><s>₱<?= number_format($product['original_price'], 2) ?></s></span>

				<span class="text-dark text-sm ms-1 me-0 my-1">-<?= (100 - substr($you_save, 0, strpos($you_save, '.'))) . '%' ?></span>

			</div>

			<div class="">

				<span class="text-secondary text-sm mx-0 my-1">
					<i class="align-middle material-icons text-lg text-warning">star</i>
					<i class="align-middle material-icons text-lg text-warning">star</i>
					<i class="align-middle material-icons text-lg text-warning">star</i>
					<i class="align-middle material-icons text-lg text-warning">star_half</i>
					<i class="align-middle material-icons text-lg text-warning">star_outline</i>
				</span>

				<span class="text-secondary text-sm mx-0 my-1">
					(23)
				</span>

			</div>

		</div>

	</div>
</div> -->

<div class="col-auto my-4 placeholder-glow" style="max-width: 250px;">
	<div class="card shadow-dark" data-animation="true">

		<div class="card-header align-self-center p-0 mt-n2 mx-3 z-index-2 bg-secondary bg-opacity-100">

			<?php
			if (file_exists("./src/uploads/products/" . $product['image'])) :
			?>

				<img src="./src/uploads/products/<?= urlencode($product["image"]) ?>" alt="img-blur-shadow" class="img-fluid avatar-xxxl shadow border-radius-lg placeholder">
				<rect width="100%" height="100%" fill="#868e96"></rect>
			<?php
			else :
			?>

				<img src="./src/uploads/products/no-image-1234567890.jpg" alt="img-blur-shadow" class="img-fluid avatar-xxxl shadow border-radius-lg">
			<?php
			endif;
			?>
		</div>

		<div class="card-body px-4 py-0">

			<div class="d-flex mt-n4 mx-auto">

				<input type="hidden" value="<?= $product['product_id']; ?>">

				<?php
				if (in_array($product['product_id'], $cart_item_product_id)) :
				?>

					<button type="button" class="js-add-to-cart-btn-<?= $product['product_id']; ?> btn btn-link text-primary m-auto border-0 my-1 p-0 placeholder placeholder-xs" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Remove from cart">
						<i class="material-icons text-lg">shopping_cart</i>
					</button>

				<?php
				else :
				?>

					<button type="button" class="js-add-to-cart-btn-<?= $product['product_id']; ?> btn btn-link text-primary m-auto border-0 my-1 p-0 placeholder placeholder-xs" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add to cart">
						<i class="material-icons text-lg">add_shopping_cart</i>
					</button>

				<?php
				endif;

				if (in_array($product['product_id'], $wishlist_item_product_id)) :
				?>

					<button type="button" class="js-add-to-wishlist-btn-<?= $product['product_id']; ?> btn btn-link text-primary m-auto border-0 my-1 p-0 placeholder placeholder-xs" data-bs-placement="bottom" title="Remove from wishlist">
						<i class="material-icons text-lg">favorite</i>
					</button>

				<?php
				else :
				?>

					<button type="button" class="js-add-to-wishlist-btn-<?= $product['product_id']; ?> btn btn-link text-primary m-auto border-0 my-1 p-0 placeholder placeholder-xs" data-bs-placement="bottom" title="Add to wishlist">
						<i class="material-icons text-lg">favorite_outline</i>
					</button>

				<?php
				endif;
				?>

				<button type="button" class="btn btn-link text-primary m-auto border-0 js-quickview my-1 p-0 placeholder placeholder-xs" data-bs-placement="bottom" title="Quickview" data-bs-toggle="modal" data-bs-target="#modaler">
					<i class="material-icons text-lg">search</i>
				</button>

			</div>

			<a class="d-block blur-shadow-image" href="product.php?category=<?= urlencode($product["category_slug"]) ?>&product=<?= urlencode($product["product_slug"]) ?>">
				<h6 class="card-title hide-after-two my-0 placeholder placeholder-xs" title="<?= $product["product_name"] ?>"><?= $product["product_name"] ?></h6>
			</a>

			<?php
			if (!isset($_GET['category'])) :
			?>

				<p class="card-text my-0 placeholder placeholder-xs"><?= $product["category_name"] ?></p>

			<?php
			endif;
			?>
			<input type="hidden" value="<?= $product["product_id"] ?>">

		</div>

		<div class="card-footer px-4 py-0 pb-2">

			<div class="">

				<h5 class="d-inline-block text-primary ms-0 me-0 my-0 placeholder placeholder-xs">₱<?= number_format($product['selling_price'], 2) ?></h5>

				<span class="float-end text-sm ms-1 me-0 my-0 placeholder placeholder-xs"><?= $sold !== 0 ? '' : $sold . ' sold'; ?></span>

			</div>

			<div class="">

				<span class="text-secondary text-sm mx-0 my-0 placeholder placeholder-xs"><s>₱<?= number_format($product['original_price'], 2) ?></s></span>

				<span class="text-dark text-sm ms-1 me-0 my-0 placeholder placeholder-xs">-<?= (100 - substr($you_save, 0, strpos($you_save, '.'))) . '%' ?></span>

			</div>

			<div class="">

				<span class="text-secondary text-sm mx-0">
					<i class="align-middle material-icons text-lg text-warning placeholder placeholder-xs">star</i>
					<i class="align-middle material-icons text-lg text-warning placeholder placeholder-xs">star</i>
					<i class="align-middle material-icons text-lg text-warning placeholder placeholder-xs">star</i>
					<i class="align-middle material-icons text-lg text-warning placeholder placeholder-xs">star_half</i>
					<i class="align-middle material-icons text-lg text-warning placeholder placeholder-xs">star_outline</i>
				</span>

				<span class="text-secondary text-sm mx-0 my-1 placeholder placeholder-xs">
					(23)
				</span>

			</div>

		</div>

	</div>
</div>