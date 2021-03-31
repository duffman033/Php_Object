<?php

namespace App\Tools;


class Generals
{
    public static function setupWorkspace(){
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
    }
}