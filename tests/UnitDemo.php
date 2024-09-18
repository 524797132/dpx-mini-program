<?php
namespace Zhouwenming\DpxMiniProgram\Tests\UserUnit;

use GuzzleHttp\Client;

require_once __DIR__ . '/../vendor/autoload.php';
$client = new Client();
$response = $client->request('GET', 'https://api.dpxkjw.com/api/tencent/goods-warehouse-xml');
print_r($response->getBody()->getContents());
UserCase::testFindUserByCondition();
