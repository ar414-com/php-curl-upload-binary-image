# php-curl-upload-binary-image

![](https://img.shields.io/badge/build-passing-brightgreen)
![](https://img.shields.io/badge/beta-v0.0.1-blue)
[![](https://img.shields.io/badge/downloads-4.57%20KB-orange)](https://packagist.org/packages/ar414/redis-lock)
![](https://img.shields.io/badge/coverage-100%25-green)
![](https://img.shields.io/badge/license-MIT-brightgreen)

PHP upload binary image data via CURL

# Install
```
composer require ar414/curl-upload-binary-image
```

# Usage
```php
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


```