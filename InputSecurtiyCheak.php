<?php 
/**
 * 
 * THis CLASS USE HTMLPURIFIER LIBRARY TO AVOID ALL XSS INJECTION  
 */

require_once 'lib/HTMLPurifier.auto.php';

class InputSecurtiyCheak{


    
public function _constrint()
{

}
/**
 * THis Function to avoid XSS attak 
 * 
 * input : data from form input 
 * 
 * output: data after filtering xss attak 
 */
public function avoidXSS($input)
{

    $purifier = new HTMLPurifier();
    $output = $purifier->purify($input);

    return $output;
}

}


?>