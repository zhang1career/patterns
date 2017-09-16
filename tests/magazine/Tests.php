<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 07/09/2017
 * Time: 8:21 PM
 */

namespace phplab\patterns\tests\magazine;

use phplab\patterns\tests\Tests as Base;

class Tests extends Base
{
    protected function sayHello($value)
    {
        return Tests::$variable_hello;
    }

    protected function sayWorld($value)
    {
        return Tests::$variable_world;
    }
}