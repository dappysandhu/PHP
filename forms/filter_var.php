<?php
$email = "john@@example.com";
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    echo "INVALID E-MAIL!\n";
}

$number = 10.0; // Example of a float
$filterOption = array("options" => array("min_range" => 1, "max_range" => 10));
foreach ($filterOption["options"] as $key => $value) {
    echo "$key => $value\n";
}
if(!filter_var($number, FILTER_VALIDATE_INT,$filterOption)){
    echo "DATA OUTSIDE OF ACCEPTABLE RANGE\n";
}


$userInput = "Love the site. E-mail me at (&) <a href='http://www.example.com'>Spammer</a>.";

// Strip tags to remove HTML
$strippedInput = strip_tags($userInput);

// Optionally encode special characters for further safety
$safeInput = htmlspecialchars($strippedInput);

echo "\nSanitized input is " . $safeInput;
// Output: Sanitized input is Love the site. E-mail me at Spammer.
?>


