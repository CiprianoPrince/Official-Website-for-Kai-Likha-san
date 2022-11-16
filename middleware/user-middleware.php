<?php
session_start();

$script_name = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/') + 1);

if ($script_name === 'sign-in.php' || $script_name === 'sign-up.php') {
	// include('./functions/alertify.php');
	require('./database/database.php');
	if (isset($_SESSION['authenticated'])) {
		return redirectUnAuthenticatedUser('./index.php', "You are already logged in.");
	}
}

if ($script_name === 'cart.php') {
	if (!isset($_SESSION['authenticated'])) {
		// return redirectUnAuthenticatedUser('./sign-in.php', "You need to login first.");
	}
	require("./database/database.php");
	// include('./functions/query.php');
}
