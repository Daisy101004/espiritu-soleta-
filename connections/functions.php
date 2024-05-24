<?php
include('connection.php');

class functions
{

	public function AddUsers($username, $contactNumber, $password)
	{
		$sql = 'SELECT * FROM customers WHERE contactNumber=?';
		$db = new PDODatabase();
		$rset = $db->prepare($sql);
		$rset->execute(array($contactNumber));
		$rows = $rset->fetchAll(PDO::FETCH_ASSOC);
		if (count($rows) > 0) {
			echo 'Contact is already used';
		} else {
			$sql = 'INSERT customers values(?,?,?,?)';
			$db = new PDODatabase();
			$rset = $db->prepare($sql);
			$rset->execute(array(null, $username, $contactNumber, $password));
			echo 'User Added Successfully';
		}
	}
	public function UpdateUsers($ufirstname, $ulastname, $uID)
	{
		$sql = 'UPDATE tbl_users set firstname=?, lastname=? WHERE id=?';
		$db = new PDODatabase();
		$rset = $db->prepare($sql);
		$rset->execute(array($ufirstname, $ulastname, $uID));

		echo 'Record Updated';
	}

	public function DeleteUsers($deleteID)
	{
		$sql = 'DELETE FROM tbl_users WHERE id =?';
		$db = new PDODatabase();
		$rset = $db->prepare($sql);
		$rset->execute(array($deleteID));

		echo 'Record Updated';
	}

	public function CheckAuthorization($authContactNumber, $authPassword)
	{
		$sql = 'SELECT * FROM customers WHERE contactNumber=? && password=?';
		$db = new PDODatabase();
		$rset = $db->prepare($sql);
		$rset->execute(array($authContactNumber, $authPassword));
		$rows = $rset->fetchAll(PDO::FETCH_ASSOC);
		if (count($rows) > 0) {
			foreach ($rows as $result) {
				echo $result["username"] . "," . $result["contactNumber"] . "," . $result["id"];
			}
		} else {
			echo 'Password or Contact not matched';
		}
	}

	public function AddProducts($products, $total, $quantity, $address, $customer_id, $username)
	{
		$sql = 'INSERT orders values(?,?,?,?,?,?,?)';
		$db = new PDODatabase();
		$rset = $db->prepare($sql);
		$rset->execute(array(null, $products, $total, $quantity, $address, $customer_id, $username));
		echo 'Product Added Successfully';
	}
}

$functions = new functions();
//Products Records
if (isset($_POST['products'])) {
	$msg = $functions->AddProducts($_POST['products'], $_POST['total'], $_POST['quantity'], $_POST['address'], $_POST['customer_id'], $_POST['username']);
}
//Add Records
if (isset($_POST['username'])) {
	$msg = $functions->AddUsers($_POST['username'], $_POST['contactNumber'], $_POST['password']);
}
//Update Records
if (isset($_POST['ufirstname'])) {
	$msg = $functions->UpdateUsers($_POST['ufirstname'], $_POST['ulastname'], $_POST['uID']);
}
//Delete Records
if (isset($_POST['deleteID'])) {
	$msg = $functions->DeleteUsers($_POST['deleteID']);
}
//Login Records
if (isset($_POST['authContactNumber'])) {
	$msg = $functions->CheckAuthorization($_POST['authContactNumber'], $_POST['authPassword']);
}

echo $msg;
