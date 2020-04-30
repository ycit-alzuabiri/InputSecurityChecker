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

public function avoidXSS($input)
{

    $purifier = new HTMLPurifier();
    $output = $purifier->purify($input);

    return $output;
}

}


?>