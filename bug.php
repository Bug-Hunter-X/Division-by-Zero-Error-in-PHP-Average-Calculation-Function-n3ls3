```php
function calculate_average(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array case
  }

  $sum = array_sum($numbers);
  $count = count($numbers);

  return $sum / $count;
}

$numbers = [10, 20, 30, 40, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; // This will produce division by zero error if the array contains only zeros

$numbers2 = [0,0,0,0,0];
$average2 = calculate_average($numbers2); //This will also produce division by zero error if the array contains only zeros
echo "Average: " . $average2;
```