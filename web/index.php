<?php

switch ($_ENV['SYMFONY_ENV']){
    case 'prod':
        require_once 'app.php';
        break;
    default:
        require_once 'app_dev.php';
        break;
}