<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 07/09/2017
 * Time: 8:21 PM
 */

namespace phplab\patterns\tests\screator;

use phplab\patterns\screator\StaticCreator;
use phplab\patterns\tests\Tests as Base;

class Tests extends Base
{
    public static $screator_class = StaticCreator::class;
}