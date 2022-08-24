<?php 

//FILE SYSTEM PART ONE
          //readfile permits you to read the file in the . txt file

        //   $quotes = readfile('readme.txt');   //reads the file in the readme.txt and saves it in the variable quotes
        //   echo $quotes;


       // $file = 'quotes.txt';

      // if(file_exists($file)){
            // //read file
            // echo readfile($file) .'<br />' ;

            // //copy the file
            // copy($file,'quotes.txt') .'<br />' ;  //it copies the file from the $file to the quotes.txt file 

            // //absolute path
            // echo realpath($file)  .'<br />' ;

            // //file size 
            // echo filesize($file) .'<br />';

            // //rename  file
            // rename($file, 'test.txt');



        // } else {
        //     //if file doesnot exist
        //     echo 'file does not exist';
        // }
          

        //make directory
          // mkdir('quotes')
 

//FILE SYSTEM PART 2
     //opening a file for reading
        // $handle = fopen($file, 'r');   //fopen opens the file , r ensures that the file should be readable
        //we are storing the reference of that file in the variable called handle

     //read the file

    // echo fread($handle, filesize($file) );
    // echo fread($handle, 112); //112 is the size of the file you want to read , this occurs when you know the exact value of file size


     //read a single line
       //  echo fgets($handle);
       //  echo fgets($handle);

     //read a single character 
    //  echo fgetc($handle);
    //  echo fgetc($handle);

     //writing to a file
    // $handle = fopen($file, 'r+');  //r+ means that the one can write and read in the file
   //  fwrite($handle,"\n Everything popular is wrong" ); //this overwrites the text in the file at the top(line 1)

     //we want to write from the bottom
       // $handle = fopen($file, 'a+'); enables the pointer to write from the bottom
    //    $handle = fopen($file, 'a+');
    //    fwrite($handle,"\n Everything popular is wrong");

//fclose($handle);

//delete a file
     // unlink($file);



//CLASSES 
     //A class is a blueprint data types for objects 
     //It describes what functions / properties an object of that properties must have 

//      class User{
//          public $email ;
//          public $name;

//          public function __construct($name, $email){
//             // $this->email = 'gilianenongene@gmail.com';
//             // $this->name ='gilian'; //new  user has a name of gilian

// //forusertwo
//         //sets
//             $this->email = $email;  //accesses the email of usertwo
//             $this->name =$name;//$name is the name we recieved inside the function from line 109
//             //$this refers to the new user of the class
//          }

//          public function  login(){
//             //echo 'the user logged in';
//             //access the value in line 86 n 89 
//             echo $this->name . 'logged in'; //acces the name of the new user and concatinates it with the string
//          }

//      }

//      //creating a new object based on the class
//     //  $userOne = new User();
//     //  $userOne->login();    //accesses the user function from the new object called the userone
//     //  echo $userOne->name;
//     //  echo $userOne->email;

      
// //creating a new user again and setting the name and email
// $userTwo = new User('gilian','gilianenongene@gmail.com');
// // echo $userTwo->name;
// // echo $userTwo->email;
// //$userTwo->login();  //line 97 and line 112

// //change the name of user two
// $userTwo->name ='Daniel';  //it overwrites the name gilian
// echo $userTwo->name;



//PRIVATE CLASSES
class User{
          private $email ;
          private $name;

          public function __construct($name, $email){
            $this->email = $email;  
            $this->name = $name;
          }

          public function  login(){
              echo $this->name . 'logged in';
          }
          public function getName(){
            return $this->name;
          }

          public function setName($name){
           if(is_string($name) && strlen($name) > 1){
                $this->name = $name;
                return "name has been updated to $name";
           } else{
            return 'not a valid name';
           }
          }
        }

          $userTwo = new User('gilian','gilianenongene@gmail.com');

         //echo $userTwo->getName();
         //echo $userTwo->setName(50);
        // echo $userTwo->setName('bless');

        echo $userTwo->getName();
    
?>