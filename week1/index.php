<?php

// echo "hello world";

// single line comment
# single line comment

/*
  multi line comment
  used tp explain chinks of code

 */

/*
  *DocBlock - appname
  *this render cool things in IDES - Description
  *
  * @author <daniel@seripap.com>
  * @website http://seripap.com
  * @copyright Daniel Seripap
  * @version 1.0.0
  *
*/

$myVariable = "hello";
$myVariable2 = "world";
$true_variable = TRUE; //
$false_variable = FALSE;

echo $myVariable;

echo $myVariable . "" . $myVariable2;

$foo = "foo";
$bar = "hello, $foo";

echo "<br>";
echo $bar;
echo "<br>";

function add($x, $y) {
  echo $x + $y;
}

add(1,1);

echo "<br>";

function hello() {
  global $myVariable;
  global $myVariable2;
  $localVariable = "!!!!!!";
  echo $myVariable . "" . $myVariable2 . $myVariable;
}


hello();
echo "<br>";

$my_array_variable = array(
    "key"    =>    "value",
    "dan"    =>    "theman",
    "boom"   =>    "shazam",
    "arrayInsideArray"   =>    array(
                "october"   =>    "holloween",
                "november"   =>    "thanksgiving",
                "december"   =>    "christmas"
    ),
    "falcons" => "suck", // you can end arrays with leading
  );

// echo "<pre>";
// var_dump($my_array_variable);

// echo $my_array_variable["arrayInsideArray"]["october"];

echo count($my_array_variable);

?>


<h1> WE WORK WITH PHP! </h1>

<script>
  var myVariable = "hello";
  var myVariable = "world";

  function add(x, y) {
    console.log(x + y);
  }

  console.log(myVariable + "" + myVariable2);
</script>












