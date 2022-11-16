<div class="col-xl-4 p-2">
	<div class="card shadow-dark p-4">
		<h5 class="mb-4">The total amount of</h5>
		<div class="">
			<span class="my-2 float-start text-dark">Subtotal</span>
			<span class="my-2 float-end text-dark">₱<?= number_format($total_amount, 2); ?></span>
		</div>
		<div class="">
			<span class="my-2 float-start text-dark">Shipping</span>
			<span class="my-2 float-end text-dark">₱</span>
		</div>
		<hr class="border border-dark border-1">
		<div class="">
			<h6 class="my-2 float-start font-weight-bold text-lg">Total</h6>
			<h6 class="my-2 float-end font-weight-bold text-lg">₱<?= number_format($total_amount, 2); ?></h6>
		</div>
		<div>
			<a type="button" class="btn bg-gradient-primary border-radius-2xl w-100 my-2" href="checkout.php">Go to Checkout</a>
			<span class="d-block text-center my-2">or <a class="text-primary" href="all-products.php">continue shopping</a></span>
		</div>
	</div>
</div>