<?php

$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/storage/app/public';
$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/public/storage';
$result = symlink($targetFolder,$linkFolder);
if($result){
    echo 'success';    
} else {
    echo 'failed';
}

