<?php

$conn = $pdo->open();
try {

	include("./helpers/h-check-cart-item.php");

	// fetch products 
	$products_query =
		"SELECT SUM(s.quantity) AS total_sales, p.product_id, p.name AS product_name, p.slug AS product_slug,
		p.image, p.original_price, p.selling_price, c.name AS category_name, c.slug AS category_slug, ps.view_count
		FROM products AS p
		LEFT JOIN categories AS c ON c.category_id = p.category_id
		LEFT JOIN inventories AS i ON i.product_id = p.product_id
		LEFT JOIN product_status AS ps ON ps.product_id = p.product_id
		LEFT JOIN sales AS s ON s.product_id = p.product_id
		WHERE ps.status = 1 AND i.quantity > 0 GROUP BY product_id ORDER BY total_sales DESC LIMIT 10";

	$products = $conn->prepare($products_query);
	$products->execute();
	// fetch products end

	// display products
	foreach ($products as $product) :

		// fetch total sold products
		$sales_query =
			"SELECT quantity
				FROM sales
				WHERE product_id=:product_id";

		$sales_params = [
			'product_id' => $product['product_id']
		];

		$sales = $conn->prepare($sales_query);
		$sales->execute($sales_params);

		$sold = 0;

		foreach ($sales as $sale) :
			$sold += $sale['quantity'];
		endforeach;
		// fetch total sold products end

		$you_save = number_format(((($product['selling_price']) / $product['original_price']) * 100), 2);

		include("./templates/t-product-display.php");

	endforeach;
	// display products end
} catch (PDOException $e) {
	echo $e->getMessage();
}
$pdo->close();
