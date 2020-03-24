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
     * 是否调试模式
     */
    CONST __EXPLOIT__ = 1;
    /**
     * 文档展示模式（非开发模式、和生产模式下使用）
     * 1、默认 全部不展示
     * 2、只展示微服务接口文档
     */
    CONST __DOCUMENT__ = '';
    /**
     * 项目环境
     * develop  开发环境
     * production       生产环境
     * 考虑到安全问题  默认为production
     */
    const ENVIRONMENT = 'production';
    /**
     * 是否是中心项目（核心项目、账号控制中心、网站配置中心、index入口中心）
     */
    const CENTRE_ID = 0;
    /**
     * 是否是部署主项目（一般是部署系统时需要用）
     */
    const DEPLOY = false;
    /**
     * 在构建时需要排除的包控制器排除依据
     * 考虑到控制到控制器级别和命名空间的使用规范：统一使用命名空间排除
     */
    const EXCLUDE_PACKAGE = [
        'bases',
    ];

    /**
     * 项目标识 用来在模块中区分项目、在微服务中区分服务、权限结合时的标识
     */
    const PROJECT_ID = 'normative';
    /**
     * 服务模式对应路由中的resourceType（控制服务方式）
     */
    const SERVICE_PATTERN = ['api','microservice'];

    const MicroService = [
        'url' =>'',//配置中心地址（建议使用服务ip）
        'hostDomain'  =>'',//域名（配合ip使用） 服务端使用cdn时非常有用
        'appid'=>'',//服务appid
        'appSecret'=>'',//加密参数
        'encodingAesKey'=>'',//解密参数
        'token'=>'',//签名使用
        'urlencode' => true,
    ];
    # 当前项目的权限根信息
    const PERMISSIONS = [
        'title' =>'系统核心',
        'id'    =>'normative',
        'field' =>'normative',
    ];
    /**
     * 获取配置的方式
     * ConfigCenter   远程配置中心
     * Local   本地配置
     */
    const toLoadConfig = 'ConfigCenter';

    /**
     * 部署时后端的nginx 转发路由标识
     */
    const MODULE_PREFIX = 'normative';
    /**
     * 部署时的  公共前端资源    nginx 转发路由标识
     */
    const VIEW_RESOURCE_PREFIX = 'resource';
    /**
     * cdn 配置
     */
    const CDN_URL ='';
    /**
     *cdn代理端
     * status 是否启用代理
     * 代理服务器ip 集合  all 代表 所有
     */
    const CDN_AGENCY =[
        'status'=>false,
        'agency'=>['all'],
    ];

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
        'WebSocketServer'=>[
            'config'=>[
                'ssl_cert_file' => '',
                'ssl_key_file' => '',
            ],
            'hostName' => 'oauth.heil.top',
            'host' => '0.0.0.0',
            'port' => '9501',
        ],

    ];
    /**
     * gitlb相关配置
     */
    const GITLAB = [
        'OauthUrl'              =>'',
        'AppId'                 =>'',
        'Key'                   =>'',
    ];
    /**
     * 初始化配置 获取配置参数
     * 项目本身通过本配置向配置中心获取租客的配置（包括saas模式下的配置获取）
     * initialize
     */
    CONST INITIALIZE = [
        'versions'=>'v2',
        'configCenter'=>'',//配置中心地址（配置中心设在ip白名单）
        'appid'=>'appid76372843924923894',//服务appid
        'appSecret'=>'asdkj346fk3434df67455656345l',//加密参数
        'encodingAesKey'=>'asdkjasdad346fk34dfsfdsf34df67455656345l',//解密参数
        'token'=>'68uijkmsd454lfgnvcv@',//签名使用
    ];
    /**
     * 超级管理员信息（默认是这些信息，可以使用部署系统进行覆盖)
     * 注意:为了安全起见在部署完成后请修改密码
     */
    CONST SUPER_ADMIN_INFO=[
            'phone'=>18888888888,
            'email'=>'88888888@888.com',
            'pasword'=>88888888,
    ];
}
