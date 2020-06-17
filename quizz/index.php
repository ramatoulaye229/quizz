<?php

 define("WEBROOT","http://localhost/quizz");
 require_once "libs/router.php";
 $router=new router();
 $router -> getRoute();
 