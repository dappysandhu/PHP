<?php

require_once('inc/config.inc.php');
require_once('inc/SimpleHtml.class.php');
require_once('inc/Validate.class.php');

// display header
// check whether form is submitted or not
    // check if the data is valid or not
    // either display form or the submitted data
// display footer

SimpleHtml::getHeader("Validated HTML");

if(isset($_POST['submit'])){ // you can check with isset() or !empty()
    if(Validate::validateForm()){
        // display data
        SimpleHtml::displayMessage();
        SimpleHtml::displayData();
    }
    else
        SimpleHtml::displayError();
}
else{
    // display form
    SimpleHtml::getForm();
}

SimpleHtml::getFooter();

?>