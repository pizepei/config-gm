<?php
/**
 * @Author: pizepei
 * @ProductName: PhpStorm
 * @Created: 2019/2/15 23:49
 * @title 错误代码类
 */

namespace pizepei\config;


class ErrorOrLogConfig
{
    /**
     * 友善提示
     */
    const HINT =[
        0=>'',
        1=>'系统异常，请稍后再试！',
        2=>'网络繁忙，请稍后再试！',
        3=>'活动火爆，请稍后再试！',
        4=>'异常操作，请稍后再试！',
    ];
    const HINT_MSG =[
        0=>'',
        1=>'请稍后再试！',
        2=>'请联系客服！',
        3=>'去联系管理员！',
        4=>'请截图联系客服！',
    ];
    /**
     * 系统框架
     *
     * 友善提示【错误代码】
     */
    const SYSTEM_FRAME =[
        //代码  友善提示，联系方式，开发提示
        'SYS'=>[1,3,'一个系统错误'],
    ];
    /**
     * 应用自定义
     */
    const USE_CUSTOM =[
        'USE'=>[1,3,'应用开发级别错误'],
    ];
    /**
     * 每个Exception
     * 第一个是开发时增加提示的，code是生产时主要使用的
     *
     * 当然开发时出现错误  会同时 返回 masg   code  code对应的ErrorOrLogConfig配置信息
     *
     * 生产时出现错误时 masg不会输出  只输出code 和 code对应的ErrorOrLogConfig配置信息（如果没有配置就使用默认错误提示）
     *
     * 系统 错误代码  10000-49999
     *
     * 应用 错误代码  50000-99999
     */
}