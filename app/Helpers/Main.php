<?php

namespace App\Helpers;

class Main
{
    public static function nameFormat($str)
    {
        $res = ucwords($str);
        $res = str_replace(" ", "", $res);
        $res = lcfirst($res);
        return $res;
    }
}
