<?php

////fscanf(STDIN, "%d", $a);
////printf("%d\n",$a);
//
//function Multi($num1, $num2)
//{
//    if ($num1 == "" || $num2 == "") {
//        var_dump(0);
//    }
//    $len1 = strlen($num1);
//    $len2 = strlen($num2);
//    $res  = [];
//    for ($i = $len1 - 1; $i >= 0; $i--) {
//        for ($j = $len2 - 1; $j >= 0; $j--) {
//            $res[] = intval($num1[$i]) * intval($num2[$j]);
//        }
//    }
//
////    4 8 2
//    $carry = 0;
//    $len3  = count($res);
//    $res2  = [];
//    for ($i = $len3 - 1; $i >= 0; $i--) {
//        $curres = $res[$i] + $carry;
//        $res2[] = $curres % 10;
//        $carry  = $curres / 10;
//    }
//    $res2 = array_reverse($res2);
////    var_dump($res2);
//}
//
//$num1 = "123";
//$num2 = "4";

//Multi($num1, $num2);


use http\Env\Request;

function Multi($str1, $str2)
{
    $len1 = strlen($str1);
    $len2 = strlen($str2);

    $res = [];
    for ($k = 0; $k < $len2; $k++) {
        for ($mm = 0; $mm < $len1 + $len2; $mm++) {
            $arr[$mm] = 0;
            $res[$k]  = $arr;
        }
    }

    $count = 0;
    for ($j = $len2 - 1; $j >= 0; $j--) {
        $count++;
        $end = $len1 + $len2 - $count;
        for ($i = $len1 - 1; $i >= 0; $i--) {
            $res[$j][$end] = intval($str2[$j]) * intval($str1[$i]);
            $end--;
        }
    }
    return $res;
}

function Add($arr, $len2)
{
    $len   = count($arr);
    $res11 = [];
    $add   = 0;
    for ($i = $len2 - 1; $i >= 0; $i--) {
        $sum = 0;
        for ($j = 0; $j < $len; $j++) {
            $sum = $sum + $arr[$j][$i];
        }
        $sum = $sum + $add;
        if ($sum > 9) {
            $res11[] = $sum % 10;
            $add     = intval($sum / 10);
        } else {
            $res11[] = $sum;
            $add     = 0;
        }
    }
    return $res11;
}

$str1 = "123";
$str2 = "45";
$len1 = strlen($str1);
$len2 = strlen($str2);
$res  = Multi($str1, $str2);
$res  = Add($res, $len1 + $len2);
$res  = implode("", array_reverse($res));
var_dump(ltrim($res, "0"));
var_dump(ltrim($res, "0"));
var_dump(ltrim($res, "0"));
var_dump(ltrim($res, "0"));

var_dump(ltrim($res, "0"));
var_dump(ltrim($res, "0"));
var_dump(ltrim($res, "0"));
var_dump(ltrim($res, "0"));


