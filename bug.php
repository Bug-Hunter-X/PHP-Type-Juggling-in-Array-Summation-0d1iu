```php
<?php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number; 
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, '5a']; //added a string to array
$sum = calculateSum($numbers);
echo "Sum: " . $sum; //this will give a wrong answer
?>
```