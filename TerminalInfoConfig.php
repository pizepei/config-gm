<?php
/**
 * Created by PhpStorm.
 * User: pizepei
 * Date: 2018/12/1
 * Time: 16:48
 */

namespace pizepei\config;


class TerminalInfoConfig
{

    /**
     *  模式  high[高性能只使用本地qqwry.dat数据]  precision[高精度 使用qqwry.dat+百度接口 可匹配出是否是手机网络 在手机网络下可匹配到城市] mixture[precision + mysql数据库 如果mysql中没有数据 使用precision获取数据 插入mysq中 ，如果mysql有数据匹配 不同就更新覆盖]
     */
    CONST  TERMINAL_INFO_PATTERN = 'high';

    /**
     *   direct 直连   cdn 官方cnd   代理 agency
     */
    CONST TERMINAL_IP_PATTERN = 'cdn';


    /**
     * API配置
     */
    CONST TERMINAL_INFO_API_CONFIG = [
        /**
         * 判断ip地址查询接口
         */
        'BaiduIp' =>[
            'url'=>'',
            'Key'=>'',
        ],

    ];

}