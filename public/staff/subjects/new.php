<?php

require_once('../../../private/initialize.php');

$test = isset($_GET['test']) ? $_GET['test'] : ''; //Validamos si existe la variable test

if($test == '404') {
  error_404();
} elseif($test == '500') {
  error_500();
} elseif($test == 'redirect') {
  redirect_to(url_for('/staff/subjects/index.php'));
} else {
  echo 'No error';
}
?>
