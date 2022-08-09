<?php
include './function.php';
$random = array(1,2,4,7,1,6,2,8);
     $arr = $random;
        $firstB = $arr[0];
        $n = count($arr);
        for($i=0;$i<$n;$i++) {
        if($firstB < $arr[$i]) {
            $firstB = $arr[$i];
        }
        }
     $arrO = $arr;
    $index = array_search($firstB, $arrO);
    array_splice($arrO, $index, 1);
        $firstS = $arrO[0];
        $n = count($arrO);
        for($i=0;$i<$n;$i++) {
        if($firstS > $arrO[$i]) {
            $firstS = $arrO[$i];
        }
        }
        $arrT = $arrO;
        $index = array_search($firstS, $arrT);
        array_splice($arrT, $index, 1);
        $secondS = $arrT[0];
        $n = count($arrT);
        for($i=0;$i<$n;$i++) {
        if($secondS > $arrT[$i]) {
            $secondS = $arrT[$i];
        }
        }
        echo $firstB . "+" . $firstS . "+" . $secondS . "=" . ($firstB + $firstS + $secondS);
        echo "<br>";

        $arrF = $arrT;
        $index = array_search($secondS, $arrF);
        array_splice($arrF, $index, 1);
        $secondB = $arr[0];
        $n = count($arrF);
        for($i=0;$i<$n;$i++) {
        if($secondB < $arr[$i]){
            $secondB = $arr[$i];
        }
        }
        $arrFF = $arrF;
        $index = array_search($secondB, $arrFF);
        array_splice($arrFF, $index, 1);
        $thirdS = $arrFF[0];
        $n = count($arrFF);
        for($i=0;$i<$n;$i++) {
        if($thirdS > $arr[$i]) {
            $thirdS = $arr[$i]; 
        }
        }
        $arrFFF = $arrFF;
        $forthS = $arrFFF[0];
        $n = count($arrFFF);
        for($i=0;$i<$n;$i++) {
        if($forthS > $arr[$i]) {
            $forthS = $arr[$i];
        }
        }
    echo $secondB . "+" . (getMin($arrFF)) . "+" . (getMin($arrFF)) . "=" . ($secondB + (getMin($arrFF)) + (getMin($arrFF)));
    echo "<br>";

    $index = array_search($forthS, $arrFFF);
    array_splice($arrFFF, $index, 1);
    $forthB = $arrFFF[0];
    $n = count($arrFFF);
    for($i=0;$i<$n;$i++) {
    if($forthB < $arr[$i]) {
        $forthB = $arr[$i];
    }
    }
    $fifthS = $arrFFF[0];
    if(count($arrFFF)%2 === 0){
        $var = (count($arrFFF)-1)/2;
    }else{
        $var = count($arrFFF)/4;
    }
    echo (getMax($arrFFF)) . "+" . $arrFFF[$var] . "=" . ((getMax($arrFFF)) + $arrFFF[$var]);
?>