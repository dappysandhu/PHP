<?php

require_once('inc/config.inc.php');

// $message ="Writing someting to the log file";

// error_log($message);

$number = 10;
echo "Please enter a divisor for 10: ";
$div = floatval(stream_get_line(STDIN, 1024, PHP_EOL)); // no validation

try{
    $result = $number/$div;
}
catch(DivisionByZeroError $e){
    echo "Caught exception: {$e->getMessage()} \n";
    error_log($e->getMessage());
}
finally{    
    if(isset($result))
        echo "The division result is {$result}\n";

    echo "\nGoodbye";
}

?>