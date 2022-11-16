<?php
$cart_item_product_id = [];
$wishlist_item_product_id = [];

// execute for authenticate
if (isset($_SESSION['authenticated'])) :

	$user_id = $_SESSION['authenticated_user']['user_id'];

	$cart_item_query =
		"SELECT product_id 
		FROM carts 
		WHERE user_id=:user_id";

	$cart_item_params = [
		'user_id' => $user_id
	];

	$cart_item = $conn->prepare($cart_item_query);
	$cart_item->execute($cart_item_params);

	foreach ($cart_item as $cart_item_item) :
		array_push($cart_item_product_id, $cart_item_item['product_id']);
	endforeach;

	$wishlist_item_query =
		"SELECT product_id 
		FROM wishlists 
		WHERE user_id=:user_id";

	$wishlist_item_params = [
		'user_id' => $user_id
	];

	$wishlist_item = $conn->prepare($wishlist_item_query);
	$wishlist_item->execute($wishlist_item_params);

	foreach ($wishlist_item as $wishlist_item_item) :
		array_push($wishlist_item_product_id, $wishlist_item_item['product_id']);
	endforeach;
// execute for authenticated end

// execute for unauthenticated
else :

	if (isset($_SESSION['carts'])) :
		$carts = $_SESSION['carts'];

		foreach ($carts as $cart) :
			array_push($cart_item_product_id, $cart['product_id']);
		endforeach;
	endif;

	if (isset($_SESSION['wishlists'])) :
		$wishlists = $_SESSION['wishlists'];

		foreach ($wishlists as $wishlist) :
			array_push($wishlist_item_product_id, $wishlist['product_id']);
		endforeach;
	endif;

endif;
// execute for unauthenticated end
