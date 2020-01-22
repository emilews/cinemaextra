<?php

  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() returns the path to the parent directory
  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("SHARED_PATH", PRIVATE_PATH . '/shared');

  /**
   * Asigna el URL raiz a una constante de PHP
   * * Este valor se puede ser asignado en el codigo:
   * define("WWW_ROOT",'/globe_bank/public/');
   * * o puede ser definido dinamicamente obteniendo 
   * el URL y  buscando en el la carpeta "/public" 
  */

  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  define("WWW_ROOT", $doc_root);

  require_once('functions.php');

?>
