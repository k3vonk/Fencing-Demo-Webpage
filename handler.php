<?php

//require_once __DIR__ . '/vendor/autoload.php';
ini_set('allow_url_fopen',1);
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'index.php';
        break;
    case '/index':
        require 'index.php';
        break;
    case '/index.php':
        require 'index.php';
        break;
	case '/membership':
        require 'membership.php';
        break;
    case '/membership.php':
        require 'membership.php';
        break;
	case '/news':
        require 'news.php';
        break;
    case '/news.php':
        require 'news.php';
        break;
	case '/shop':
        require 'shop.php';
        break;
    case '/shop.php':
        require 'shop.php';
        break;
    default:
        http_response_code(404);
        echo @parse_url($_SERVER['REQUEST_URI'])['path'];
        exit('Not Found');
}


?>