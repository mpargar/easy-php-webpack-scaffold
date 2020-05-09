<?php
  /* This code execute your controller's method according to the required method */
  include_once "controllers/test.php";
  $controller = new Test();
  $controller->{$method}();