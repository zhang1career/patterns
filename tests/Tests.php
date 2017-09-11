<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 07/09/2017
 * Time: 8:21 PM
 */

namespace phplab\patterns\tests;

use phplab\patterns\magazine\Magazine;

class Tests
{
    public static $magazine_class = Magazine::class;

    public static $variable_hello = 'hello';
    public static $variable_world = 'world';
    public static $variable_hello_world = 'hello world';
}


class MagazineImpl extends Magazine
{
    protected function sayHello()
    {
        return Tests::$variable_hello;
    }

    protected function sayWorld()
    {
        return Tests::$variable_world;
    }
}