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
}