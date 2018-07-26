<?php
/**
 * Created by PhpStorm.
 * User: 84873
 * Date: 2018/7/25
 * Time: 13:44
 */
namespace pizepei\configNg;

class Config
{
    //微信接口配置
    const WECHAT_CONFIG = [
        //中深软微信公众号
        'appid'=>'',
        'appsecret'=>'',
        'token'=>'',
        'encodingAesKey'=>'',
        'cache_type'=> 'redis',//自定义 微信token存储方式 支持  redis  file
        'cache_keyword_type'=> 'mysql',//自定义 关键字  存储方式 支持  redis  mysql
        'host'         => '192.168.1.211', // redis主机
        'port'         => 6379, // redis端口
        'password'     => '', // 密码
        'select'       => 0, // 操作库
        // 'expire'       => 3600, // 有效期(秒)
        'timeout'      => 0, // 超时时间(秒)
        'persistent'   => true, // 是否长连接
        'type'   => 'wechat', // 名称前缀
        // Gateway 配置
        'registerAddress' => '',
    ];

    const DBTABASE = [
        // 数据库类型
        'type'        => 'mysql',
        // 数据库连接DSN配置
        'dsn'         => '',
        // 服务器地址
        'hostname'    => '',
        // 数据库名
        'database'    => 'oauth',
        // 数据库用户名
        'username'    => 'oauth',
        // 数据库密码
        'password'    => '',
        // 数据库连接端口
        'hostport'    => '3306',
        // 数据库连接参数  参考资料http://php.net/manual/zh/pdo.setattribute.php
        'params'      => [
            /**
             * 是否保持长连接   是
             */
            \PDO::ATTR_PERSISTENT => true,
            /**
             *即由MySQL进行变量处理
             */
            \PDO::ATTR_EMULATE_PREPARES =>false,
            /**
             * 指定超时的秒数。并非所有驱动都支持此选项，这意味着驱动和驱动之间可能会有差异。比如，SQLite等待的时间达到此值后就放弃获取可写锁，但其他驱动可能会将此值解释为一个连接或读取超时的间隔。 需要 int 类型。
             */
            \PDO::ATTR_TIMEOUT => 3,
            /**
             * 数据库编码  同 $_pdo->query("SET NAMES utf8")
             */
            \PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',
            /**
             * PDO::ATTR_ERRMODE：错误报告。他的$value可为：
             *      PDO::ERRMODE_SILENT： 仅设置错误代码。
             *      PDO::ERRMODE_WARNING: 引发 E_WARNING 错误
             *      PDO::ERRMODE_EXCEPTION: 抛出 exceptions 异常。
             */
            \PDO::ATTR_ERRMODE =>\PDO::ERRMODE_EXCEPTION ,
        ],
        // 数据库连接编码默认
        'charset'     => 'utf8',
        // 数据库表前缀
        'prefix'      => '',
        // 数据库调试模式
        'debug'       => false,
        // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
        'deploy'      => 0,
        // 数据库读写是否分离 主从式有效
        'rw_separate' => false,
        // 读写分离后 主服务器数量
        'master_num'  => 1,
        // 指定从服务器序号
        'slave_no'    => '',
        // 是否严格检查字段是否存在
        'fields_strict'  => true,
        //是否保持长连接
        'persistent' => true,
        //实例化模式 true 重复使用对象  false 创建新对象
        'setObjectPattern'=>true,
    ];


}