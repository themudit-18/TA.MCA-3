<?php
function find_subarray_with_sum($arr, $target_sum)
{
    $current_sum = $arr[0];
    $start = 0;
    
    for($end = 1; $end < count($arr); $end++)
    {
        while ($current_sum > $target_sum && $start < $end)
        {
            $current_sum -= $arr[$start];
            $start++;
        }
        
        if($current_sum == $target_sum)
        {
            return array_slice($arr, $start, $end - $start);
        }
        $current_sum += $arr[$end];
    }
    return [];
}

$arr = [1, 4, 20, 3, 10, 5];
$target_sum = 23;
$result = find_subarray_with_sum($arr, $target_sum);
echo "Original array: " . implode(", ", $arr) . '<br>';
echo "Subarray with sum $target_sum : " . implode(", ", $result);
?> 