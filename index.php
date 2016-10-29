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

?>

