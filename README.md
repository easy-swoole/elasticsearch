# elasticsearch
Elasticsearch client，对官方客户端的协程化移植

## 参考文献
https://github.com/elastic/elasticsearch-php/blob/master/src/Elasticsearch/Client.php

https://github.com/elastic/elasticsearch-php/blob/master/src/Elasticsearch/ClientBuilder.php

## 单元测试
```php
php vendor/bin/co-phpunit tests
```
> 单元测试前请修改项目根目录下phpunit.php内的配置项