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

Router::add('/','get',$mainControllerNameSpace,'index');
Router::add('/login','get', $UsersControllerNameSpace,'login');
Router::add('/logout','get',$UsersControllerNameSpace,'logout');
Router::add('/register','get',$UsersControllerNameSpace,'index');
Router::add('/register','post',$UsersControllerNameSpace,'add');
Router::add('/cart','get',$CartControllerNameSpace,'add');

Router::run();