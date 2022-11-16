<?php
include("./middleware/user-middleware.php");
include("./includes/header.php");
?>

<!-- <div class="page-header align-items-start vh-100" loading="lazy" style="background-image: url('./resources/img/burgess-milner-OYYE4g-I5ZQ-unsplash.jpg');">

	

	<span class="mask bg-gradient-dark opacity-6"></span>

	<div class="container align-self-center">
		<div class="row justify-content-center">
			<div class="col-md-8 max-width-500">
				<div class="card signin-card">

					<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
						<div class="bg-gradient-primary shadow-primary border-radius-lg py-4 pe-1">
							<h3 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h3>
						</div>
					</div>

					<div class="card-body">
						<form id="js-sign-in-form" action="./process/p-sign-in.php" novalidate>
							<div class="row">

								<div class="col-md-12 p-0">
									<div class="form-group mx-3 mb-3">
										<label for="js-sign-in-email" class="form-label custom-label-font-size">Email</label>
										<input type="email" name="sign-in-email" id="js-sign-in-email" class="form-control p-2" placeholder="Enter email">
									</div>
								</div>

								<div class="col-md-12 p-0">
									<div class="form-group mx-3 mb-3">
										<label for="js-sign-in-password" class="form-label custom-label-font-size">Password</label>
										<input type="password" name="sign-in-password" id="js-sign-in-password" class="form-control p-2" placeholder="Enter password">
										<div class="form-check align-items-center p-0 mt-2 mb-3">
											<input class="form-check-input" type="checkbox" id="js-show-password">
											<label class="form-check-label" for="js-show-password">
												Show password
											</label>
											<a href="#" class="float-end text-sm ms-2">Forgot password?</a>
										</div>
										<p class="mt-1 text-sm text-center">
											Don't have an account? <a class="ms-1" href="sign-up.php">Sign Up</a>
										</p>
									</div>
								</div>

								<div class="col-md-12 p-0">
									<div class="form-group m-3">
										<button type="submit" id="sign-in-btn" class="form-control btn bg-gradient-primary btn-lg text-lg mb-0">Sign in</button>
									</div>
								</div>

							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

</div> -->

<div class="container mt-8">
	<div class="row">
		<div class="col-lg-5 mx-auto">
			<div class="card shadow-dark p-2 signin-card">

				<div class="card-header position-relative mt-n4 mx-3 p-0 z-index-2">
					<div class="bg-gradient-primary shadow-primary border-radius-lg py-4 pe-1">
						<h3 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h3>
					</div>
				</div>

				<div class="card-body p-2">
					<form id="js-sign-in-form" action="./process/p-sign-in.php" novalidate>

						<div class="row">
							<div class="col my-1">
								<div class="form-group">
									<label for="js-sign-in-email" class="form-label custom-label-font-size">Email</label>
									<input type="email" name="sign-in-email" id="js-sign-in-email" class="form-control p-2" placeholder="Enter email">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col my-1">
								<div class="form-group">
									<label for="js-sign-in-password" class="form-label custom-label-font-size">Password</label>
									<input type="password" name="sign-in-password" id="js-sign-in-password" class="form-control p-2" placeholder="Enter password">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col my-1">
								<div class="form-check align-items-center p-0">
									<input class="form-check-input" type="checkbox" id="js-show-password">
									<label class="form-check-label m-0" for="js-show-password">
										Show password
									</label>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col my-1">
								<a href="#" class="text-sm">Forgot password?</a>
							</div>
						</div>

						<div class="row">
							<div class="col my-1">
								<div class="form-group m-3">
									<button type="submit" id="sign-in-btn" class="form-control btn bg-gradient-primary btn-lg text-lg mb-0">Sign in</button>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col my-1">
								<p class="text-sm text-center m-0">
									Don't have an account? <a class="ms-1" href="sign-up.php">Sign up</a>
								</p>
							</div>
						</div>

					</form>
				</div>

			</div>
		</div>
	</div>
</div>

<?php
include("./includes/footer.php");
?>

<script src="./resources/js/p-sign-in.js" type="module"></script>

<?php
include("./helpers/h-count-click.php");
?>
