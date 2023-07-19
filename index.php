<?php
declare(strict_types=1);
session_start();
require_once __DIR__.'/env/settings.php';
require_once __DIR__."/vendor/autoload.php";

use OnlineshopOop\App\Router;
$mainControllerNameSpace ="OnlineshopOop\\Controllers\\MainController";
$CartControllerNameSpace ="OnlineshopOop\\Controllers\\CartController";
$ProductsControllerNameSpace="OnlineshopOop\\Controllers\\ProductsController";
$UsersControllerNameSpace="OnlineshopOop\\Controllers\\UsersController";
