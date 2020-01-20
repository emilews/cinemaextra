<?php
  //Assign file paths to PHP constants
  //_FILE_ returns the currents path to this file
  //dirname() returns tha path to parent directory

  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("SHARED_PATH", PRIVATE_PATH . '/shared');

  require_once('functions.php');

?>
