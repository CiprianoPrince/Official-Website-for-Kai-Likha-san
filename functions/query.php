<?php
$conn = $pdo->open();

function getAllFromTable($table)
{
	global $conn;
	try {
		$stmt = $conn->prepare("SELECT * FROM $table");
		$stmt->execute();
		return $stmt->fetch();
	} catch (PDOException $e) {
		echo "There is some problem in connection: " . $e->getMessage();
	}
}

function getAllByproductID($table, $id)
{
	global $conn;
	$query = "SELECT * FROM $table WHERE product_id = '$id'";
	return $query_run = mysqli_query($conn, $query);
}

function getAllBycategoryID($table, $id)
{
	global $conn;
	$query = "SELECT * FROM $table WHERE category_id = '$id'";
	return $query_run = mysqli_query($conn, $query);
}

function getAllVisibleStatusFromTable($table)
{
	global $conn;
	$query = "SELECT * FROM $table WHERE status = '1'";
	return $query_run = mysqli_query($conn, $query);
}

function getAllByIdAndVisibleStatus($table, $id)
{
	global $conn;
	$query = "SELECT * FROM $table WHERE id = '$id' AND status = '1'";
	return $query_run = mysqli_query($conn, $query);
}

function getBySlugAndActive($table, $slug)
{
	global $conn;
	$query = "SELECT * FROM $table WHERE slug = '$slug' AND status = '1' LIMIT 1";
	return $query_run = mysqli_query($conn, $query);
}

function getAllProductsBycategoryID($category_id)
{
	global $conn;
	$query = "SELECT * FROM product WHERE category_id = '$category_id' AND status = '1'";
	return $query_run = mysqli_query($conn, $query);
}

function getUserCartItems()
{
	global $conn;
	$userid = $_SESSION['auth_user']['userid'];
	$query = "SELECT c.id as cid, c.prod_id, c.prod_qty, p.product_id as pid, p.product_name, p.image, p.selling_price FROM carts c, product p WHERE c.prod_id = p.product_id AND c.user_id = '$userid' ORDER BY c.id DESC";
	return $query_run = mysqli_query($conn, $query);
}
$pdo->close();
// CLOSE_CONN;