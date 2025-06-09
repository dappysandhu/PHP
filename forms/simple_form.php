<?php

require_once('inc/SimpleHtml.class.php');

// display header
// check whether form is submitted or not
    // either display form or the submitted data
// display footer

SimpleHtml::getHeader("Simple HTML");

if(isset($_POST['submit'])){ // you can check with isset() or !empty()
    // display data
    SimpleHtml::displayMessage();
    SimpleHtml::displayData();
}
else{
    // display form
    SimpleHtml::getForm();
}

SimpleHtml::getFooter();


?>