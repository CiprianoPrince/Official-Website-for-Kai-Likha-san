<?php

$script_name = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/') + 1);

if ($script_name === 'product.php') {
	function fixDecoding($string, $type = 'none')
	{
		$output = '';
		switch ($type) {
			case 'ucwords':
				$output = ucwords(str_replace('-', ' ', urldecode($string)));
				break;

			case 'ucfirst':
				$output = ucfirst(str_replace('-', ' ', urldecode($string)));
				break;

			default:
				$output = (str_replace('-', ' ', urldecode($string)));
				break;
		}
		return $output;
	}

	$heading = isset($_GET['product']) ? fixDecoding($_GET['product'], 'ucfirst') : (isset($_GET['category']) ? fixDecoding($_GET['category'], 'ucwords') : 'All Products');

	$sub_heading = '
	<a href="./" class="text-reset">Home</a>
	<span>/</span>
	';

	if (!isset($_GET['category']) && !isset($_GET['product'])) {
		$sub_heading .= '
		<a href="product.php" class="text-reset"><u>All Products</u></a>
		';
	}

	if (isset($_GET['category']) && !isset($_GET['product'])) {
		$sub_heading .= '
		<a href="product.php?category=' . urlencode($_GET['category']) . '" class="text-reset"><u>' . fixDecoding($_GET['category'], 'ucwords') . '</u></a>
		';
	}

	if (isset($_GET['category']) && isset($_GET['product'])) {
		$sub_heading .= '
		<a href="product.php?category=' . urlencode($_GET['category']) . '" class="text-reset">' . fixDecoding($_GET['category'], 'ucwords') . '</a>
		<span>/</span>
		<a href="product.php?category=' . urlencode($_GET['category']) . '&product=' . urlencode($_GET['product']) . '" class="text-reset"><u>' . fixDecoding($_GET['product'], 'ucfirst') . '</u></a>
		';
	}
}


if ($script_name === 'cart.php') {
	$heading = 'My Cart';
	$sub_heading = '
	<a href="./" class="text-reset">Home</a>
	<span>/</span>
	<a href="./account.php" class="text-reset">Account</a>
	<span>/</span>
	<a href="./cart.php" class="text-reset"><u>My Cart</u></a>
	';
}
