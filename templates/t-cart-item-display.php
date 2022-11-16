<div class="row py-2 px-2">

	<div class="col-auto align-self-center text-center">
		<img src="./uploads/products/<?= urlencode($item['image']) ?>" alt="<?= $item['name'] ?>" class="avatar avatar-xxl border-radius-lg">
	</div>

	<div class="col align-self-center text-truncate">
		<h5 class="mb-1 text-truncate"><?= $item['name'] ?></h5>
		<div class="mb-1">
			<span class="mb-1 text-secondary font-weight-normal me-1">Size:</span><span>XL</span>
		</div>
		<div class="mb-1">
			<span class="mb-1 text-secondary font-weight-normal me-1">Color:</span><span>BLACK</span>
		</div>

		<div class="">
			<input type="hidden" value="<?= $item['cid'] ?>">
			<button class="text-black-50 text-bold text-sm align-middle p-0 border-0 bg-transparent js-remove-cart-item"><i class="material-icons align-middle text-md mb-1">delete</i>
				Remove
			</button>
			<button class="text-black-50 text-bold text-sm align-middle p-0 border-0 bg-transparent ms-3 js-move-to-wishlist"><i class="material-icons align-middle text-md mb-1">favorite</i>
				Move to wishlist
			</button>
		</div>
	</div>

	<div class="col-lg-auto align-self-center">
		<div class="form-group mx-2 my-1">
			<label for="my-cart-qty" class="form-label m-0">Quantity</label>
			<input type="number" name="my-cart-qty" class="form-control p-2 w-100 text-dark js-my-cart-qty" value="<?= $item['qty']; ?>">
		</div>
		<div class="d-inline-flex mx-2 my-1">
			<span class="align-self-center text-sm text-secondary"><s>₱<?= number_format($item['original_price'], 2) ?></s></span>
			<span class="align-self-center text-sm text-bold text-dark ms-2">₱<?= number_format($item['selling_price'], 2) ?></span>
		</div>
		<div class="mx-2 my-1">
			<p class="text-xs text-danger m-0">You save <?= (100 - substr($saved_percentage, 0, strpos($saved_percentage, '.'))) . '%' ?></p>
		</div>
	</div>
</div>

<hr class="border border-dark border-1 opacity-2" />