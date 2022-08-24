<?php 
//echo 'hello ninjas';

//VARIABLES
$name = 'gilian';
$age = 60;
$name = 'favour';
//const 
define('NAME', 'daniel');
//echo $name;


//STRINGS
$stringone = 'my email is ';
$stringtwo = 'gilianenongene@gamil.com';
//echo $stringone;

//TO DETERMINE THE POSITION OF A CHARACTER IN A VARIABLE
//echo $name[2];


//FUNCTIONS
//echo strlen($name);
//echo strtoupper($name);  //converts name to uppercase letters
//echo strtolower($name);  //converts name to lowercase letters
echo str_replace('f', 's', $name);





 
?>
<!-- HOW TO EMBED THE PHP COURSE INSIDE THE HTML CODE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY FIRST PHP FILE</title>
</head>
<body>
<h1> VARIABLES</h1>
    <!-- you can output the variable in the html file -->

    <div> <?php  echo  $name; ?></div>
    <div> <?php  echo $age; ?></div> 
    <div> <?php  echo NAME; ?></div>
  
<h1> STRINGS</h1>
<div> <?php  echo  $stringone . $stringtwo; ?></div>
<div> <?php  echo 'hey my name is '  .$name; ?></div>
 
 <!-- //double quote is used when we want to output a variable  directly in the echo phrase -->
 <div> <?php echo "hello my name is $name"; ?></div>
 <div> <?php  echo 'The ninja screamed "whaaoooo"';?></div>
 
 <!-- //TO DETERMINE THE POSITION OF AN INDIVIDUAL  CHARACTER IN A VARIABLE -->
<div>  <?php echo $name [2]; ?> </div>


<h1> NUMBERS</h1>
  <!-- can be integer of float -->


<?php 
$radius = 25;
$pi = 3.14;

//BASIC OPERATORS * ,/ ,** , + , - , ^
// ** means of. ^ means to the power
//echo $pi * $radius ^ 2;

//order of operations like BIDMAS
   //echo 2*(4 + 9) / 3;

 //increment and decrement operators
// echo $radius ++;
// echo $radius;  //prints 26

// echo $radius --; //it decrements from 26 to 25
// echo $radius;


//shorthand operators
 //$age = 50;
 //$age = $age + 10;  // or 
//$age += 10; //same thing applies to all operators
//echo $age;

  //number vunctions
  //echo floor($pi);
  //echo ceil($pi);

  //echo pi(); //returns the longest number of pi


// ARRAYS
   //indexed arrays
    $peopleone = [ 'gilian', 'favour', 'dani', 'samuel'];
    //  echo $peopleone[1];

    //another way to declare an index array 
    $peopletwo =array('blessed', 'vanessa', 'solomon');
    // echo $peopletwo[1];

    //display all the values in the array in a readable formats
    $ages =[1,3,5,6,8]; 
    //print_r($ages);
    $ages[1] = 60;    //overwrite 3 to 60;
   // print_r($ages);
     
    $ages[] = 80;    //adds a new element in the array
    //print_r($ages);  

    array_push($ages, 100);  //another way to add element in the array
   // print_r($ages);

   //how to know the lenght of an array
    echo count($ages);

    // merge array
    // $peoplethree = array_merge($peopleone,$peopletwo);
    // print_r($peoplethree);

//ASSOCIATIVE ARRAYS (key and value pairs)

    $ninjaone = ['gilian' =>'black', 'mario' =>'orange','luige' =>'brown'];
       // echo $ninjaone['mario'];

 // print_r($ninjaone);  

    $ninjatwo = ['blessed' =>'chinwo', 'ramatou'=>'yellow', 'billy'=>'purple'];
 //   print_r($ninjatwo);

  //add a new element in the array
   //   $ninjaone['toad']= 'pink';
   //   print_r($ninjaone);

  //overwrite
    $ninjaone['gilian']= 'pink';
  //print_r($ninjaone);

  //count the number of arrays
 // echo count($ninjaone);

  //merge the array
    $ninjathree = array_merge($ninjaone,$ninjatwo);
   // print_r($ninjathree);


   //multidimesional arrays
          //these are arrays that have other arrays withen it
        //   $blogs= [
        //     ['mario party','mario','lorem', 60],
        //     ['mario cart cheats','toad', 'lorem', 70],
        //     ['zelda hidden chest','link','lorem',30]
        //   ];
        
        //  print_r($blogs[1][1]);   //prints the toad from the second array 

        $blogs= [
            ['title'=>'mario party','author'=>'mario','content'=>'lorem', 'likes'=> 60],
            ['title'=>'mario cart cheats','author'=>'toad', 'content'=>'lorem', 'likes'=> 70],
            ['title'=>'zelda hidden chest','author'=>'link','content'=>'lorem','likes'=>30]
          ];
            //  print_r($blogs);
            //   print_r($blogs[1]);   //prints the second array
            // print_r($blogs[2]['author']);   //prints link
            // echo count($blogs);

          $blogs[]=['title'=>'castle party','author'=>'peach','content'=>'lorem', 'likes=>80'];
             //  print_r($blogs);
  
          //how to take something from an array
               //   $popped = array_pop($blogs); //dispays the last array
              //   print_r($popped);   


 //LOOPS

    //for loop
  $ninjas = ['queen', 'desmond','valery'];
  for($i=0; $i< count($ninjas);  $i++){
        echo $ninjas[$i] . '<br />';
  }

  //foreach to cycle through
  foreach($ninjas as $ninja){
    echo $ninja . '<br/>'; 
  }

  $products =[
    ['name'=> 'shiny star', 'price'=>20],
    ['name'=> 'green shell', 'price'=>10],
    ['name'=> 'red shell', 'price'=>15],
    ['name'=> 'gold coin', 'price'=>5],
    ['name'=> 'lightening bolt', 'price'=>40],
    ['name'=> 'banana skin', 'price'=>2],
  ];

