<?php
ignore_user_abort();
error_reporting(0);
$title="KTP Facebook Marker";
include('header.php');
include('head.php');
echo('<div class="fpoplog"><div align="center"><font color="red"><b>Nb: jika yang terlihat ternyata bukan Foto dengan datamu, maka coba buat lagi nanti!! kemungkinan datamu tertukar</b> <a href="/delfil.php">Klik Disini</a></font><br/><div class="cx"><b>Image Preview</b></div></center>');
echo('</div></div><div class="cx"><div align="center">');
echo "<img src=\"uploads/ktpfacebook.png\" border=\"0\" title=\"ID CARD Preview\" width=\"135px\" height=\"87px\" border=\"0\"/><br/>";
echo '<form action="uploads/ktpfacebook.png"><input type="submit" value="Download"/></form>
<br/> <form action="/delfil.php"><input type="submit" value="Buat Baru"/></form> ';
include 'footer.php;'
?>
