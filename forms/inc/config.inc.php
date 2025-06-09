<?php
date_default_timezone_set('America/Vancouver');

// definition for log file
define('LOGFILE','log/error_log.txt');
  
// setting error logging to be active 
ini_set("log_errors", TRUE);  
  
// setting the logging file in php.ini 
ini_set('error_log', LOGFILE); 
  




?>