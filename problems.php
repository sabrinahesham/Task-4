<?php
//q1.
  
 function calculateAverage($array) {
     $sum = array_sum($array);
     $count = count($array);
     
     if ($count > 0) {
         $average = $sum / $count;
         return $average;
     } else {
         return 0;
     }
 }
 
 // Example usage
 $numbers = [2, 4, 6, 8, 10];
 $average = calculateAverage($numbers);
 echo "Average: " . $average;


 echo "<br/>";
 echo "<br/>";
 echo "<br/>";

//q3.

   $numbers = [1,10,5,2,11];
    
    $max = $numbers[0];
    foreach ($numbers as $number) {
       if ($max < $number) {
          $max = $number;
       }
    }
    echo " the largest number is :" .  $max;

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";

    $min = $numbers[0];
    foreach ($numbers as $number) {
       if ($min > $number) {
           $min = $number;
       }
    }
    echo "the smallest number is :" .  $min;
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";


//q4.    


  
function calculateNumbers($array, $x) {
    $greaterCount = 0;
    $smallerCount = 0;

    foreach ($array as $number) {
        if ($number >= $x) {
            $greaterCount++;
        } else {
            $smallerCount++;
        }
    }
    
       echo "Numbers Smaller than ($x) = $smallerCount \n";
       echo "<br/>";
    echo "Numbers Greater than ($x) = $greaterCount";
    
    //return $output;
}

// Example usage
$array = [1, 10, 5, 2, 11 ];
$x = 3;
calculateNumbers($array, $x);

echo "<br/>";
    echo "<br/>";
    echo "<br/>";


//q5 
 

function capitalizeFirstLetter($array) {
    $result = [];

    foreach ($array as $name) {
        $capitalized = ucfirst($name);
        $result[] = $capitalized;
    }

    return $result;
}

// Example usage
$names = ["eraasoft", "backend", "group313"];
$capitalizedNames = capitalizeFirstLetter($names);
print_r($capitalizedNames);


echo "<br/>";
    echo "<br/>";
    echo "<br/>";

//q6
   


$num =[0,1,0,3,12];
$newnum=[];
 
 foreach ($num as $number) {
    if ($number !== 0) {
        $newnum[] = $number;
    }
}
foreach ($num as $number) {
    if ($number === 0) {
        $newnum[] = $number;
    }
}
echo "<br>";
 print_r($newnum);

 echo "<br/>";
    echo "<br/>";
    echo "<br/>";

//q7

$array=array("alice","bob","charlie","dave");


 if ($name =array_search ("bob",$array) ){

    echo $name ;
 } else {
    echo -1 ;
 }
 echo "<br/>";
    echo "<br/>";
    echo "<br/>";

 //q8 
 
 function findSecondLargest($numbers) {
     $max = 0;
     $secondMax = 0;
 
     foreach ($numbers as $number) {
         if ($number > $max) {
             $secondMax = $max;
             $max = $number;
         } elseif ($number > $secondMax && $number < $max) {
             $secondMax = $number;
         }
     }
 
     return $secondMax;
 }
 
 // Example usage
 $numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10];
 $secondLargest = findSecondLargest($numbers);
 echo $secondLargest;
 
 echo "<br/>";
 echo "<br/>";
 echo "<br/>";
 //q9 
  
 $numbers = [11,55,24,43,44,545,6,777,810,94,140];
 $x = 545 ;

 if ($number =array_search ($x,$numbers) ){

    echo "found" ;
 } else {
    echo" not found" ;
 }

 if ($x>0){
    echo "  postive" ;
 }else {
    echo "negative";
 }

 echo ("    numbers of digits:". strlen($x));

 if ($x%2==0){
    echo "  even" ;
 }else {
    echo "  odd";
 }
 if( $x==strrev($x))
{
  echo "   yes,read from right as left";
} else {
    echo " no";
} 

if ($x%2==0) {
 echo "  notprime";
}else {
    echo "  prime";
}
?>