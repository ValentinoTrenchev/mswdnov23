<?php

$myName = 'Valentino';
$mySurname = 'Trenchev';


echo $myName; 
echo $mySurname;

// The full stop is used for concatenation 
echo '<p>My name is ' . $myName . '</p>';

// variable interpolation
echo "<p>My surname is $mySurname</p>";

//HEREDOC String
$shortStory = <<<STORY
<p>There once was a man from Peru, who dreamt 
he was eating his shoe</p>

<p>He woke up one night, in quite a fright to find
that his dreams had come true!</p>
STORY;

echo $shortStory;

// fun with data types

$anInt = 42;
echo "<p>The value is $anInt, type is " . gettype($anInt) . '</p>';

$aFloat = 42.21;
echo "<p>The value is $aFloat, type is " . gettype($aFloat) . '</p>';

$country = 'Malta';
echo "<p>The value is $country, type is " . gettype($country) . '</p>';

$isRaining = false;
echo "<p>The value is $isRaining, type is " . gettype($isRaining) . '</p>';

// Using arrays (Enumerative)

$names = ['Valentino', 'Olga', 'Warren', 'Daniel'];
echo "<p>Names of Students:</p>";
print_r($names);

// Using arrays (Asscociative)

$company = ['CEO'=>'Alice Anderson', 'CTO'=>'Bob Barker'];
echo "<p>Company Executives:</p>";
print_r($company);

// Type coercion
$val1 = 89;
$val2 = "42";
$val3 = $val1 + $val2;
echo "<p>The result is $val3</p>";

// Type casting
$val4 = "29";
$val5 = 42.82;
$val6 = (int) $val4 + (int) $val5;
echo "<p>The next result is $val6 </p>";

// Constants

//Functions
function greetUser($name){
  return "Hello there, $name!";
}

// Using printf
$animal = 'fox';
printf('%s Did you know that the quick brown %s jumps over the lazy %s', greetUser('Keith'), $animal, 'dog');

$cartTotal = 89.6592;
printf('<p>Total in your card: €%.2f</p>', $cartTotal);

$student1 = 4;
$student2 = 32;
$student3 = 168;

printf('<p>Student 1: %03d, Student 2: %03d, Student 3: %03d</p>', $student1, $student2, $student3,);

// Variable Inspection
$sampleArray = ['Joe', 12, 11.23, true, new stdClass()];
echo "<p>The first item in the array $sampleArray[0].</p>";
print_r($sampleArray);

var_dump($sampleArray);

//Checking if a variable exists
$firstVariable = 100;
$secondVariable = null;


?>