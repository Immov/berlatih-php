<?php

function palindrome_angka($angka) {
// tulis kode di sini
    if($angka>=0 and $angka<=9){
        return $angka+1;
    }
}

// TEST CASES

echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>