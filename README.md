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
use Ar414\UploadBinaryImage;

$url = '192.168.4.14/upload';

// according to own business
$fields = ['token' => '7d11d63785a9dd2d14z474f147xa1c53b6d7e585e41a46eb4f3'];

$fileName = 'ar414.png';
$fileBody = file_get_contents('https://github.com/ar414-com/ar414-com/raw/master/assets/ar414.png');

UploadBinaryImage::upload($url,$fields,$fileName,$fileBody);
```