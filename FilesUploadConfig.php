<?php
/**
 * @Author: pizepei
 * @ProductName: PhpStorm
 * @Created: 2019/4/1 22:25
 * @baseAuth 基础权限继承（加命名空间的类名称）
 * @title 简单的dome
 * @authGroup [user:用户相关,admin:管理员相关] 权限组列表
 * @basePath /dome/
 * @baseParam [$Request:pizepei\staging\Request] 注册依赖注入对象
 */

namespace pizepei\config;


class FilesUploadConfig
{


    /**
     * 计划
     *       文件上传以应用为授权单位  每个应用可以有多个授权域名
     *              签名  首先前端请求后端 获取签名（请求参数域名+appid） 返回sha1（域名+appid+AppSecret+时间戳+随机字符串）+时间戳+随机字符串
     *      文件被上传时 会根据域名创建目录（分布式可同时上传到所有服务器上）    在被请求时由nginx获取域名定位到域名目录下（没有绑定域名的就没有目录了）
     */
    CONST FILES_UPLOAD = [
        'FILES_UPLOAD'





    ];
}