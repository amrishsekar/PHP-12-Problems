<?php
function compareTriplets($a, $b) {
    $alice = 0;
    $bob = 0;
for($i = 0; $i < count($a); $i++){
     if ($a[$i] > $b[$i]) {
        $alice ++;
     }
     else if($a[$i] < $b[$i]){
        $bob ++;
     }
}
   $count =[$alice,$bob];
   print_r($count);
}
compareTriplets([17,28,30],[99,16,8]);
?>