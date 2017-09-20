<?php

namespace phplab\patterns\screator;

use phplab\patterns\inc\screator\StaticCreatorInterface;

/**
 * This class allows to create objects that can be statically created "on-the-fly" to allow
 * method chaining constructing them like:
 *
 *     $obj = ObjectStaticCreator::create( arguments )
 *         ->method();
 *
 * This logic is implemented through a required `init()` method in children class that will be called
 * on static creation (in non-static environment) and by constructor.
 *
 * @author  piwi <me@e-piwi.fr>
 */
class StaticCreator implements StaticCreatorInterface
{
    /**
     * Implement a special constructor init() as it will be called by the create() static method
     */
    public function init()
    {
        echo 'base class, '. func_get_args()[0]['arg1'] ."\n";
    }
    
    /**
     * Magic default constructor for non-static use
     * This may use the same arguments as the init() method.
     */
    public function __construct()
    {
        call_user_func_array([$this, 'init'], func_get_args());
    }
    
    /**
     * Static creation of the object
     * This may use the same arguments as the init() method.
     * @return self Must return a new instance of the object created with function arguments
     */
    public static function create()
    {
        return new static(func_get_args()[0]);
    }
}
