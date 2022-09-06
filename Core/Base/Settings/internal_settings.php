<?php 

defined("VG_ACCESS") || die("Access denied");

const TEMPLATE = 'Templates/default/';
const ADMIN_TEMPLATE = 'Core/Admin/Views/';

const COOKIE_VERSION = '1.0.0';
const CRYPT_KEY = '';
const ADMIN_COOKIE_TIME = 60;
const BLOCK_TIME = 3;

const QTY = 8;
const QTY_LINKS = 3;

const ADMIN_CSS_JS = [
    'styles' => [],
    'scripts' => []
];

function autoloadMainClasses($classname){
    $classname = str_replace("\\", "/", $classname).".php";
    if(!@include_once $classname){
        throw new RouteExeption('Invalid filename to connect'.$classname);
    };
}
spl_autoload_register("autoloadMainClasses");