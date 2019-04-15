<?php
/**
 * Created by PhpStorm.
 * User: pizepei
 * Date: 2018/12/1
 * Time: 16:02
 * JsonWebToken 配置
 */

namespace pizepei\config;


class JsonWebTokenConfig
{
    /**
     * 密钥 数组
     */
    CONST JSON_WEB_TOKEN_SECRET =[
        /**
         * name 名字 secret 密钥   role 角色标识  alg 加密方法  Payload 内容
         */
        'common'=>[
            'name'=>'普通权限',
            'secret'=>'abcd123343',
            'secret_key'=>'sakjshkjkljm889289023dscponbxba3242903902ijkds',//Header alg 为 aes 时需要
            'token_name'=>'token',
            'alg'=>'md5',
            'role'=>'common',
            'Header'=>[
                'alg'=>'aes',//加密方法（默认base64_encode   可选ase）
                'sig'=>'md5',//签名方法（默认MD5 一般根据secret 的alg设置）可选sha1
                'typ'=>'JWT',//签名类型
                'appid'=>'ashaaasd1232jjdskhkkx',//必须
                'number'=>'',//用户编号（尽可能的对外隐藏uuid）
            ],
            'Payload'=>[//jwtPayload
                        'iss'=>'server',//签发人
                        'exp'=>7200,//过期时间s
                        'sub'=>'phpServer--socketServer',//主题
                        'aud'=>'socketServer',//受众
            ],
        ],
        'base'=>['name'=>'管理员','value'=>'', 'alg'=>'md5','role'=>''],
        'visitor'=>['name'=>'游客','value'=>'', 'alg'=>'md5','role'=>''],
    ];
    /**
     * 对应的权限（secret  role ）
     */
    CONST JSON_WEB_TOKEN_ROLE = [
        'common'=>[],
        'base'=>[],
        'visitor'=>[],
    ];

}