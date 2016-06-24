<?php

//a program to inventory pizza, utilizing arrays, functions and loops which will allow user interaction and alteration of arrays. 

 //create array
 
      
  function first_inv($pizz_inv){
        $pizz_inv = array 
         (array("Pepperoni",12),
         array("Cheese",15),
         array("Veggie",10),
         array("Hamburger",7),
         array("Sausage",3));        
   return $pizz_inv;   
          }   

              // add new pizzas and display them
        Function add_pizza_inventory($addpizza){
             $new_pizza = strtolower(readline("What kind of pizza would you like to add?"));
             $new_quantity = readline("How many pizzas?");
​$addpizza = array(array($new_pizza,$new_quantity));
​
             $arr = array();
             $get = get_inventory($arr);
$new_pizza_inventory = array_merge($addpizza,$get);
        return $new_pizza_inventory;
          }
​
     // remove pizza with a function 
        function remove_pizza($item){
​
        $lesspizarr = array();
        $less_pizza = get_inventory($arr);
         print_r($less_pizza);
             $unwantedPizza = strtolower(readline("Which Pizza would you like to take from the Pizza Inventory?"));
           unset($less_pizza[$unwantedPizza]);
           return $less_pizza;
             }
​
//sell pizza with a function

function sell_pizza($inv){
​
  $pizz_arr = array();
​
  $qty_pizz = get_inventory($arr);
​
  print_r($qty_pizz);
​
  $pizza_kind = strtolower(readline("Which Pizza would you like to sell? "));
​
  $num_pizz = readline("How many Pizza's would you like to sell? ");
​
  $pizza_sell = $qty_pizz[$pizza_kind];
​

  $num = $pizza_sell[1];
  $remove = $num - $num_pizz;
​
  if($num_pizz > $num){
​
    echo "There is not sufficient pizzas to fill this order!";
  }else{
​
  $sell[1] = $remove;
}
  print_r($pizza_sell);
​
​
  $qty_pizz[$pizza_kind] = $item;
​
  return $qty_pizz;
​
}

​
​
//buy pizza with a function 
​
function purchase_pizza($inventory){
​
  $pizz_arr = array();
​
  $get_inv = get_inventory();
​
  print_r($get_inv);
​
  $pizz_type = readline("Which pizza would you like to buy? ");
​
  $qty_pzz = readline("How Pizzas would you like? ");
​
  $piZZa = $get_inv[$pizz_type];
  
  $numb = $pizza_pizza[1];
  
  $delete = $number + $qty;
​
  //replace qty with new number.
​
  $item[1] = $delete;
​
  print_r($pizza);
​
​
  $get_inv[$pizz_type] = $pizza;
​
  return $get_inv;
​
}
​
​
//user input options
​
function menu($options){
​
  $first = array();
​
  $get_inv = get_inventory($start);
​
  $choice = readline("Hello!\n How many I help you?\n Options\n
    A - Display Pizza Inventory
    B - Add a Pizza to Inventory\n
    C - Delete a pizza from Inventory\n
    D - Buy Pizzas\n
    E - Sell Pizzas\n");
​
    if($choice == A){
      first_inv($pizz_inv);
    }elseif($choice == B){
      add_pizza_inventory($new_pizza_inventory);
    }elseif($selection == C){
      remove_item_from_inventory($less_pizza);
    }elseif($selection == D){
      purchase_pizza($get_inv;
    }elseif($selection == E){
      sell_pizza($get_inv);
    }
​
  }
​
​






                        
                            
                             
                 
      	   
       



