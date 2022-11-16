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
						<form id="js-sign-up-form" action="./process/p-sign-up.php" novalidate>
							<div class="row">

								<div class="col-md-12 p-0">
									<div class="form-group mx-2 mb-2">
										<label for="sign-up-name" class="form-label custom-label-font-size">Name</label />
										<input type="text" name="sign-up-name" id="js-sign-up-name" class="form-control p-2" placeholder="eg. John Doe">
									</div>
								</div>
								
								<div class="col-md-12 p-0">
									<div class="form-group mx-2 mb-2">
										<label for="sign-up-email" class="form-label custom-label-font-size">Email<span class="text-danger text-xs ms-1"></span></label />
										<input type="email" name="sign-up-email" id="js-sign-up-email" class="form-control p-2" placeholder="eg. JohnDoe25@gmail.com">
									</div>
								</div>

								<div class="col-md-12 p-0">
									<div class="form-group mx-2 mb-2">
										<label for="sign-up-phone" class="form-label custom-label-font-size">Phone Number</label />
										<input type="number" name="sign-up-phone" id="js-sign-up-phone" class="form-control p-2" placeholder="eg. 987654321" max="13">
									</div>
								</div>

								<div class="col-md-12 p-0">
									<div class="form-group mx-2 mb-2">
										<label for="sign-up-password" class="form-label custom-label-font-size">Password<span class="text-danger text-xs ms-1">Must Contain:</span><span id="passwordContainlowercase" class="text-danger text-xxs ms-1">lowercase</span><span id="passwordContainUppercase" class="text-danger text-xxs ms-1">Uppercase</span><span id="passwordContainNumber" class="text-danger text-xxs ms-1">Number</span><span id="passwordContainSymbol" class="text-danger text-xxs ms-1">Symbol</span></label />
										<input type="password" name="sign-up-password" id="js-sign-up-password" class="form-control p-2" placeholder="Create password">
									</div>
								</div>

								<div class="col-md-12 p-0">
									<div class="form-group mx-2 mb-2">
										<label for="sign-up-cpassword" class="form-label custom-label-font-size">Confirm password</label />
										<input type="password" name="sign-up-cpassword" id="js-sign-up-cpassword" class="form-control p-2" placeholder="Confirm password">
									</div>
								</div>

								<div class="col-md-12 p-0">
									<div class="form-group m-3">
										<button type="submit" id="js-sign-up-btn" class="form-control btn bg-gradient-primary btn-lg text-lg mb-0">Sign up</button>
										<p class="m-1 mt-3 text-sm text-center">
											Already registered? <a class="ms-1" href="sign-in.php">Sign In</a>
										</p>
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

<?php
if (isset($_SESSION['sign_up_click'])) {
?>

	<script>
		setTimeout(() => {
			$.ajax({
				type: "POST",
				url: "./helpers/h-click-counter.php",
				data: {
					signInCountEnd: true
				},
				dataType: "text",
				success: function(response) {

				}
			});
		}, 15000);
	</script>

<?php
}
?>

<div class="container mt-8">
	<div class="row">
		<div class="col-xl-6 mx-auto">
			<div class="card signin-card">

				<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
					<div class="bg-gradient-primary shadow-primary border-radius-lg py-4 pe-1">
						<h3 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign up</h3>
					</div>
				</div>

				<div class="card-body">
					<form id="js-sign-up-form" action="./process/p-sign-up.php" novalidate>

						<div class="row">

							<div class="col-md my-1">
								<div class="form-group mx-2 mb-2">
									<label for="sign-up-first-name" class="form-label custom-label-font-size">First Name</label />
									<input type="text" name="sign-up-first-name" id="js-sign-up-first-name" class="form-control p-2" placeholder="Input first name">
								</div>
							</div>

							<div class="col-md my-1">
								<div class="form-group mx-2 mb-2">
									<label for="sign-up-last-name" class="form-label custom-label-font-size">Last Name</label />
									<input type="text" name="sign-up-last-name" id="js-sign-up-last-name" class="form-control p-2" placeholder="Input last name">
								</div>
							</div>
						</div>

						<div class="row">

							<div class="col-md my-1">
								<div class="form-group mx-2 mb-2">
									<label for="sign-up-email" class="form-label custom-label-font-size">Email<span class="text-danger text-xs ms-1"></span></label />
									<input type="email" name="sign-up-email" id="js-sign-up-email" class="form-control p-2" placeholder="Input email">
								</div>
							</div>

							<div class="col-md my-1">
								<div class="form-group mx-2 mb-2">
									<label for="sign-up-phone" class="form-label custom-label-font-size">Phone Number</label />
									<input type="number" name="sign-up-phone" id="js-sign-up-phone" class="form-control p-2" placeholder="Input phone number" max="13">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md my-1">
								<div class="form-group mx-2 mb-2">
									<label for="sign-up-password" class="form-label custom-label-font-size">Password<span class="text-danger text-xs ms-1">Must Contain:</span><span id="passwordContainlowercase" class="text-danger text-xxs ms-1">lowercase</span><span id="passwordContainUppercase" class="text-danger text-xxs ms-1">Uppercase</span><span id="passwordContainNumber" class="text-danger text-xxs ms-1">Number</span><span id="passwordContainSymbol" class="text-danger text-xxs ms-1">Symbol</span></label />
									<input type="password" name="sign-up-password" id="js-sign-up-password" class="form-control p-2" placeholder="Create password">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md my-1">
								<div class="form-group mx-2 mb-2">
									<label for="sign-up-cpassword" class="form-label custom-label-font-size">Confirm password</label />
									<input type="password" name="sign-up-cpassword" id="js-sign-up-cpassword" class="form-control p-2" placeholder="Confirm password">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md my-1">
								<div class="form-group m-3">
									<button type="submit" id="js-sign-up-btn" class="form-control btn bg-gradient-primary btn-lg text-lg mb-0">Sign up</button>
									<p class="m-1 mt-3 text-sm text-center">
										Already registered? <a class="ms-1" href="sign-in.php">Sign in</a>
									</p>
								</div>
							</div>
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

<script src="./resources/js/p-sign-up.js" type="module"></script>