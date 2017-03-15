<?php
/**
 * Created by PhpStorm.
 * User: hungnv
 * Date: 3/13/2017
 * Time: 10:02 PM
 */
use MyNameSpace\MyInterface;

require "Base.php";
require "MyClass.php";
require "MyInterface.php";
require "Concreate/MyInterface.php";
$item=new \MyNameSpace\MyClass();

$app=MyInterface::class;
echo $app;
