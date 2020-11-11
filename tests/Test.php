<?php

require_once '../vendor/autoload.php';

use Ar414\UploadBinaryImage;

$url = 'http://0.4.1.4:414/upload?path=/test/';
$fields = [];
$fieldName = 'file';
$fileName = 'ar414.png';
$fileBody = file_get_contents('https://github.com/ar414-com/ar414-com/raw/master/assets/ar414.png');
$ret = UploadBinaryImage::upload($url,$fields,$fieldName,$fileName,$fileBody);
var_dump($ret);

