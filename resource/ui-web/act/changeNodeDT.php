<?php require_once('../auth.php'); ?>
<?php if (isset($auth) && $auth) {?>
<?php
$nodedtnum = $_GET['nodedtnum'];

$nodedtpre = fopen("nodedtpre.txt", "w");
fwrite($nodedtpre, $nodedtnum);
fclose($nodedtpre);

shell_exec('sudo /opt/de_GWD/ui-changeNodeDT');
shell_exec('sudo systemctl restart vtrui');
?>
<?php }?>