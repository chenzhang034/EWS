<?php 
// DB credentials.
define('DB_HOST','ssdrsserver2.hosting.co.uk');
define('DB_USER','ewsische_chenchenzhang');
define('DB_PASS','chen16376129+++');
define('DB_NAME','ewsische_EWS');

// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
