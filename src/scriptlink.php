<?php 

$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/storage/app/public';
$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/assets/storage';
symlink($targetFolder,$linkFolder);
echo 'Symlink process successfully completed';

?>