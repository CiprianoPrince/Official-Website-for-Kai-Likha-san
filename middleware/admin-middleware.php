<?php
session_start();
include('../functions/alertify.php');
if (!isset($_SESSION['authenticated'])){
	return redirectUnAuthenticatedUser('../sign-in.php', "You need to login first.");
}
if($_SESSION['authenticated_user']['user_type'] != 1) {
	return redirectUnAuthenticatedUser('../index.php', "You are not authorized to access this page.");
}
require("../database/database.php");
include('../functions/query.php');
include('../functions/helpers.php');