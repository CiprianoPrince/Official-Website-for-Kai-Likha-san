<?php
session_start();

if (isset($_POST['signInCount'])) {
	if (isset($_SESSION['sign_in_click'])) {
		if ($_SESSION['sign_in_click'] === 3) {
			exit('405');
		}
		$_SESSION['sign_in_click'] += 1;
	} else {
		$_SESSION['sign_in_click'] = 1;
	}
	exit('200');
}

if (isset($_POST['page'])) {
	if (($_POST['page'] === 'signInCountEnd')) {
		unset($_SESSION['sign_in_click']);
		exit('200');
	}
}
