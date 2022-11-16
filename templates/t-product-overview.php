<div class="modal fade" id="modaler" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="container-fluid p-3">

				<div class="row mx-0">
					<div class="col-auto ms-auto p-0">
						<button type="button" class="align-middle d-inline-block btn-close text-bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
				</div>

				<div class="row mx-0">

					<div class="col-md-6 p-2">
						<img src="" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
					</div>

					<div class="col-md-6">

						<div class="row mx-0 my-2">
							<div class="col p-0">
								<h5 id="js-product-name" class="align-middle modal-title d-inline-block"></h5>
							</div>
						</div>

						<div class="row mx-0 my-2">

							<div class="col p-0">
								<span class="text-secondary text-sm mx-0 my-1">
									<i class="material-icons text-lg text-warning">star</i>
									<i class="material-icons text-lg text-warning">star</i>
									<i class="material-icons text-lg text-warning">star</i>
									<i class="material-icons text-lg text-warning">star_half</i>
									<i class="material-icons text-lg text-warning">star_outline</i>
								</span>
							</div>

							<div class="col-auto p-0">
								<input type="hidden" value="">
								<button type="button" class="btn-link text-dark border-0 bg-transparent"><i class="material-icons text-lg">favorite_outline</i></button>
							</div>

						</div>

						<div class="row mx-0 my-2">
							<div class="col p-0">
								<h6 class="align-middle text-primary d-inline-block mx-0 my-0" style="font-size: 2rem;">₱<?= number_format($product['psp'], 2) ?></h6>
								<h6 class="align-middle text-secondary d-inline-block mx-0 my-0"><s>₱<?= number_format($product['pop'], 2) ?></s></h6>
							</div>
						</div>

						<div class="row mx-0 my-2">

							<div class="col-5 p-0">
								<span class="align-middle text-dark text-lg m-0">Color:</span>
							</div>

							<div class="col p-0">
								<span class="align-middle text-dark text-lg m-0">Blue</span>
							</div>

						</div>

						<div class="row mx-0 my-2">

							<div class="col-5 p-0">
								<span class="align-middle text-dark text-lg m-0">Size:</span>
							</div>

							<div class="col p-0">
								<span class="align-middle text-dark text-lg m-0">XL</span>
							</div>

						</div>

						<div class="row mx-0 my-2">

							<div class="col-5 p-0">
								<div class="input-group">
									<span class="align-middle text-dark text-lg my-0 m-0">Quantity:</span>
								</div>
							</div>

							<div class="col p-0">
								<div class="input-group">

									<button type="button" id="js-remove-cart-qty-btn" class="input-a border-radius-md border-end-0 bg-transparent px-1">
										<i class="align-middle material-icons mb-1">remove</i>
									</button>

									<input type="number" id="js-add-to-cart-qty" class="form-control border-primary py-1 text-center w-35" value="1">

									<button type="button" id="js-add-cart-qty-btn" class="input-a border-radius-md border-start-0 bg-transparent px-1">
										<i class="align-middle material-icons mb-1">add</i>
									</button>

								</div>
							</div>

						</div>

					</div>

				</div>

				<div class="row mx-0 my-2">

					<div class="col-md p-2">
						<a type="button" id="js-buy-now-btn" class="btn btn-outline-dark my-0 w-100">Buy Now</a>
					</div>

					<div class="col-md p-2">
						<a type="button" id="js-add-to-cart-btn" class="btn btn-outline-primary my-0 w-100">Add to Cart</a>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>