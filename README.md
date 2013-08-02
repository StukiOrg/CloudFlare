CloudFlare Module for ZF2
=========================

This module adjusts the global variables $_SERVER['REMOTE_ADDR'], $_SERVER['HTTPS'], and $_SERVER['HTTP_X_FORWARDED_PROTO'] to their correct values when using Cloudflare.

Install
-------

```php
php composer.phar require "stuki/cloudflare": "dev-master"
```


Enable module in `config/application.config.php`: 
```php
return array(
    'modules' => array(
        'CloudFlare',
        ...
    ),
```
