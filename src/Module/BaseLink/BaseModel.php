<?php

namespace Zhouwenming\DpxMiniProgram\Module\BaseLink;
use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Eloquent\Model;
class BaseModel extends Model
{
    protected $config;
    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(dirname(dirname(dirname(dirname(__FILE__)))));
        $dotenv->safeLoad();
        $this->config = [
            'driver' => 'mysql',
            'host' => $_ENV['DB_HOST'] ?? '114.55.99.152',
            'database' =>$_ENV['DB_DATABASE'] ?? 'database',
            'username' => $_ENV['DB_USERNAME'] ?? 'username',
            'password' => $_ENV['DB_PASSWORD'] ?? 'password',
            'charset' =>  'utf8',
            'collation' =>  'utf8_general_ci',
            'prefix' =>  '',
        ];
        $this->init();
    }
    public function init()
    {
        $db = new DB();
        $db->addConnection($this->config);
        $db->setAsGlobal(); //设置静态全局可用
        $db->bootEloquent();
    }
}
