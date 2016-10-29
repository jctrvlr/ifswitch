<?php
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
?>
