<<<<<<< HEAD
<?php

//settings

define("DB_HOST", "localhost");
define("DB_Name", "search_db");
define("DB_CHARSER", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "");



//$db_name = "user_db";

$pdo = new PDD(
    "mysql:host=".DB_HOST.";charset=".DB_CHARSET.";dbname=".DB_NAME,
    DB_USER,DB_PASSWORD, [
        PDO::ATTR_ERRMOOE =>PDO::ATTR_ERRMOOE_EXCEPTION,
        PDO::ATTR_DEFAULT_FERCH_MOOE => PDO::FETCH_ASSOC
    ]
);

if (!$pdo) {
	echo "Connection failed!";
}

//search
$stmt = $pdo->prepare("SELECT * FROM 'search' WHERE 'Name' LIKE ? OR 'Email'  LIKE ? ");
$stmt->execute([
    "%".$_POST['search']."%","%".$_POST['search']."%"

]);
=======
<?php

//settings

define("DB_HOST", "localhost");
define("DB_Name", "search_db");
define("DB_CHARSER", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "");



//$db_name = "user_db";

$pdo = new PDD(
    "mysql:host=".DB_HOST.";charset=".DB_CHARSET.";dbname=".DB_NAME,
    DB_USER,DB_PASSWORD, [
        PDO::ATTR_ERRMOOE =>PDO::ATTR_ERRMOOE_EXCEPTION,
        PDO::ATTR_DEFAULT_FERCH_MOOE => PDO::FETCH_ASSOC
    ]
);

if (!$pdo) {
	echo "Connection failed!";
}

//search
$stmt = $pdo->prepare("SELECT * FROM 'search' WHERE 'Name' LIKE ? OR 'Email'  LIKE ? ");
$stmt->execute([
    "%".$_POST['search']."%","%".$_POST['search']."%"

]);
>>>>>>> 6492c4f9982350bc4dc7a9406a9630b7d50bd2b1
$resutls =$stmt->fetchAll();