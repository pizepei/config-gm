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
             */
            'pattern' =>'exploit',
            /**
             * 自定义define配置目录
             */
            'define' =>  '..'.DIRECTORY_SEPARATOR.__APP__.DIRECTORY_SEPARATOR.'define.php',
            /**
             * 控制器return默认数据类型
             * json
             * html
             */
            'return' => 'json'
        ],
        /**
         * 路由配置
         */
        'route' => [
            /**
             * 路由后缀名  比如 .html
             */
            'expanded' => '',
            /**
             * 自定义路由保存目录
             */
            'file_dir' =>  '..'.DIRECTORY_SEPARATOR.__APP__.DIRECTORY_SEPARATOR.'route',
        ],
        /**
         *API
         */
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