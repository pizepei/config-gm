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
    const HINT_MSG =[
        0=>'1',
        1=>'请稍后再试！',
        2=>'请联系客服！',
        3=>'去联系管理员！',
        4=>'请截图联系客服！',
        5=>'系统异常，请稍后再试！',
        6=>'网络繁忙，请稍后再试！',
        7=>'活动火爆，请稍后再试！',
        8=>'异常操作，请稍后再试！',
    ];
    const CODE_DISTRICT = [

    ];
    /**
     * 系统框架10000-49999
     *
     * 友善提示【错误代码】
     */
    const SYSTEM_CODE =[
        //代码  友善提示，联系方式[开发负责人]，开发提示
        10000=>[5,'错误说明','功能模块','联系方式[开发负责人]'],
    ];
    /**
     * 应用自定义50000-99999
     */
    const USE_CODE =[
        //代码  友善提示（如果不是int直接提示），联系方式[开发负责人]，开发提示
        50000=>[5,'开发错误说明','功能模块','联系方式[开发负责人]'],
        50001=>[5,'开发错误说明','功能模块','联系方式[开发负责人]'],

    ];

    /**
     * 错误区间
     */
    const CODE_SECTION = [
        'SYSTEM_CODE'=>[
            10000,49999//系统 错误代码  10000-49999
        ],
        'USE_CODE'=>[
            50000,99999//应用 错误代码  50000-99999
        ]
    ];

    /**
     * 每个Exception
     * 第一个是开发时增加提示的，code是生产时主要使用的
     *
     * 当然开发时出现错误  会同时 返回 masg   code  code对应的ErrorOrLogConfig配置信息
     *
     * 生产时出现错误时 masg不会输出  只输出codeCipher（随机生成的） 和 code对应的ErrorOrLogConfig配置错误提示信息（如果没有配置就使用默认错误提示）
     *
     */
}