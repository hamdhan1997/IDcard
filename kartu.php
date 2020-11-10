<?php
$do=$_POST['do'];
if ($do == "submit") {
function died ($error) {
$title="Ktp Facebook";
include('header.php');
echo('</div><div class="fpoplog"><div align="center"><font color="silver">Invalid Authentication Data</font></center>');
echo('</div></div><div class="tx"><div align="left">');
echo("Sorry, but there were error(s) found with the data you submitted..!!<br/>");
echo("These errors appear below..<br/>");
echo("$error");
echo('Please go back and fix these errors..!!<br><a href="./index.php"><font color="#3399ff">Back</font></a>');
@unlink('uploads/ktpfacebook.png');
echo('<br/>');
echo('</div></div><div class="footer"><center>');
echo('<font  style="color:red"><b>Ktp Facebook</b></font></center></div></div></body></html>');
die();
}
if (!isset($_POST['username']) || !isset($_POST['sex']) || !isset($_POST['date']) || !isset($_POST['month']) || !isset($_POST['year']) || !isset($_POST['prof']) || !isset($_POST['loc']) || !isset($_POST['dayb']) || !isset($_POST['monthb']) || !isset($_POST['yearb'])) {
died('Sorry, there appears to be a problem with your login submission..!!');
}
$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$sex = isset($_POST['sex']) ? trim($_POST['sex']) : '';
$date = isset($_POST['date']) ? trim($_POST['date']) : '';
$month = isset($_POST['month']) ? trim($_POST['month']) : '';
$year = isset($_POST['year']) ? trim($_POST['year']) : '';
$prof = isset($_POST['prof']) ? trim($_POST['prof']) : '';
$loc = isset($_POST['loc']) ? trim($_POST['loc']) : '';
$dayb = isset($_POST['dayb']) ? trim($_POST['dayb']) : '';
$monthb = isset($_POST['monthb']) ? trim($_POST['monthb']) : '';
$yearb = isset($_POST['yearb']) ? trim($_POST['yearb']) : '';
if (strlen($username) < 2 || strlen($username) > 35) {
$error_message .= 'Username does not appear to be valid..!!<br/>';
}
if (strlen($prof) < 3 || strlen($prof) > 35) {
$error_message .= 'FB profile does not appear to be valid..!!<br/>';
}
if (strlen($loc) < 1 || strlen($loc) > 30) {
$error_message .= 'Location does not appear to be valid..!!<br/>';
}
if (strlen($error_message) > 0) {
died($error_message);
}
}
#Access the $_FILES global variable for this specific file being uploaded and create local PHP variables from the $_FILES array of information
$fileName = $_FILES["uploaded_file"]["name"];
#The file name
$fileTmpLoc = $_FILES["uploaded_file"]["tmp_name"];
#File in the PHP tmp folder
$fileType = $_FILES["uploaded_file"]["type"];
#The type of file it is
$fileSize = $_FILES["uploaded_file"]["size"];
#File size in bytes
$fileErrorMsg = $_FILES["uploaded_file"]["error"];
#0 for false... and 1 for true
$kaboom = explode(".", $fileName);
#Split file name into an array using the dot
$fileExt = end($kaboom);
#Now target the last array element to get the file extension START PHP Image Upload Error Handling
if (!$fileTmpLoc) {
#if file not chosen
header("Location: ./index.php?msg=Please browse for a file before clicking the upload button..!!");
exit();
} else if($fileSize > 256*1024) {
#if file size is larger than 256 Kilobytes
header("Location: ./index.php?msg=Your file was larger than 256 Kilobytes in size..!!");
@unlink($fileTmpLoc);
#Remove the uploaded file from the PHP temp folder
exit();
} else if(!preg_match("/.(gif|jpg|png)$/i", $fileName)) {
#This condition is only if you wish to allow uploading of specific file types
header("Location: ./index.php?msg=Your image was not .gif, .jpg, or .png..!!");
@unlink($fileTmpLoc);
#Remove the uploaded file from the PHP temp folder
exit();
} else if($fileErrorMsg == 1) {
#if file upload error key is equal to 1
header("Location: ./index.php?msg=An error occured while processing the file.. Try again..!!");
exit();
}
#END PHP Image Upload Error Handling
#Place it into your "uploads" folder now using the move_uploaded_file() function
$moveResult = move_uploaded_file($fileTmpLoc, "uploads/$fileName");
#Check to make sure the move result is true before continuing
if ($moveResult != true) {
header("Location: ./index.php?msg=File not uploaded.. Try again..!!");
@unlink($fileTmpLoc);
#Remove the uploaded file from the PHP temp folder
exit();
}
@unlink($fileTmpLoc);
#Remove the uploaded file from the PHP temp folder
include 'lp.php';
comrade_resizer($target_file, $resized_file, $wmax, $hmax, $fileExt);
# ----------- End Comrade Universal Image Resizing Function ----------- #
$qr_file = $PNG_WEB_DIR.basename($filename);
#applying watermark images and text info to template
$im = writeToImage('bahan.png', $resized_file, $username, $sex, $date, $month, $year, $prof, $loc, $dayb, $monthb, $yearb);
function writeToImage($imagefile, $image, $text1, $text2, $text3, $text4, $text5, $text6, $text7, $text8, $text9, $text10){
if(file_exists($imagefile)){
$stamp = @imagecreatefrompng($image);
$im = @imagecreatefrompng($imagefile);
$marge_right = 23;
$marge_bottom = 117;
$sx = imagesx($stamp);
$sy = imagesy($stamp);
imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
$white = imagecolorallocate($im, 255, 255, 255);
$black = imagecolorallocate($im, 0, 0, 0);
$penColour = imagecolorallocate($im, 0x14, 0x53, 0x94);
$dob = implode(' ', array_pad(array($text3, $text4, $text5), 0, ''));
$jointdate = implode('-', array_pad(array($text8, $text9, $text10), 0, ''));
$barcode = "KTP Facebook By KtpFacebook.tk"; 
#write text strings to template image
imagefttext($im,12,0,18,109,$black,"times.ttf",$text1);
imagefttext($im,12,0,18,198,$black,"times.ttf",$dob);
imagefttext($im,12,0,18,153,$black,"times.ttf",$text2);
imagefttext($im,12,0,154,198,$black,"times.ttf",$text6);
imagefttext($im,12,0,154,153,$black,"times.ttf",$text7);
imagefttext($im,12,0,18,243,$black,"times.ttf",$jointdate);
imagettftext($im,20,0,154,243,$penColour,"barcode.ttf",$barcode);
} else {
header("Location: ./index.php?msg=Error writing to image..!!");
}
imagepng($im, 'uploads/ktpfacebook.png');
header("Location: ./view.php");
imagedestroy($im);
}
?>
