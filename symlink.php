<?php 


$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/storage/app/public/cover_image';
$linkFolder = '/laravel/public/storage/cover_image';
symlink($targetFolder,$linkFolder);
echo ($linkFolder);



?>