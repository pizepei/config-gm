<?php
/**
 * @Author: pizepei
 * @ProductName: PhpStorm
 * @Created: 2019/6/27 21:57 $
 * @title 简单的dome
 * @explain 类的说明
 */

namespace pizepei\config;


class Deploy
{
    /**
     * 构建服务器配置
     */
    CONST buildServer = [
        'host'=>'',
        'port'=>22,
        'username'=>'root',
        'password'=>'',
        'ssh2_auth'=>'password',//pubkey  or password
        'pubkey'=>'',//这里的公钥对不是必须为当前用户的
        'prikey'=>'',//
    ];

    /**
     * 初始化配置 获取配置参数
     * 项目本身通过本配置向配置中心获取租客的配置（包括saas模式下的配置获取）
     * initialize
     */
    CONST INITIALIZE = [
        'configCenter'=>'',//配置中心地址（配置中心设在ip白名单）
        'appid'=>'appid76372843924923894',//服务appid
        'AppSecret'=>'asdkj346fk3434df67455656345l',//加密参数
        'token'=>'68uijkmsd454lfgnvcv@',//签名使用
    ];


}
