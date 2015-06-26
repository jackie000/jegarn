<?php
/**
 * Created by PhpStorm.
 * User: yaoguai
 * Date: 15-6-24
 * Time: 下午8:58
 */
define('MINIONS_ROOT',realpath(__DIR__.'/../'));

if(!function_exists('minions_autoload')){
    function minions_autoload($class){
        static $_classes;
        if(empty($_classes[$class])){
            include(MINIONS_ROOT.'/'.strtr($class,'\\','/').'.php');
        }
    }
    spl_autoload_register('minions_autoload');
}
