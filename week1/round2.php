<?php

$true_variable = TRUE; // TRUE IS 1
$false_variable = FALSE; // FALSE IS EMPTY

if($true_condition) {
  echo "this is a true condition, it passed so you should see it";
}

if(!$true_condition) {
  echo "this is a false condition, so it did not pass. you shouldnt see it";
}

if(!$false_condition) {
  echo "what happens";
}

// ternary
$var = 10;
$var_is_greater_than_two = ($var > 2 ? TRUE:FALSE);

echo $var_is_greater_than_two;

/*
  * EQUAL
  * $a == $b
  *
  * Identical
  * $a = $b
  *
  * Not Equal
  * $a != !b
  *
  * Not Identical
  * $a !== $b
  *
  * greater than
  * $a > $b
  *
  * less than or equal to
  * $a <= $b
  *
  * greater than or equal to
  * $a >= $b
*/

echo "<br>";

$i = 0;

if ($i === 0) {
  echo "i equals 0";
} else if ($i === 1) {
  echo "i equals 1";
} else if($i === 2) {
  echo "i equals 2";
}

echo "<br>";

switch ($i) {
  case 0;
  echo "i equals 0";
  break;

  case 1:
  echo "i equals 1";
  break;

  case 2:
  echo "i equals 2";
  break;

  default;
  echo "i isnt set";
}

echo "<br>";
//constants
define("APPNAME", "MY APPLICATION NAME");

// echo APP NAME;
function testing() {
  echo APPNAME;
}
testing();

echo "<br>";

//getting length of string
$my_cool_variable = "how many characters are in this var?";
echo "length of $my_cool_variable = " . strlen($my_cool_variable);

echo "<br>";

$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
$result = count($a);
echo "length of my array: " . $result;

echo "<br>";

$nfl_teams = "panthers, falcons, giants, patriots";
$team = explode(",", $nfl_teams);
var_dump($team);

echo "<br>";

$lowercase_variable = strtolower("lowercase");
$uppercase_variable = strtoupper("uppercase");

echo $lowercase_variable . "" . $uppercase_variable;

?>



















