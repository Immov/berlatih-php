<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
    $arit=0;
    $len = count($arr);
    for($x=$len-1;$x>2;$x--){
        $bil1 = $arr[$x] - $arr[$x-1];
        $bil2 = $arr[$x-1] - $arr[$x-2];
        if($bil1 == $bil2){
            $arit = 1;
        }else{
            $arit = 0;
            break;
        }
    }
    return var_dump($arit==1);
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]) . "<br>";// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]) . "<br>";// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]) . "<br>"; //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]) . "<br>";// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]) . "<br>";// false
?>