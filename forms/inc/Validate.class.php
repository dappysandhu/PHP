<?php

class Validate{

    static function validateForm(){
        $valid = true;
        // age
        $filteredAge = filter_input(INPUT_POST,'age', FILTER_VALIDATE_INT);
        
        // term
        $filterOption = array("options" =>array("min_range"=>1, "max_range"=>8));
        $filteredTerm = filter_input(INPUT_POST,'term',FILTER_VALIDATE_INT,$filterOption);

        // for the course, since all options are valid and user needs to select at least one
        // we can use isset() or !empty
        
        // languages are optional, we do not need to validate

        if ((strlen($_POST["name"]) == 0) || !$filteredAge || !$filteredTerm || empty($_POST['courses'])) {    
            $valid = false;
            error_log("Form validation return error"); # example of writing error log
        }    
        
        return $valid;
    }
}


?>