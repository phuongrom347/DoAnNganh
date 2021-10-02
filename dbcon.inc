<?
$sever = "localhost";
$user = "root";
$password = "";
$database = "VngRestaurent";

$link = mysql_connect($sever,$user,$password) or die("K?t n?i không thành công". mysql_error());
mysql_query("SET NAMES 'utf8'", $link);
$results = mysql_select_db($database, $link);

?>
