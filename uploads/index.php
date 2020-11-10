<?php
if (eregi("index.php",$_SERVER['PHP_SELF'])) {
header('HTTP/1.0 404 Not Found');
header("Location: ../index.php");
exit;
}
?>
