<?php
function BinarySearch(Array $array, $x) {
    if (count($array) === 0) return false;
    $bawah = 0;
    $atas = count($array) - 1;

    while ($bawah <= $atas) {

        // compute middle index
        $mid = floor(($bawah + $atas) / 2);

        // element found at mid
        if($array[$mid][0] === $x) {
            return $array[$mid][1];
        }

        else if (strcasecmp($array[$mid][0],$x) > 0 ) {
            // search the left side of the array
            $atas = $mid -1;
        }
        else {
            // search the right side of the array
            $bawah = $mid + 1;
        }
    }

    // If we reach here element x doesnt exist
    return -1;
}
 ?>
