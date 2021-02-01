<?php

function papan_catur($angka) {
// tulis kode di sini
   for($x=0;$x<$angka;$x++){
       if($x%2==0){
           for($y=0;$y<$angka;$y++){
               echo "# ";
           }
       }
       if($x%2==1){
            for($y=1;$y<$angka;$y++){
                echo " #";
            }
       }
       echo "<br>";
   }
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
# # #
# # # #
# # #
*/

echo papan_catur(8);
/*
# # # # # # # #
# # # # # # #
# # # # # # # #
# # # # # # #
# # # # # # # #
# # # # # # #
# # # # # # # #
# # # # # # #

echo papan_catur(5)
/*
# # # # #

# # # #
# # # # #
# # # #
# # # # #
*/
?>