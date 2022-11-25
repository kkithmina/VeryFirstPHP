<?php

 //echo" Hello World" ;

 //php code 
 #php code --- singe line commetns 

 /* this is multi line 
 commet */

  //$txt =  " Hello This is a String " ;
  //$int =  345;
  //$bool = true ;
  //$vehicle_type = array("Tata","Asoka Leyland","BMW");

  //echo $vehicle_type ."<br/>"; 
  //var_dump($vehicle_type) ."<br/>";

  
 // echo $txt . "<br/>"; 
 // echo $int ."<br/>";
 // echo $bool."<br/>";
  
  //var_dump($bool) ;
 // var_dump($int) ;

 // $one = 15 ;
//  $two = 25 ; 

 // $total = $one + $two ;
 // echo ($total) ;
//  Assignment Operators  

 //$x = $y ; // assign value of $y to $x 
 //$x == $y ;// is $x equal $y  - True or Flase
 //$x === $y ; // is $x  equal  $y and are in same data type ,  special assignment operator in php 

 /*$first =  50 ;
 $second = 78 ;
 $third = 80 ; 
 $tot  = $first + $second + $third . "<br/><br/>"; 
 $avg = 67 ; 
 
 echo ($tot /3) ."<br/>";*/


  /*if ($avg > 75 ){

    print ("Pass") ; 
  } else {

    print("Fail") ;
  } */

  // Grading Example  

  /* 
   75 > = A ; 
   65 > = B ;
   55 > = C ;
   Otherwise Fail  
  */ 

  /* $mark = 67 ."<br/>" ;

   if($mark >= 75 ){

     print("Grade A") ;
   } else if ($mark >= 65){
   
      print("Grade B"); 
   }else if($mark >= 55){   

    print (" Grade C") ; 

   } else {

     print ("Fail");
   }
 */
 // switch case statement 
  /*  $weekday = 5 ;

    switch($weekday ){
      case "1":
         print("It's Monday"); 
         break;
      case "2":
         print("It's Tuesday") ;
          break;
      case "3":
         print("It's Wedenssday");
          break;
      case "4":
         print("It's Thursday");
         break ;
      case "5": 
        print("It's Friday") ;
        break ;
        default :
          print(" Value is not Define ");
        
    }*/
/*
    for($c = 1 ; $c <= 10 ; $c++){

        echo "Number is $c <br/>";
    } 

*/

    // Foreach loop 
/*
    $cars  =array ("BMW" ,"BENZ" ,"TESLA","AUDI");

    foreach($cars as $car){

        echo "Car is $car <br/>";
    }
*/
    //While loop 
    /*

    $c = 1;
    while ($c <= 10){
        print("Value is $c <br/>");
        $c++; 
    }
    */

    // DO WHILE Loop 
    $s = 3 ;
    do {

        print("Value is $s <br/>");
        $s++;

    } while ($s < 1);


   $myvalue = 3 ; 

   echo ++$myvalue ."<br/>" ; 

   //Continue and Break statements 

   $k = 3 ;

   for ($k=0; $k<=10 ;$k++){

       if($k == 5){
           break ; 

       }
      
    echo "Number is  $k <br/>";  

   }

   for($k =0; $k<=10;$k++){
     if($k == 5 ){
         continue;

     }
    echo"Number is $k <br/>";
   }



?>