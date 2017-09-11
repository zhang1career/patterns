<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 11/09/2017
 * Time: 4:09 PM
 */

namespace phplab\patterns\tests\magazine;

use phplab\patterns\magazine\Magazine;
use phplab\patterns\tests\MagazineImpl;
use phplab\patterns\tests\Tests;
use PHPUnit\Framework\TestCase;

class MagazineTest extends TestCase
{
    /****************************************
     * Function Tests
     ****************************************/
    /**
     * 构造函数
     */
    public function testConstruct()
    {
        $obj = new Magazine(Tests::$variable_persion);
        $this->assertInstanceOf(Tests::$magazine_class, $obj);
    }

    /****************************************
     * Illegal Tests
     ****************************************/

    /****************************************
     * Edge Tests
     ****************************************/
}
