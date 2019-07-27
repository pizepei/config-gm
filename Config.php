<?php
/**
 * Created by PhpStorm.
 * User: pizepei
 * Date: 2018/7/25
 * Time: 13:44
 * @title 项目配置
 */
namespace pizepei\config;

class Config
{

    CONST UNIVERSAL =[
        'cache' => [
            /**
             * 缓存类型（驱动drive）redis file
             */
            'driveType'=>'file',
            /**
             * 缓存路径（file类型下）
             *DIRECTORY_SEPARATOR 目录分割符
             */
            'targetDir' => '..'.DIRECTORY_SEPARATOR.'runtime'.DIRECTORY_SEPARATOR,
            /**
             *缓存类型目录
             */
            'CacheTypeDir'=>'',
        ],
        /**
         * 初始化
         */
        'init' =>[
            /**
             * 命名空间
             */
            'appname' =>'app',
            /**
             * 模式
             * exploit调试
             *
             */
            'pattern' =>'exploit',
            /**
             * 自定义define配置目录
             */
            //'define' =>  '..'.DIRECTORY_SEPARATOR.__APP__.DIRECTORY_SEPARATOR.'define.php',
            /**
             * 控制器return默认数据类型
             * json
             * html
             */
            'return' => 'json',
            /**
             * json_encode 参数
             */
            'json_encode'=>JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES,
            /**
             *index示图入口文件（单页应用）
             */
            'index-view'=>'./layuiAdmin.pro-v1.2.1/start/index.html',
            /**
             * 自定义响应
             */
            'header'=>[
                'X-Powered-By'=>'ASP.NET',
                'Server'=>'Apache/2.4.23 (Win32) OpenSSL/1.0.2j mod_fcgid/2.3.9',

            ],
            /**
             * 是否对请求参数进行过滤（删除不在注解中的参数key）
             */
            'requestParam'=>true,
            /**
             * 请求过来的xml 数据层级 限制（防止攻击）
             */
            'requestParamTier'=>50,
            /**
             *是否开启获取客户端详情true
             */
            'clientInfo'=>false,
            /**
             *设置返回信息内容(非开发模式下)
             */
            'SYSTEMSTATUS'=>[
                'controller',//路由控制器
                'function_method',// 请求方法 get post
                'request_method',//控制器方法
                'request_url',//完整路由（去除域名的url地址）
                'route',//解释路由
                'sql',//历史slq
                'clientInfo',//ip信息
                '系统开始时的内存(K)',//系统状态
                '系统结束时的内存(KB)',
                '系统内存峰值(KB)',
                '执行耗时(S)',
            ],
            //本服务的uuid标识（分布式时可保证不同服务之间的空间唯一）
            'uuid_identifier'=>'test-1',
            /**
             * 成功返回格式
             */
            'SuccessReturnJsonCode'=>[
                'name'=>'code',
                'value'=>200,
            ],
            'ErrorReturnJsonCode'=>[
                'name'=>'code',
                'value'=>100,
            ],
            /**
             * 错误返回格式
             */
            'SuccessReturnJsonMsg'=>[
                'name'=>'msg',
                'value'=>'success',
            ],
            'ErrorReturnJsonMsg'=>[
                'name'=>'msg',
                'value'=>'error',
            ],
            /**
             * 返回的数据总体
             */
            'ReturnJsonData'=>'data',
            /**
             * 返回的数据数量
             */
            'ReturnJsonCount'=>'count',

            /**
             * 没有权限
             */
            'jurisdictionCode'=>40003,

            /**
             * 没有登录
             */
            'notLoggedCode'=>10001,
        ],
        /**
         * 路由配置
         */
        'route' => [
            /**
             * 路由类型
             * note 注解
             * file 常规
             */
            'type' =>'note',
            /**
             * 路由后缀名  比如 .html(note 注解时不可用)
             */
            'expanded' => '',
            /**
             * 自定义路由保存目录
             */
            //'file_dir' =>  '..'.DIRECTORY_SEPARATOR.__APP__.DIRECTORY_SEPARATOR.'route',
            /**
             * ReturnSubjoin
             */
            'ReturnSubjoin'=>[

            ],
            /**
             * 默认 \ 路由的路径-》已经存在的注解地址
             */
            'index'=>'index.html',

        ],
        /**
         *API
         */
    ];
    CONST ACCOUNT =[
      'password_regular'=>['/^.*(?=.{6,})(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*+=?]).*$/','密码至少并且6位且必须包含大小写字母和特殊字符 !@#$%^&*+=?'],//密码正则表达式
      'number_count'=>20,//会员编号参数
      'algo'=>PASSWORD_BCRYPT,//password_hash 参数
      'options'=>['cost'=>11],//password_hash 参数
      'user_logon_token_salt_count'=>22,//logon_token_salt 长度
      'logon_token_salt'=>'si8934jfk08343*%wew#jj12@99sidjxjc#$lksjd^&*',
    ];
    /**
     * API配置
     */
    CONST API_CONFIG = [
        /**
         * 判断ip地址查询接口
         */
        'BaiduIp' =>[
            'url'=>'',
            'Key'=>'',
        ],

    ];


}