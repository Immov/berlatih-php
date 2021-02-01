<?php
function tentukan_deret_geometri($arr) {
// kode di sini
    $len = count($arr);
    $geom = 0;
    for($x=$len-1;$x>2;$x--){
        $bil1 = $arr[$x] / $arr[$x-1];
        $bil2 = $arr[$x-1] / $arr[$x-2];
        if($bil1 == $bil2){
           $geom = 1;
        }else{
            $geom = 0;
            break;
        }
    }
    return var_dump($geom==1);
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]) . "<br>"; // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]) . "<br>"; // true
echo tentukan_deret_geometri([2, 4, 6, 8]) . "<br>"; // false
echo tentukan_deret_geometri([2, 6, 18, 54]) . "<br>"; // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]) . "<br>"; //false
?>