<?php
/**
 * Created by PhpStorm.
 * User: hungnv
 * Date: 7/29/2017
 * Time: 11:45
 */


var_dump("echo");

$pattern="/\d/";
$text="nguyen van hung";
preg_match($pattern,$text,$match);

echo '----------match-----------';
var_dump($match);

$pattern="/\d{4}/";
$text="vanhung 103";
$result=preg_replace($pattern,'--',$text);

echo '----replace---- ';
echo $result;

echo '--replace in arra';

$text=array("vanhung10953","vanhung10864");
$result=preg_replace($pattern,'--',$text);
var_dump($result);

echo "split function {PHP_EOL}";
echo 'fdsfds';

$text="vanhung1008vanhung";
$result=preg_split($pattern,$text);
var_dump($result);




