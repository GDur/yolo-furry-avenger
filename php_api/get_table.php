<?php
require_once("config.php");

$full_table_name = "";
if (isset($_GET["full_table_name"])) {
		$full_table_name = $_GET["full_table_name"];
}

$result = mysqli_query($conn, "SELECT * FROM `".$full_table_name."`");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows);
?>
