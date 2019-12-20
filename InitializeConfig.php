<?php
/**
 * Created by PhpStorm.
 * User: pizepei
 * Date: 2019/2/1
 * Time: 16:19
 * @title 初始化配置
 */
declare(strict_types=1);
namespace pizepei\config;


use config\app\SetConfig;
use pizepei\func\Func;
use pizepei\helper\Helper;
use pizepei\staging\App;

class InitializeConfig
{

    /**
     * 需要的配置名称(类名称)
     */
    const configName = [
        'Config',
        'JsonWebTokenConfig',
        'Service',
        'TerminalInfoConfig',
        'WechatConfig',
        'RedsiConfig',
        'FilesUploadConfig',
    ];
    /**
     * 数据库配置名称
     */
    const Dbtabase = [
        'Dbtabase',
    ];
    /**
     * 错误与日志配置
     */
    const ErrorOrLog = [
        'ErrorOrLogConfig',
    ];
    /**
     * 部署配置
     */
    const Deploy = [
        'Deploy',
    ];

    /**
     * @var App|null 
     */
    protected $app = null;
    /**
     * InitializeConfig constructor.
     * @param App $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
    }

    /**
     * 获取配置
     * @return mixed
     * @throws \ReflectionException
     */
    public function get_deploy_const()
    {
        return $this->get_foreach_const(self::Deploy);
    }

    /**
     * 获取配置
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function get_config_const()
    {
        return $this->get_foreach_const(self::configName);
    }

    /**
     * 获取配置
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function get_dbtabase_const()
    {
        return $this->get_foreach_const(self::Dbtabase);
    }

    /**
     * 获取配置 错误与日志配置
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function get_error_log_const()
    {
        return $this->get_foreach_const(self::ErrorOrLog);
    }
    /**
     * @Author pizepei
     * @Created 2019/2/16 15:34
     * @param $data
     * @return array
     * @throws \ReflectionException
     * @title  批量获取日志
     *
     */
    public function get_foreach_const($data)
    {
        $Config =[];
        foreach($data as $key=>$value){
            $reflect = new \ReflectionClass('pizepei\config\\'.$value);
            $Config = array_merge_recursive($Config, $reflect->getConstants());
        }
        return $Config;
    }

    /**
     * 获取配置(自定义)
     *
     * @param $name
     * @return mixed
     * @throws \ReflectionException
     */
    public function get_const($name)
    {
        $reflect = new \ReflectionClass($name);
        return $reflect->getConstants();
    }

    /**
     * 设置配置(写入文件)
     * @param $name
     * @param $data
     * @param $path
     * @param $namespace
     */
    public function set_config($name,$data,$path,$namespace = '',$title='基础配置',$date='',$time=0,$appid='')
    {
        $str = $this->setConfigString($name,$data,$namespace,$title,$date,$time,$appid);
        //写入文件
        Helper::file()->createDir($path);
        file_put_contents($path.$name.'.php',$str);
    }

    /**
     * 设置配置(获取字符串)
     * @param $name
     * @param $data
     * @param $path
     * @param $namespace
     */
    public function setConfigString($name,$data,$namespace = '',$title='基础配置',$date='',$time=0,$appid='')
    {
        $str = '';
        $this->set_head($str,$name,$namespace,$title,$date,$time,$appid);
        $this->set_content($data,$str);
        return $str;
    }


    /**
     * 设置文件头部
     * @param $str
     * @param $name
     * @param $namespace
     */
    public function set_head(&$str,$name,$namespace,$title,$date,$time,$appid)
    {
        if ($date == ''){$date = date('Y-m-d H:i:s');}
        if ($time == ''){$time = time();}

        $str = '<?php'.PHP_EOL;
        $str .= '/**'.PHP_EOL;
        $str .= ' * creationDate: '.$date.PHP_EOL;
        $str .= ' * creationTime: '.$time.PHP_EOL;
        $str .= ' * @title: '.$title.PHP_EOL;
        $str .= ' * @appid: '.$appid.PHP_EOL;
        $str .= ' */'.PHP_EOL.PHP_EOL.PHP_EOL;
        if(!empty($namespace)){
            $str .= ' namespace '.$namespace.';'.PHP_EOL.PHP_EOL.PHP_EOL;
        }

        $str .= 'class '.$name.PHP_EOL;
        $str .= '{ '.PHP_EOL;
    }
    public function set_content($data,&$str)
    {
        foreach($data as $key=>$vla){
            if(is_array($vla)){
                $str .= '    const '.$key.' = '.static::arrayToString($vla,1).';'.PHP_EOL.PHP_EOL;
            }else if(is_bool($vla)){
                if($vla){
                    $str .= '    const '.$key.' = TRUE;'.PHP_EOL.PHP_EOL;
                }else{
                    $str .= '    const '.$key.' = FALSE;'.PHP_EOL.PHP_EOL;
                }
            }else if(is_string($vla)){
                    $str .= '    const '.$key." = '".$vla."';".PHP_EOL.PHP_EOL;
            }else if(is_int($vla)){
                $str .= '    const '.$key.' = '.$vla.';'.PHP_EOL.PHP_EOL;
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
            $maxLength = max($maxLength, strlen((string)$key));
        }

        $index = count($data);
        foreach($data as $key => $item){
            $index--;
            $content .= str_repeat($space, $level);
            if(!is_int($key) || $assoc || $inAssoc){
                if(is_int($key)){
                    $content .= "$key".str_repeat(' ', $maxLength - strlen((string)$key) + 1)."=> ";
                }else{
                    $content .= "'$key'".str_repeat(' ', $maxLength - strlen((string)$key) + 1)."=> ";
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
        $content .= str_repeat($space, $level - 1)."    ]";

        return $content;
    }


}