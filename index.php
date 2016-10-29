<?php
echo "If statesments: ";
echo '<br>';
$first = true;
if(isset($first)){
  echo "This var is set.";
}
echo '<br>';
$second = "";
if(empty($second)) {
  echo "This var is empty.";
}
echo '<br>';
$third = NULL;
if(is_null($third)){
  echo "This var is null.";
}
echo '<br>';
$fourth = '123456';
if(!is_null($fourth)){
  echo "This var is null.";
}
echo '<br>';
echo '<br>';
echo 'Switch statements: ';
echo '<br>';
function checkvar($var) {
  $stats = 'This var is ';
  if(isset($var)){
    $stats .=  'set,';
  }
  else{
    $stats .= 'not set,';
  }
  if(empty($var)){
    $stats .= ' empty,';
  }
  else{
    $stats .= ' not empty,';
  }
  if(is_null($var)){
    $stats .= ' null.';
  }
  elseif(!is_null($var)){
    $stats .= ' not null.';
  }
  return $stats;
}
echo checkvar($first);
echo '<br>';
echo checkvar($second);
echo '<br>';
echo checkvar($third);
echo '<br>';
echo checkvar($fourth);
echo '<br>';
echo '<br>';
echo 'Switch/case statement: ';
echo '<br>';
$number = 4;

switch($number) {
  case 0:
    echo 'Zero is not a valid value.';
    break;
  case $number < 0:
    echo 'Negative numbers are not allowed.';
    break;
  default:
    echo 'This is a valid number.';
    break;
}
?>

