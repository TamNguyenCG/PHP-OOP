<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
echo "The time server is : ".date('H:i:s')."<br>";

include_once 'stopwatch.php';
$a = [];
for ($i = 0; $i < 10000; $i++){
    $a[$i]= $i;
}
$stopwatch = new StopWatch();
$stopwatch->start();
selection_sort($a);
$stopwatch->stop();


echo "Stat time is : ".$stopwatch->getStarttime()."<br>";

echo "End time is : ".$stopwatch->getEndtime()."<br>";
echo "Elapsed Time is: ".$stopwatch->getElapsedTime();


function selection_sort($data)
{
    for($i=0; $i<count($data)-1; $i++) {
        $min = $i;
        for($j=$i+1; $j<count($data); $j++) {
            if ($data[$j]<$data[$min]) {
                $min = $j;
            }
        }
        $data = swap_positions($data, $i, $min);
    }
    return $data;
}

function swap_positions($data1, $left, $right) {
    $backup_old_data_right_value = $data1[$right];
    $data1[$right] = $data1[$left];
    $data1[$left] = $backup_old_data_right_value;
    return $data1;
}