<?php
/**
 * Created by PhpStorm.
 * User: ctz
 * Date: 2021/11/17
 * Time: 14:42
 */
require_once __DIR__ . '/../vendor/autoload.php';
use Pack\Test\PackTestService;
PackTestService::getInstance()->sayHello();