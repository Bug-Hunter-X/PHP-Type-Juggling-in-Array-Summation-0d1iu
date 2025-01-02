```php
<?php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) { //check if the number is numeric
      $sum += $number; 
    } else {
      // Handle non-numeric values appropriately
      // Options: throw an exception, ignore the value, or use type casting
      // For this example, we'll ignore non-numeric values:
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, '5a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; //This will give the correct answer
?>
```