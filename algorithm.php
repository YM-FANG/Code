<?php


//冒泡
//10 8 6 5 1
//8 6 5 1 10
//6 5 1 8 10
//5 1 6 8 10
//1 5 6 8 10
function bubble(array $arr){
    for($j=1;$j<count($arr);$j++){
        for($i=0;$i<count($arr)-$j;$i++){
            if($arr[$i]>$arr[$i+1]){
                $tmp = $arr[$i+1];
                $arr[$i+1] = $arr[$i];
                $arr[$i] = $tmp;
            }
        }
    }

    var_dump($arr);
}

//插入排序
//5，2，4，6，1，3
//2 5 4 6 1 3
//2 4 5 6 1 3
//2 4 5 6 1 3
//1 2 4 5 6 3
//1 2 3 4 5 6
function Insert($arr){
    $j = 0;
    $i = 0;
    for($i=0;$i<count($arr)-1;$i++){
        $tmp = $arr[$i+1];
        for($j=$i+1;$j>=1;$j--){
            if($tmp<$arr[$j-1]){
                $arr[$j] = $arr[$j-1];
            }else{
                break;
            }
        }
        $arr[$j]=$tmp;
    }
    var_dump($arr);
}

//shell

function Shell($arr,$gap){
    $i = 0;
    $j = 0;
    for($i=0;$i<count($arr)-$gap;$i++){
        $tmp = $arr[$i+$gap];
        for($j=$i+$gap;$j>=$gap;$j-=$gap){
            if($arr[$j-$gap] > $tmp){
                $arr[$j] = $arr[$j-$gap];
            }
        }
        $arr[$j] = $tmp;
    }
    var_dump($arr);
}

//选择排序
//5,2,4,6,1,3
//1 2 4 6 5 3
//1 2 4 6 5 3
//1 2 3 6 5 4
//1 2 3 4 5 6
//1 2 3 4 5 6
//1 2 3 4 5 6
function Select($arr){
    for($i=0;$i<count($arr);$i++){
        $min = $i;
        for($j=$i;$j<count($arr);$j++){
            if($arr[$min]>$arr[$j]){
                $min = $j;
            }
        }
        $tmp = $arr[$min];
        $arr[$min]=$arr[$i];
        $arr[$i]=$tmp;
    }
    var_dump($arr);
}


//bubble([10,8,6,5,1]);
//Insert([5,2,4,6,1,3]);
//Select([5,2,4,6,1,3]);
//for($i=1;$i<=3;$i++){
//    $arr = [5,2,4,6,1,3];
//    $arr = Shell($arr,1);
//    var_dump($arr);
//}


$str = "i am a studnt";

function reverse(&$str,$start,$len){
echo "$start--$len".PHP_EOL;
    $j=$len;
    for($i=$start;$i<$j;$i++,$j--){
        $tmp=$str[$i];
        $str[$i]=$str[$j];
        $str[$j]=$tmp;
    }
    var_dump($str);
}

function reverse2($str){
    $len = strlen($str);
//    "tnduts a ma i
    $count  = 0;
    for($i=0;$i<$len;$i++){
        if($str[$i] != " "){
            $count++;
        }else{
//            0 5
//            7 7
            reverse($str,$i-$count,$i-1);
            $count = 0;
        }
    }
 }
//reverse($str,0,strlen($str)-1);
//
//reverse2($str);
//reverse($str,strlen($str)-1);

function Sum($arr){
    $len = count($arr);
    for($i=0;$i<$len;$i++){
        if($arr[$i]>0){
            break;
        }
//        if($i>0 &&$arr[$i]==$arr[$i+1]){
//            continue;
//        }
        $l=$i+1;
        $h = $len-1;
        while($l<$h){
            $tmp= $arr[$i]+$arr[$l]+$arr[$h];
            if($tmp>0){
                $h--;
            }
            if($tmp<0){
                $l++;
            }
            if($tmp==0){
                $brr[][]=[$arr[$i],$arr[$l],$arr[$h]];
                $h--;
                $l++;
                if($arr[$l] == $arr[$l-1]){
                    $l++;
                }
                if($arr[$h] == $arr[$h+1]){
                    $h--;
                }
            }
        }
    }
    var_dump($brr);
}
//$arr = [-1,0,1,2,-1];
//sort($arr);
//var_dump($arr);
//
//Sum($arr);

function Reverse1($arr,$i,$j){
    $brr[] = $arr[$j];
    $brr[] = $arr[$i];
    return $brr;
}

function Perm($res,$arr,$pos,$len){
    if ($pos>=$len){
         var_dump($res);
         return;
    }else{
        for($i=$pos;$i<$len;$i++){

            $tmp = $arr[$pos];
            $arr[$pos] = $arr[$i];
            $arr[$i] = $tmp;

            $res[] = $arr[$pos];
            Perm($res,$arr,$pos+1,$len);
            $res11 = [];
            for($jj=0;$jj<count($res)-1;$jj++){
                $res11[] =$res[$jj];
            }
            $res = $res11;
            $tmp = $arr[$pos];
            $arr[$pos] = $arr[$i];
            $arr[$i] = $tmp;

        }
    }


}
//$res = [];
//Perm($res,["a","b","c"],0,3);

function Maxsum($arr){
    $len = count($arr);
    $sum = 0;
    $maxsum = 0;
    for($i=0;$i<$len;$i++){
        if($sum <=0){
            $sum = $arr[$i];
        }else{
            $sum += $arr[$i];
        }
        if($maxsum < $sum){
            $maxsum = $sum;
        }
    }
    var_dump($maxsum);
}
$arr = [1,-2,3,10,-4,7,2,-5];
//Maxsum($arr);

//var_dump($ress);
//$arr = [1,2,3];

function Merge(&$arr,$start,$mid,$end){
    if($start>=$end){
        return;
    }
    $s1 = $start;
    $s2 = $mid+1;
    $res = [];
    while($s1 <= $mid && $s2 <= $end){
        if($arr[$s1] < $arr[$s2]){
            $res[] = $arr[$s1];
            $s1+=1;
        }else{
            $res[] = $arr[$s2];
            $s2+=1;
        }
    }
    if($s1<=$mid){
        for(;$s1<=$mid;$s1++){
            $res[] = $arr[$s1];
        }
    }

    if($s2<=$end){
        for($s2;$s2<=$end;$s2++){
            $res[] = $arr[$s2];
        }
    }
    var_dump(implode(" ",$res));

    for($j=$start,$k=0;$k<count($res) && $j<=$end;$k++,$j++){
        $arr[$j] = $res[$k];
    }
//    var_dump(implode(" ",$arr));

}
function MergeSort(&$arr,$start,$end){
    if($start >= $end){
        return;
    }
    $mid = floor(($end-$start)/2+$start);
    MergeSort($arr,$start,$mid);
    MergeSort($arr,$mid+1,$end);
    Merge($arr,$start,$mid,$end);
}
$arr = [3,10,7,4,8,2,23];
var_dump(implode(" ",$arr));
//
//Merge($arr,0,3,6);

MergeSort($arr,0,5);
var_dump(implode(" ",$arr));




