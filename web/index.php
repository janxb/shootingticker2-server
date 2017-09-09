<?php

use Symfony\Component\HttpFoundation\Request;

require_once "../vendor/autoload.php";

/** @noinspection PhpUndefinedFieldInspection */
Request::setTrustedProxies(array($request->server->get('REMOTE_ADDR')), Request::HEADER_X_FORWARDED_FOR);

switch ($_ENV['SYMFONY_ENV']){
    case 'prod':
        require_once 'app.php';
        break;
    default:
        require_once 'app_dev.php';
        break;
}