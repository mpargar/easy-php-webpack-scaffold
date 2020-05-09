<?php
  /* This file works as a router */
  $indexRoute = "/home"; // Update this variable to the route equivalent to /
  $request = $_SERVER["REQUEST_URI"];
  $method = $_SERVER["REQUEST_METHOD"];
  $splitedRequest = explode("/", $request);
  $basePath = "public";
  if($splitedRequest[1] != "api") {
    $basePath = $basePath.'/views';
    if($request == '/') {
      $request = $indexRoute;
    }
  }
  $file = $basePath.$request.".php";
  if (file_exists($file)) {
    require $file;
  } else {
    header("HTTP/1.0 404 Not Found");
    require $basePath."/404.php";
  }