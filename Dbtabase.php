<?php
/**
 * Created by PhpStorm.
 * User: pizepei
 * Date: 2018/7/26
 * Time: 17:34
 * @title db 配置
 */

namespace pizepei\config;


class Dbtabase
{

    const DBTABASE = [
        // 数据库类型
        'type'        => 'mysql',
        // 数据库连接DSN配置
        'dsn'         => '',
        // 服务器地址
        'hostname'    => 'rm',
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
            /**
             * PDO::ATTR_DEFAULT_FETCH_MODE - 设置默认的提取模式。
             * PDO::FETCH_ASSOC：返回一个索引为结果集列名的数组
             * PDO::FETCH_BOTH（默认）：返回一个索引为结果集列名和以0开始的列号的数组
             * PDO::FETCH_BOUND：返回 TRUE ，并分配结果集中的列值给 PDOStatement::bindColumn() 方法绑定的 PHP 变量。
             * PDO::FETCH_CLASS：返回一个请求类的新实例，映射结果集中的列名到类中对应的属性名。如果 fetch_style 包含 PDO::FETCH_CLASSTYPE（例如：PDO::FETCH_CLASS | PDO::FETCH_CLASSTYPE），则类名由第一列的值决定
             * PDO::FETCH_INTO：更新一个被请求类已存在的实例，映射结果集中的列到类中命名的属性
             * PDO::FETCH_LAZY：结合使用 PDO::FETCH_BOTH 和 PDO::FETCH_OBJ，创建供用来访问的对象变量名
             * PDO::FETCH_NUM：返回一个索引为以0开始的结果集列号的数组
             * PDO::FETCH_OBJ：返回一个属性名对应结果集列名的匿名对象
             */
            \PDO::ATTR_DEFAULT_FETCH_MODE =>\PDO::FETCH_ASSOC,
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