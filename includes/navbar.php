<div class="container position-sticky z-index-sticky top-0">
	<div class="row">
		<div class="col-12">

			<!-- Navbar -->
			<nav class="navbar navbar-expand-xl blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
				<div class="container-fluid px-0">

					<a class="navbar-brand font-weight-bolder ms-sm-3" href="/" rel="tooltip" title="Designed and Coded by Prince Cipriano" data-placement="bottom">
						Kai Likha'san
					</a>

					<button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon mt-2">
							<span class="navbar-toggler-bar bar1"></span>
							<span class="navbar-toggler-bar bar2"></span>
							<span class="navbar-toggler-bar bar3"></span>
						</span>
					</button>

					<div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
						<ul id="navigation-bar" class="navbar-nav navbar-nav-hover ms-auto">

							<li class="nav-item mx-1">
								<a class="nav-link ps-2 d-flex cursor-pointer align-items-center text-md" id="dropdownMenuProducts" href="/">
									Home
								</a>
							</li>

							<li class="nav-item mx-1">
								<a class="nav-link ps-2 d-flex cursor-pointer align-items-center text-md" id="dropdownMenuProducts" href="/product.php">
									All Products
								</a>
							</li>

							<?php
							$conn = $pdo->open();
							try {
								$get_active_categories_query =
									"SELECT * 
									FROM categories 
									LIMIT 4";

								$get_active_categories = $conn->prepare($get_active_categories_query);
								$get_active_categories->execute();

								foreach ($get_active_categories as $get_active_category) :
							?>

									<li class="nav-item mx-1">
										<a class="nav-link ps-2 d-flex cursor-pointer align-items-center text-md" id="MenuCategory<?= $get_active_category["category_id"] ?>" href="product.php?category=<?= urlencode($get_active_category["slug"]) ?>">
											<?= $get_active_category["name"] ?>
										</a>
									</li>

								<?php
								endforeach;
								?>

								<li class="nav-item dropdown dropdown-hover mx-1">

									<a class="nav-link ps-2 d-flex cursor-pointer align-items-center text-md" id="dropdownMenuProducts" data-bs-toggle="dropdown" aria-expanded="false" href="all-products.php">
										More
										<img src="./resources/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
									</a>

									<ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown dropdown-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuProducts">

										<div class="d-none d-lg-block">
											<ul class="list-group">

												<?php
												$get_more_active_categories_query =
													"SELECT * 
													FROM categories 
													LIMIT 4,999";

												$get_more_active_categories = $conn->prepare($get_more_active_categories_query);
												$get_more_active_categories->execute();
												foreach ($get_more_active_categories as $get_more_active_category) :
												?>

													<li class="nav-item list-group-item border-0 p-0">
														<a class="dropdown-item py-2 ps-3 border-radius-md" href="product.php?category=<?= urlencode($get_more_active_category["slug"]) ?>">
															<h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
																<?= $get_more_active_category["name"] ?></h6>
														</a>
													</li>

												<?php
												endforeach;
												?>

											</ul>
										</div>

										<div class="row d-lg-none">
											<div class="col-md-12 g-0">

												<a class="dropdown-item py-2 ps-3 border-radius-md" href="#">
													<h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
														Category</h6>
													<span class="text-sm">All about overview, quick start, license and contents</span>
												</a>

												<a class="dropdown-item py-2 ps-3 border-radius-md" href="#">
													<h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
														Product</h6>
													<span class="text-sm">See our colors, icons and typography</span>
												</a>

											</div>
										</div>
										
									</ul>

								</li>

								<li class="nav-item mx-1">
									<a class="nav-link ps-2 cursor-pointer align-items-center" id="MenuCart" href="cart.php" title="My Cart">
										<i class="material-icons opacity-6 align-middle">shopping_cart</i>
									</a>
								</li>

								<?php
								if (isset($_SESSION['authenticated'])) :
								?>

									<li class="nav-item dropdown dropdown-hover mx-1">
										<a class="nav-link ps-2 d-flex cursor-pointer align-items-center text-xxl" id="dropdownMenuCollection" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="material-icons opacity-6 text-xxl">person</i>
											<img src="./resources/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
										</a>
										<ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown dropdown-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuCollection">
											<div class="d-none d-lg-block">
												<ul class="list-group">

													<li class="nav-item list-group-item border-0 p-0">
														<a class="dropdown-item py-2 ps-3 border-radius-md" href="account.php">
															<h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
																My Account</h6>
														</a>
													</li>

													<li class="nav-item list-group-item border-0 p-0">
														<a class="dropdown-item py-2 ps-3 border-radius-md" href="carts.php">
															<h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
																My Cart</h6>
														</a>
													</li>

													<li class="nav-item list-group-item border-0 p-0">
														<a class="dropdown-item py-2 ps-3 border-radius-md" href="wishlist.php">
															<h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
																My Wishlist</h6>
														</a>
													</li>

													<li class="nav-item list-group-item border-0 p-0">
														<a class="dropdown-item py-2 ps-3 border-radius-md" href="orders.php">
															<h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
																My Orders</h6>
														</a>
													</li>

													<li class="nav-item list-group-item border-0 p-0">
														<a class="dropdown-item py-2 ps-3 border-radius-md" href="cart.php">
															<h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
																Messages</h6>
														</a>
													</li>

													<li class="nav-item list-group-item border-0 p-0">
														<a class="dropdown-item py-2 ps-3 border-radius-md" href="logout.php">
															<h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
																Logout</h6>
														</a>
													</li>

												</ul>
											</div>

											<div class="row d-lg-none">
												<div class="col-md-12 g-0">
													<a class="dropdown-item py-2 ps-3 border-radius-md" href="#">
														<h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
															Profile</h6>
													</a>

													<a class="dropdown-item py-2 ps-3 border-radius-md" href="carts.php">
														<h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
															Cart</h6>
													</a>

													<a class="dropdown-item py-2 ps-3 border-radius-md" href="#">
														<h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
															History</h6>
													</a>

													<a class="dropdown-item py-2 ps-3 border-radius-md" href="#">
														<h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
															Logout</h6>
													</a>
												</div>
											</div>
										</ul>
									</li>

								<?php
								endif;
								if (!isset($_SESSION['authenticated'])) :
								?>

									<li class="nav-item mx-1">
										<a class="nav-link ps-2 cursor-pointer align-items-center text-md" id="MenuSignIn" href="sign-in.php" title="Sign In">
											<i class="material-icons opacity-6 align-middle">account_circle</i>
										</a>
									</li>

									<li class="nav-item mx-1">
										<a class="nav-link ps-2 cursor-pointer align-items-center text-md" id="MenuSignUp" href="sign-up.php" title="Sign Up">
											<i class="material-icons opacity-6 align-middle">key</i>
										</a>
									</li>

							<?php
								endif;
							} catch (PDOException $e) {
								echo $e->getMessage();
							}
							?>

						</ul>
					</div>

				</div>
			</nav>
			<!-- End Navbar -->

		</div>
	</div>
</div>