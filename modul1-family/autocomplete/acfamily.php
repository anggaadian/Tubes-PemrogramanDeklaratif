<?php
require_once "../../connection.php";
$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "select KK, ID from FAMILY where KK LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$cid = $rs['ID'];
	$cname = $rs['KK'];
	echo "$cname|$cid\n";
}
?>