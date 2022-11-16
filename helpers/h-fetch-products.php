<?php

$conn = $pdo->open();
try {

	include("./helpers/h-check-cart-item.php");

	$products_query;

	if (!isset($_GET['product'])) :

		if (!isset($_GET['category'])) :

			$products_query =
				"SELECT p.product_id, p.name AS product_name, p.slug AS product_slug,
				p.image, p.original_price, p.selling_price, c.name AS category_name, c.slug AS category_slug, ps.view_count
				FROM products AS p
				LEFT JOIN categories AS c ON c.category_id = p.category_id
				LEFT JOIN inventories AS i ON i.product_id = p.product_id
				LEFT JOIN product_status AS ps ON ps.product_id = p.product_id
				WHERE ps.status = 1 AND i.quantity > 0";

			$product_params = null;

		elseif (isset($_GET['category'])) :

			$products_query =
				"SELECT p.product_id, p.name AS product_name, p.slug AS product_slug, c.name AS category_name,
				c.slug AS category_slug, p.image, p.original_price, p.selling_price, i.quantity
				FROM product_status AS ps
				LEFT JOIN inventories AS i ON i.product_id = ps.product_id
				LEFT JOIN products AS p ON p.product_id = i.product_id 
				LEFT JOIN categories AS c ON c.category_id = p.category_id 
				WHERE ps.status = 1 AND c.slug = :category_slug";

			$product_params = ['category_slug' => $_GET['category']];

		endif;

		$products = $conn->prepare($products_query);
		$products->execute($product_params);

		foreach ($products as $product) :

			$sales_query = "SELECT quantity FROM sales WHERE product_id=:product_id";

			$sales_params = [
				'product_id' => $product['product_id']
			];

			$sales = $conn->prepare($sales_query);
			$sales->execute($sales_params);

			$sold = 0;

			foreach ($sales as $sale) :
				$sold += $sale['quantity'];
			endforeach;

			$you_save = number_format(((($product['selling_price']) / $product['original_price']) * 100), 2);

			include("./templates/t-product-display.php");

		endforeach;

	else :

		$products_query =
			"SELECT p.product_id, p.name AS product_name, p.slug AS product_slug, c.name AS category_name,
			c.slug AS category_slug, p.image, p.original_price, p.selling_price, i.quantity
			FROM product_status AS ps
			LEFT JOIN inventories AS i ON i.product_id = ps.product_id
			LEFT JOIN products AS p ON p.product_id = i.product_id 
			LEFT JOIN categories AS c ON c.category_id = p.category_id 
			WHERE ps.status = 1 AND c.slug = :category_slug AND p.slug = :product_slug";

		$product_params = ['category_slug' => $_GET['category'], 'product_slug' => $_GET['product']];

		$products = $conn->prepare($products_query);
		$products->execute($product_params);
		$product = $products->fetch();

		include("./templates/t-product-full-detail-display.php");

	endif;
} catch (PDOException $e) {
	echo $e->getMessage();
}
$pdo->close();
