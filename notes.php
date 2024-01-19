<?php

/*
------------------------------------
     $ Variables $   

  Identified by $ Sign
  Can Hold All Data Types
  Starts with letter and underscore
  Case sensitive
  Cannot start with number
  May contain Turkish characters
  is assigned with =
-------------------------------------
      $ Constants $
  Starts with letter and underscore
  Can hold all data types except object
  Cannot start with number
  May Contain Turkish Characters
  Traditionally, constant names are always capitalized
--------------------------------------
      $ Data Types $
   String(Floria,Hello)
   Integer(200,300)
   Float(3.5,5.2)
   Boolean(True,False)
   Array(Array)
   Object(Object)
   NULL
   
   gettype(); -> understand which data type it is

   $a = "Floria";
   echo gettype($a);
--------------------------------------- 
     $ Arithmetic Operators $
Collection (+)
Sticker (-)
Multiplication (*)
Division (/)
Mode (%)
---------------------------------------
    $ Comparison Operators $
   
echo $a == $b -> Equal
echo $a === $b -> Same
echo $a != $b -> Not Equal
echo $a !== $b -> Different
echo $a < $b -> Small
echo $a > $b -> Greater than
echo $a <= $b -> Less than or Equals
echo $a >= $b -> Greater than or Equals
echo $a <=> $b -> Shuttle
----------------------------------------
    $ Increment and Decrement Operators $

Increment Operator (++)
Reduction Operator (--)

$a = 1;
$a++;
echo $a; // Writes the result 2 to the screen.
Increment Before

$a = 5;
echo +++$a; // Writes the result 6 to the screen.
echo $a; // Writes the result 6 to the screen.
Subsequent Increment
------------------------------------------
   $ Merge and Assign Operators $

   = Assignment Operator
   . Merge Operator 

   $a = 3;
   echo $a; -> wrote 3 on the screen

   $a = "Floria";
   $b = "Is Here";

   echo $a.$b; -> Floria is Here will appear on the screen.
  
   +=
   -=
   *=
   /=
   %=

   $a = 3;
   
   echo $a += 3; -> Printed 6 on the screen
    echo $a -= 3; -> Printed 0 on the screen

    $nickname = 'Floria';
    $nickname .= ' Was Here';

    echo $nickname; -> Floria Was Here Printed on Screen
------------------------------------------
   $ Logical Operators $ 

   &&& and
   || or
   ! If not

 $a = 1;
 $b = 2;

 $result = ($a != $b) || ($a > 0);

 var_dump($result); --> True Returns
------------------------------------------
  $ Conditional Expressions $
  
  IF
  IF ELSE
  ELSEIF
  Ternary(Triple Oper.)
  

 $a = 4;
 $b = 6;

  if($a > $b){
    echo "Condition OK";
  }elseif($a < $b){
      echo "ELSE IF 2 WORKED";
  }else{
    echo "Condition Not Met :/";
  }

  echo $a == 7 ? 'Equal' : 'Not Equal;

  Switch Case

 $a = 5;

 if ($a == 1) echo "Condition 1";
 elseif ($a == 2) echo "Condition 2";
 else echo "else active";

  switch ($variable) {
    case condition1:
        echo "condition 1 met";
        break;
    case condition2:
        echo "condition 2 met";
        break;
    default:
        echo "condition 1 and condition 2 not met";
    }

------------------------------------------
  $ One Dimensional Arrays(Array) $

      $a = array('apple','pear')
      $a = ['apple','pear']
        $a = ['apple','pear'];
    
    print_r($a);
    
We can print arrays as print_r(array) or var_dump(array).

    //Output of the expression
    Array ( [0] => apple [1] => pear )
------------------------------------------
  $ Multidimensional Arrays $
 $animal_groups = [
    'surungen_animals' => ['Snake','Lizard'],
    'flying_animals' => ['Eagle','Dove','Hawk']
];
print_r($hayvan_gruplari);
//Screen Output
Array
(
    [surungen_animals] => Array
        (
            [0] => Snake
            [1] => Lizard
        )

    [flying_animals] => Array
        (
            [0] => Eagle
            [1] => Dove
            [2] => Falcon
        )

------------------------------------------
   Loops - FOR

   for ($i = 1; $i <= 10; $i++) { echo $i;
}

Output 12345678910
-------------------------------------------


