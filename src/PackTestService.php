<?php
/**
 * Created by PhpStorm.
 * User: ctz
 * Date: 2021/11/17
 * Time: 14:41
 */
namespace Pack\Test;
class PackTestService
{
    private static $_instance=null;
    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    public function sayHello(){
        echo "hello first composer";
    }

}