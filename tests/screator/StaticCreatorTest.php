<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 16/09/2017
 * Time: 4:05 PM
 */

namespace phplab\patterns\tests\screator;

use phplab\patterns\screator\StaticCreator;
use PHPUnit\Framework\TestCase;

class StaticCreatorTest extends TestCase
{
    /****************************************
     * Function Tests
     ****************************************/
    /**
     * 构造函数
     */
    public function testConstruct()
    {
        $obj = new StaticCreator(['arg1' => 'hahaha','arg2' => 'lalala']);
        $this->assertInstanceOf(Tests::$screator_class, $obj);
    }

    /**
     * 功能函数
     */
    public function testCreator()
    {
        $obj = StaticCreatorImpl::create(['arg1' => 'hahaha','arg2' => 'lalala']);
        $this->assertInstanceOf(Tests::$screator_class, $obj);
    }

    /****************************************
     * Illegal Tests
     ****************************************/

    /****************************************
     * Edge Tests
     ****************************************/
}
