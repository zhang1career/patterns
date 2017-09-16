<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 11/09/2017
 * Time: 3:51 PM
 */

namespace phplab\patterns\tests\magazine;

use phplab\patterns\magazine\Magazine;

class MagazineImpl extends Magazine
{
    protected function test1($param)
    {
        echo "test1 calling\n";

        return $param;
    }

    protected function test2($param)
    {
        echo "test2 calling\n";

        return $param;
    }
}
