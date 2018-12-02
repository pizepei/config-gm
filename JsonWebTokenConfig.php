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
    CONST secret =[
        /**
         * name 名字 value 密钥   role 角色标识  alg 加密方法  Payload 内容
         * 密钥代表的等级
         */
        'common'=>[
            'name'=>'普通权限','value'=>'abcd123343', 'alg'=>'md5','role'=>'common','Payload'=>'common'
        ],
        'base'=>['name'=>'管理员','value'=>'', 'alg'=>'md5','role'=>''],
        'visitor'=>['name'=>'游客','value'=>'', 'alg'=>'md5','role'=>''],
    ];
    /**
     * 对应的权限（secret  role ）
     */
    CONST role = [
        'common'=>[],
    ];
    /**
     * Header
     */
    CONST Header = [
        'alg'=>'md5',//加密方法（默认MD5 一般根据secret 的alg设置）
        'typ'=>'JWT',//签名类型
    ];
    /**
     *jwtPayload
     */
    CONST Payload = [
        'common'=>[
            'iss'=>'server',//签发人
            'exp'=>7200,//过期时间s
            'sub'=>'phpServer--socketServer',//主题
            'aud'=>'socketServer',//受众
            'nbf'=>0,//生效时间
            'iat'=>0,//签发时间
            'jti'=>'',//编号(随机数)
        ],
    ];
    CONST token_name = 'token';

}