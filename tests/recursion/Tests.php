<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 07/09/2017
 * Time: 8:21 PM
 */

namespace phplab\patterns\tests\recursion;

use phplab\patterns\tests\Tests as Base;

class Tests extends Base
{
    public static $variable_condition = [
        'Name'  => 'level 1',
        'Value' => [
            'Name'  => 'level 2',
            'Value' => [
                'Name'  => 'level 3',
                'Value' => 3,
            ],
        ],
    ];

    public static function result($context)
    {
        return $context;
    }

    public static function iterator($context, $param)
    {
        return [--$context, $param];
    }

    public static function bottom($context)
    {
//        var_dump($context);die();
        return $context <= 1;
    }
}