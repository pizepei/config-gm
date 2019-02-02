<?php
/**
 * Created by PhpStorm.
 * User: pizepei
 * Date: 2019/2/1
 * Time: 16:19
 * @title 初始化配置
 */

namespace pizepei\config;


use config\app\SetConfig;
use pizepei\func\Func;

class InitializeConfig
{

    /**
     * 配置名称
     */
    const configName = [
        'Config',
        'JsonWebTokenConfig',
        'Service',
        'TerminalInfoConfig',
    ];
    /**
     * 数据库配置名称
     */
    const Dbtabase = [
        'Dbtabase',
    ];

    /**
     * 获取配置
     * @return mixed
     */
    public function get_config_const()
    {
        $Config =[];
        foreach(self::configName as $key=>$value){
            $reflect = new \ReflectionClass('pizepei\config\\'.$value);
            $reflect->getConstants();
            $Config = array_merge_recursive($Config, $reflect->getConstants());
        }
        //class_exists('config/'.__APP__.'Config');
        //SetConfig::API_CONFIG;
        //var_dump(class_exists('config/'.__APP__.'/SetConfig'));
        $Config = array_merge($Config);


        return $Config;
    }
    /**
     * 获取配置
     * @return mixed
     */
    public function get_dbtabase_const()
    {
        $Config =[];
        foreach(self::Dbtabase as $key=>$value){
            $reflect = new \ReflectionClass('pizepei\config\\'.$value);
            $reflect->getConstants();
            $Config = array_merge_recursive($Config, $reflect->getConstants());
        }
        return $Config;
    }

    /**
     * 设置配置
     */
    public function set_config($name,$data,$path)
    {
        //写入文件
        $str = '';
        $this->set_head($str,$name);
        $this->set_content($data,$str);
        Func:: M('file') ::createDir($path);

        file_put_contents($path.$name.'.php',$str);

        //mkdir()

    }
    /**
     * 设置文件头部
     */
    public function set_head(&$str,$name)
    {
        $str = '<?php'.PHP_EOL;
        $str .= '/**'.PHP_EOL;
        $str .= ' * creationTime: '.date('Y-m-d H:i:s').PHP_EOL;
        $str .= ' * @title: 基础配置文件'.PHP_EOL;
        $str .= ' */'.PHP_EOL.PHP_EOL.PHP_EOL;
        $str .= 'class '.$name.PHP_EOL;
        $str .= '{ '.PHP_EOL;
    }
    public function set_content($data,&$str)
    {
        foreach($data as $key=>$vla){
            if(is_array($vla)){
                $str .= '    const '.$key.' = '.static::arrayToString($vla,1).';'.PHP_EOL.PHP_EOL;
            }
        }
        $str .=PHP_EOL.PHP_EOL.'}';
    }
    /**
     * 将数组转为字符串
     *
     * @param array  $data
     * @param int    $level
     * @param string $content
     * @param bool   $assoc
     * @param string $space
     * @return string
     */
    public static function arrayToString(array $data, $level = 1, $content = '', $assoc = false, $space = '    ')
    {
        $content   .= "[\n";
        $maxLength = 1;
        $index     = 0;
        $inAssoc = false;
        foreach($data as $key => $item){
            if($key !== $index){
                $inAssoc = true;
            }else{
                $index++;
            }
            $maxLength = max($maxLength, strlen($key));
        }

        $index = count($data);
        foreach($data as $key => $item){
            $index--;
            $content .= str_repeat($space, $level);
            if(!is_int($key) || $assoc || $inAssoc){
                if(is_int($key)){
                    $content .= "$key".str_repeat(' ', $maxLength - strlen($key) + 1)."=> ";
                }else{
                    $content .= "'$key'".str_repeat(' ', $maxLength - strlen($key) + 1)."=> ";
                }
            }
            if(is_array($item)){
                $content .= self::arrayToString($item, $level + 1, '', $assoc, $space);
            }elseif(is_null($item)){
                $content .= "null";
            }else{
                $content .= var_export($item, true);
            }
            $content .= ($index? ',': '')."\n";
        }
        $content .= str_repeat($space, $level - 1)."]";

        return $content;
    }


}