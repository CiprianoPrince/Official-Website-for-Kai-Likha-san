<?php
if (isset($_SESSION['authenticated'])) {
	$user_id = $_SESSION['authenticated_user']['user_id'];

	$conn = $pdo->open();
	try {

		$cart_numrow_query = "SELECT COUNT(*) AS numrows FROM carts WHERE user_id=:user_id";

		$cart_numrow_params = [
			'user_id' => $user_id
		];

		$cart_numrow = $conn->prepare($cart_numrow_query);
		$cart_numrow->execute($cart_numrow_params);
		$cart_numrow = $cart_numrow->fetch();

		if ($cart_numrow['numrows'] > 0) {

			// <div class="col-xl-8 p-2">

			$my_carts_query =
				"SELECT p.*, c.cart_id AS cid, c.quantity AS qty
				FROM carts AS c
				LEFT JOIN products AS p ON c.product_id = p.product_id
				WHERE c.user_id=:user_id";

			$my_carts_params = [
				'user_id' => $user_id
			];

			$my_carts = $conn->prepare($my_carts_query);
			$items->execute($my_carts_params);

			$total_amount = 0;

			foreach ($items as $item) {
				$saved_percentage = number_format(((($item['selling_price']) / $item['original_price']) * 100), 2);
				$total_amount += $item['selling_price'] * $item['qty'];

				include("./templates/t-cart-item-display.php");
			}

			// </div>

			include("./templates/t-cart-item-display.php");
		} else {
			include("./templates/t-empty-cart.php");
		}
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
	$pdo->close();
}

if (!isset($_SESSION['authenticated'])) {

	$conn = $pdo->open();

	try {
		if (isset($_SESSION['carts'])) {
			$items = $_SESSION['carts'];

			foreach ($items as $item) {
				$session_carts_query = 'SELECT * FROM products WHERE product_id = :product_id';
				$session_carts = $conn->prepare($session_carts_query);
				$session_carts->execute(['product_id' => $my_cart['product_id']]);
				$session_cart = $session_carts->fetch();

				include("./templates/t-cart-item-display.php");
			}
		} else {
			include("./templates/t-empty-cart.php");
		}
	} catch (\Throwable $th) {
		//throw $th;
	}
}
