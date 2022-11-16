<?php
// Empty field validation

function isEmptyInput($emptySessionName)
{
	echo (isset($_SESSION[$emptySessionName])) ? $_SESSION[$emptySessionName] :  "";
	unset($_SESSION[$emptySessionName]);
}

function checkUserInput($inputName, $sessionName, $emptySessionName)
{
	if (empty($inputName)) return $_SESSION[$emptySessionName] = "*";
	unset($_SESSION[$emptySessionName]);
	if ($sessionName == 'preInputPassword' || $sessionName == 'preInputCpassword') {
		return;
	}
	return $_SESSION[$sessionName] = $inputName;
}

// Notification and alerts

function sessionSetter($session_key, $session_value)
{
	$_SESSION[$session_key] = $session_value;
	return;
}
function isSetSessionMessage($session_name)
{
	if (!isset($_SESSION[$session_name])) return;
	$message = $_SESSION[$session_name];
	unset($_SESSION[$session_name]);
	switch ($session_name) {
		case 'errorMessage':
			echo "<script>swal('$message', {button: false,});</script>";
			break;
		case 'successMessage':
			echo "<script>swal('$message', {button: false,});</script>";
			break;
		case 'sweetError':
			echo "<script>swal('$message', {button: false,});</script>";
			break;
	}
}

function redirectUnAuthenticatedUser($page, $message)
{
	$_SESSION['sweetError'] = $message;
	header("location:$page");
}

function redirectAuthenticatedUser($page, $message)
{
	$_SESSION['successMessage'] = $message;
	header("location:$page");
}