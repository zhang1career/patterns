<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 11/09/2017
 * Time: 3:51 PM
 */

namespace phplab\patterns\tests\screator;

use phplab\patterns\screator\StaticCreator;

class StaticCreatorImpl extends StaticCreator
{
    public function init()
    {
        echo 'son class, '. func_get_args()[0]['arg2'] ."\n";
    }
}
