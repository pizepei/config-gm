<?php
/**
 * Created by PhpStorm.
 * User: pizepei
 * Date: 2019/1/22
 * Time: 14:26
 * @title  服务Service包配置
 */

namespace pizepei\config;


class Service
{
    /**
     * 短信配置
     */
    CONST SMS =[
        /**
         * 阿里云
         */
        'Aliyun'=>[

            'accessKeyId'=>'',

            'accessKeySecret'=>'',
            //地区
            'RegionId'=>'cn-hangzhou',
            /**
             * 签名名称
             */
            'SignName'=>'',
            //模板id
            'TemplateCode'=>'',
            //模式
            'pattern'=>[

            ],
        ],

    ];


}