```php
function calculate_average(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array case
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  if ($sum == 0 && $count>0) {return 0.0;}
  if ($count === 0) {
    return 0.0; // Handle empty array case
  }

  return $sum / $count;
}

$numbers = [10, 20, 30, 40, 0];
$average = calculate_average($numbers);
echo "Average: " . $average;

$numbers2 = [0,0,0,0,0];
$average2 = calculate_average($numbers2);
echo "Average: " . $average2;

$numbers3 = [];
$average3 = calculate_average($numbers3);
echo "Average: " . $average3;
```