<?php
include("./middleware/user-middleware.php");
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
				<div class="card px-3 py-2">
					<div class="row">

						<?php
						include("./helpers/h-fetch-cart-items.php");
						?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include("./includes/footer.php");
?>

<script src="./resources/js/p-cart.js" type="module"></script>