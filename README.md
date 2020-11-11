# php-curl-upload-binary-image

![](https://img.shields.io/badge/build-passing-brightgreen)
![](https://img.shields.io/badge/beta-v0.0.1-blue)
[![](https://img.shields.io/badge/downloads-4.57%20KB-orange)](https://packagist.org/packages/ar414/redis-lock)
![](https://img.shields.io/badge/coverage-100%25-green)
![](https://img.shields.io/badge/license-MIT-brightgreen)

### Support
[![jetbrains](https://github.com/ar414-com/nginx-rtmp-ffmpeg-conf/raw/master/assets/images/jetbrains.svg)](https://www.jetbrains.com/?from=nginx-rtmp-ffmpeg)

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

#### Support Author
[![coffee](http://cdn.ar414.com/coffee.png)](https://www.buymeacoffee.com/ar414)  [![wx](https://cdn.ar414.com/wecaht-logo.png)](https://cdn.ar414.com/wxpay_coffee.jpg)[![alipay](https://cdn.ar414.com/alipay-logo.png)](https://cdn.ar414.com/alipay_coffee.jpg)