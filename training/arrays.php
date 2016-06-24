<?php

//$students [0] = "Tamara";
//$students [1] = "Misty";
//$students [2] = "James";
//$students [3] = "John";
//$students [4] = "Nathan";

// to reassign
// $students[1]= "Marty";

//print_r(students);

//$shopping_list [0] = "pop tarts";
//$shopping_list [1] = "ramen noodles";
//$shopping_list [2] = "chips";
//$shopping_list [3] = "salsa";
//$shopping_list [4] = "coffee";

//print_r($shopping_list);

//$shopping_list [5]= "fruit loops";
//$shopping_list [4]= "fair trade coffee";
//$shopping_list [2]= "rice";
//$shopping_list [3]= "beans";
//print_r($shopping_list);



//$shopping_cart = array();

//$cereal = array_pop($shopping_list);
//print_r($shopping_list);

//$shopping_cart(0) = "fruit loops";


//FUNCTIONS
//function_greeting($name,$age){
 //  echo "Hi $name, you are $age years old!\n";
//}

//function add($number1, $number2){
//	return $number1 + $number2;
//}
//$sum = add(3 +4);
//echo "$sum";

//array(1) = 1











//extraxt a part of the array
// array array_slice ( array $array , int $offset [, int $length = NULL [, bool $preserve_keys = false ]] )


//move from one to the other
//array array_replace ( array $array1 , array $array2 [, array $... ] )




//$numb = array(10,12,13,18,15,);

//function add_em($array){
	//foreach ($array as $numb) {
		//$sum += $numb;
	//}
	//return $sum;
//}

 //$sum = add_em($numb);

	//echo $sum;




//nction makecoffee($types = array("cappuccino"), $coffeeMaker =NULL){
//$device = is_null($coffeemaker) ? "hands" : $coffeemaker;
//return "Making a cup of " .join(", ", $typs). "with $ device.\n";
//}

//echo makecoffee();
//echo makecoffee(array("cappuccino", "latte"),"teapot";
//	}
//	)

//function double_value(&$value) {
//	$value = $value * 2;
//}
//$a = 5;

//double_value($a);
//echo $a;






//$bill = 100.58

//function tip($amount){
//	return $amount * 0.2;
//}

//function total_bill ($amount) {
//	return tip($amount) + $amount;
//}
//echo "Your total is $" . number_Format(total_bill($bill),2) . "!\n";



//$numbers = array(68,59,90,83,75);

//function better_than_average($value){
//	return $value > 70;
//}

 //$filtered_array = array_filter($numbers, "better_than_average");

#### my code
// $score_array = array(12,16,32,8,54,46,25);

//function good_score($value){
//	return $value > 25;
//}

 //$score_array = array_filter($score_array, "good_score");

 //print_r($score_array);

 //$Numb = array_sum($score_array);
 //echo "Your total score" . "$Numb";


 //function as arrays
//associative arrays

 //$calculator = array('add' => function($x, $y) {echo $x + $y;}
 	//'subtract' => function($x, $y) {echo $x - $y;});


//$calculator['add'](5,3);
//$calculator['subtract'](5,3);



 $pizza_inventory = array('Pepperoni' => '12', 'Cheese' => '15', 'Veggie' => '10', 'Hamburger' =>'7', 'Sausage' =>'3' );

      
          $user_response = strtolower(readline("Would you like to see our Pizza options?\n"));
      if ($user_response != 'yes') {
      	echo "Thank You for visiting!";
      }
     if ($user_response = 'yes') {
     	print_r($pizza_inventory);
     	
     }
     $user_response = strtolower(readline("Would you like to add your own Pizza options?\n"));
      if ($user_response != 'yes') {
      	echo "Thank You for visiting!";
      }
     if ($user_response = 'yes') {
     	print_r($pizza_inventory);
      

 









