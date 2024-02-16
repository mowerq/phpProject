<?php
try {
	$databaseConnection = new PDO("mysql:host=localhost;dbname=samsunozelders", "root", "");
} catch (PDOException $err) {
	echo "Bağlantı Hatası!<br/>" . $err->getMessage();
	die();
}
?>