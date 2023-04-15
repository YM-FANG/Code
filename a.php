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
qqq22
344
function mul($a, $b)
{
    $lenA = strlen($a);
    $lenB = strlen($b);

    $result = '0';
    for ($inxA = $lenA - 1; $inxA >= 0; --$inxA) {
        $re = '';
        for ($i = $inxA + 1; $i < $lenA; ++$i) {
            $re = "0" . $re;
        }
        $j = 0;
        for ($inxB = $lenB - 1; $inxB >= 0; --$inxB) {
            $mul = (int)$a[$inxA] * (int)$b[$inxB] + $j;
            if ($mul >= 10) {
                $j   = floor($mul / 10);
                $mul = $mul - $j * 10;
            } else {
                $j = 0;
            }
            $re = (string)$mul . $re;
        }
        if ($j > 0) $re = (string)$j . $re;
        echo "--$result--$re--".PHP_EOL;

        $result = add($result, $re);
        echo "--$result----".PHP_EOL;

    }

    return $result;
}

function add($a, $b)
{
    $lenA = strlen($a);
    $lenB = strlen($b);

    $j  = 0;
    $re = '';
    for ($inxA = $lenA - 1, $inxB = $lenB - 1; ($inxA >= 0 || $inxB >= 0); --$inxA, --$inxB) {
        $itemA = ($inxA >= 0) ? (int)$a[$inxA] : 0;
        $itemB = ($inxB >= 0) ? (int)$b[$inxB] : 0;
        $sum   = $itemA + $itemB + $j;
        if ($sum > 9) {
            $j   = 1;
            $sum = $sum - 10;
        } else {
            $j = 0;
        }
        $re = (string)$sum . $re;
    }
    if ($j > 0) $re = (string)$j . $re;

    return $re;
}

//$res = mul("123", "45");
//var_dump($res);

function twoSum($nums, $target) {
    sort($nums);
    $len = count($nums);
    for($i=0;$i<$len;$i++){
        for($j=$i+1;$j<$len;$j++){
            if(($nums[$i]+$nums[$j]) == $target){
                $arr = [$i,$j];
                break;
            }
        }
    }
    return $arr;
//    for($i=0,$j=$len-1;$i<$j;){
//        $sum =$nums[$i]+$nums[$j];
//        if($sum == $target){
//            echo "[$nums[$i],$nums[$j]]".PHP_EOL;
//        }
//        if($sum > $target){
//            $sum -= $nums[$j];
//            $j--;
//            continue;
//        }
//        if($sum < $target){
//            $i++;
//            $sum -= $nums[$i];
//            continue;
//        }
//        $i++;
//        $j--;
//    }
}
twoSum([3,2,4],6);

