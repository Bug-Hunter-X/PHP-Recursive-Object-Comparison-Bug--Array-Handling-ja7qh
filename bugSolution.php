function foo(a, b) {
  if ($a === $b) {
    return true;
  }
  if (!is_array($a) || !is_array($b) || gettype($a) !== gettype($b)) {
    return false;
  }
  if (count($a) !== count($b)) {
    return false;
  }
  foreach ($a as $key => $value) {
    if (!array_key_exists($key, $b) || !foo($value, $b[$key])) {
      return false;
    }
  }
  return true;
}

$obj1 = ['a' => 1, 'b' => 2];
$obj2 = ['a' => 1, 'b' => 2];
echo foo($obj1, $obj2) ? 'true' : 'false'; // true

$obj3 = ['a' => 1, 'b' => ['c' => 3]];
$obj4 = ['a' => 1, 'b' => ['c' => 3]];
echo foo($obj3, $obj4) ? 'true' : 'false'; // true

$obj5 = ['a' => 1, 'b' => [1, 2]];
$obj6 = ['a' => 1, 'b' => [1, 2]];
echo foo($obj5, $obj6) ? 'true' : 'false'; // true