// foreach($products as $product){
//     echo $product['name'] . ' - ' . $product['price'];
//     echo '<br />';
// }

//while loop
//  $i = 0;
//  while($i < count($products)){
//     echo $products[$i]['name'];  //prints the products at position $i
//     echo '<br />';
//     $i++;
//  };


 //do while
 $x =0;
 do {
    echo  $products [$x]['name'] . '<br/> ';
    $x++;
 }
 while($x <= 1); 


 //BOOLEAN COMPARISON(true and false)

//  echo true;
//  echo false; 
//  echo  '<br/>';
   //numbers
//    echo 4<56;
//    echo 4 > 56;
//    echo 4 == 56;
//    echo 4 == 4;
//    echo 4<= 4;
//    echo 4 != 56;

   //strings
    // echo 'gilian' < 'yaya';
    //echo 'gilian' >'Gilian';   //small letters are greater than the capital letters



    // LOOSE COMPARISON VS STRICT COMPARISON
    //strict comparison takes into account the data types 
            echo false =='';


//CONDITIONAL STATEMENTS
       //if statement
    //    $price = 10;
    //    if($price > 70){
    //     echo ' the condition is met';
    //    } elseif($price<20){
    //     echo ' elseif condition is met';
    //    }
    //     else {
    //     echo 'condition is not met';
    //    }

     
    $products =[
        ['name'=> 'shiny star', 'price'=>20],
        ['name'=> 'green shell', 'price'=>10],
        ['name'=> 'red shell', 'price'=>15],
        ['name'=> 'gold coin', 'price'=>5],
        ['name'=> 'lightening bolt', 'price'=>40],
        ['name'=> 'banana skin', 'price'=>2],
      ];

    //   foreach($products as $product){
    //     if($product['price'] < 15 && $product['price'] > 2){
    //         echo $product['name'] . '<br/>';
    //     } 
    //   }

    // foreach($products as $product){
    //     if($product['price'] > 20 || $product['price'] < 10){
    //         echo $product['name'] . '<br/>';
    //     } 
    //   }



//BREAK AND CONTINUE
     //continue : stops the code in the line where the continue is and does not run the code in the code block
     //break is a key word in php that allows us to break out od the loop and is not going to itterate the last ones
    //  foreach($products as $product){
    //     if($product['name'] === 'lightening bolt'){
    //         break;    //does not itterate the lightening bolt
    //     }
 
    //     if($product['price'] > 15){
    //         continue;    
    //     }

    //     echo $product['name'] . '<br/>';
    //  }
    //  echo '<br/>';




//FUNCTION

// function sayHello(){    //declares the function
//     echo "goodmorning gilian";
// }    
// sayHello();   //invoke the function


// function sayHello($name){    //declares the function
//     echo "goodmorning $name";
// }    
// sayHello('testimony'); 


//setting name equal to default value
// function sayHello($name = 'sandra'){    //declares the function
//   //  echo "goodmorning $name";
// }    
// sayHello(); 


          //format products: takes the product variable with name and price and output a sentence about that product
           // function formatProduct($product){
                //echo "{$product['name']} cost fcfa{$product['price']} to buy <br />";
                // formatProduct(['name' => 'gold star', 'price' => 20]);
                //we want the function to return the value

             //  return  "{$product['name']} cost fcfa{$product['price']} to buy <br />";
           // }
            // $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
            // echo $formatted; 

            //multiple arguments
                  
            function sayHello($name = 'emmanuella', $time ='morning'){    //declares the function
                    echo "good $time $name ";
                 }    
                 sayHello('jessica', 'night');   //overwrites the name and the time
            
  $name = 'blessed' ;  

//  function myfunc(){
//     global $name; //to access the global varaible locally
      //this is a local variable thatcan be accessed locally
   // echo "hello  $name";
 //}
    // myfunc();
    //  echo $price; //this is a global variable that can not be accessed locally


   // reference the global variable
    
   function sayBye(&$name){
    $name = ' wario';   //overwrites  the name blessed to wario
            echo "bye $name";  //displays the name wario
   }
    sayBye($name);   //says bye to wario
    echo $name;  //displays the name wario



// FILE SYSTEM





?>




<!-- looping through code in the html -->
<h1>Products</h1>
<ul>
    <?php  foreach($products as $product){?>

        <h3><?php echo $product['name']; ?></h3>
        <p>cfa <?php  echo $product['name']; ?></p>

    <?php  } ?>


    <!-- outputing the if statement inside the html  -->
    <div>
        <ul>
            <?php  foreach ($products as $product){?>
                <?php if($product['price'] > 15){?>
                      <li> <?php  echo $product['name'];?></li>
                <?php }?>
            <?php }?>
        </ul>
    </div>


</ul>
   
</body>
</html>