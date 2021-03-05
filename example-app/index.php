<?php

set_include_path(
    get_include_path() . PATH_SEPARATOR .
    "happymeal-1"
);

require_once "phplib-1/__autoload.php";

$r = new Happymeal\Port\Adaptor\Data\ValidationHandler();
echo get_class($r);