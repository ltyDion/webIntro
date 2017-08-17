<?php
	$firstName = "<p>Rob";
	$lastName = "Lu</p>";
	$name = "<p>Tianyang Lu</p>";
	echo $name;
	echo $firstName." ".$lastName;

	$number = 5;
	$number2 = 10;
	$text = "this is a number";
	echo $text.($number+$number2);
	echo "<br>";	

	$myArray = array("dion", 5, "tianyang");
	$myArray[0] = "Dion";
	$myArray[5] = "lu";
	print_r($myArray);
	echo sizeof($myArray),"<br>";
	$myArray["name"] = "allen";
	$myArray[] = "kami";
	
	print_r($myArray);

	$numberArray = array(10,23,34);
	foreach( $numberArray as $key => $number3){
      $numberArray[$key] = $number3 * 2;
      echo "<p>The".$key."number that has been doubled is ".$numberArray[$key].".</p>";
    }
  /* exercise of GET variable
	function isInteger($input){
    	return(ctype_digit(strval($input)));
	}	


	if ($_GET != NULL){
      echo "<p>Hello ".$_GET["name"]."!</p>";
      $divider = 2;
      $prime = true;
      if(is_numeric($_GET["number"]) && $_GET["number"] > 0 && $_GET["number"] == round($_GET["number"], 0)){
        
        while($divider < $_GET["number"]){
          
          if ( $_GET["number"] % $divider == 0){
            $prime = false;
          } 
          $divider++;
          
        }
        if ($prime){
          echo "<p>The number is a prime.</p>";
        } else {
          echo "<p>The number is not a prime.</p>";
        }
      } else {
        echo "<p>The entered text is not a number</p>";
      }
      
    }
    */

	/* exercise of post variable
	$userName = array("dion","allen","kami","tony");
	if ($_POST != NULL){
      if ($_POST["name"] != NULL){
        for ( $i = 0; $i < sizeof($userName); $i++){
          if ($_POST["name"] == $userName[$i]){
            echo "<p>The name is in the userName array.</p>";
          } 
        }
      }
    }
    */
    
    $emailTo = "til159@ucsd.edu";
    $subject = "php mailing function test";
    $body = "this is a test of php mailing function";
    $header = "From: dion970918@hotmail.com";
    
    if (mail($emailTo, $subject, $body, $header)){
      	echo "<p>Email is sent successfully.</p>" ;
    } else {
    	echo "<p> Email is not sent successfully.</p>";
    }
    
?>

<p>What's your name?</p>
<form>
	<input name = "name" type = "text" placeholder = "name">
    <input name = "gender" type = "text" placeholder = "gender">
    <input name = "number" type = text placeholder = "enter one number to determine if it is prime">
    
    <input type = "submit" value = "GO submit">
</form>