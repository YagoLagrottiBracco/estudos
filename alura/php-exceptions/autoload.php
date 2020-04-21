<?php

function load(string $namespace): void
{
    $namespace = str_replace("\\", "/", $namespace);
    $namespace = __DIR__ . "/" . $namespace . ".php";
    require_once $namespace;
}

spl_autoload_register(__NAMESPACE__."\load");