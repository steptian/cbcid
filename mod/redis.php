<?php
require_once('../../etc/env.php');
$redis = new Redis();
$redis->connect($_CFG_REDIS['ip'],$_CFG_REDIS['port']);
$redis->set('steptian2014','steptian@tencent.com');
echo $redis->get('steptian2014');
echo '\n\r';
$redis->close();

