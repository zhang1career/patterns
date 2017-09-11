<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 11/09/2017
 * Time: 3:51 PM
 */

namespace phplab\patterns\magazine;

class Magazine
{
    /**
     * Magazine constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $methods = get_class_methods($this);

        foreach ($methods as $method) {
            if ($method != '__construct') {
                // preparations
                $this->preCall();
                // execute the method
                $ret_val = $this->{$method}($value);
                // result handlings
                $this->postCall($ret_val);
            }
        }
    }

    protected function preCall($param = null)
    {
    }

    protected function postCall($param = null)
    {
    }
}
