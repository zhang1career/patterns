<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 30/08/2017
 * Time: 3:39 PM
 */

namespace phplab\patterns\singleton;

use BadFunctionCallException;
use phplab\patterns\inc\singleton\SingletonInterface;

class Singleton implements SingletonInterface
{
    /**
     * singleton
     * @var
     */
    protected static $instance;

    /**
     * constructor
     */
    protected function __construct()
    {
    }

    /**
     * clone
     * @throws BadFunctionCallException
     */
    final public function __clone()
    {
        throw new BadFunctionCallException(sprintf('Cloning a %s instance is not allowed!', get_called_class()));
    }

    /**
     * get instance
     * @return Singleton
     */
    public static function getInstance()
    {
        $class = get_called_class();

        if (!isset(self::$instance[$class])) {
            self::$instance[$class] = new $class();
        }

        return self::$instance[$class];
    }
}
