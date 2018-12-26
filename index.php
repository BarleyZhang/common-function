<?php
require __DIR__."/vendor/autoload.php";
$url = 'http://xxx.barleyz.cn/api/goods/home_page';
var_dump(barley\common\Common::httpRequest($url,'get'));
