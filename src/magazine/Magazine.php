<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 11/09/2017
 * Time: 3:51 PM
 */

namespace phplab\patterns\magazine;

use phplab\data\set\Diff;

class Magazine
{
    /**
     * Magazine constructor.
     */
    public function __construct()
    {
        $all_methods = get_class_methods($this);
        $skip_lists = $this->getSkipList();
        list($exe_methods) = Diff::diff($all_methods, $skip_lists);

        foreach ($exe_methods as $method) {
            // preparations
            $ret = $this->before(func_get_args());
            // execute the method
            $ret = $this->{$method}($ret);
            // result handlings
            $this->after($ret);
        }
    }

    protected function getSkipList()
    {
        return [
            'getSkipList',
            '__construct',
            'before',
            'after',
        ];
    }

    protected function before($param = null)
    {
        echo "before calling\n";

        return $param;
    }

    protected function after($param = null)
    {
        echo "after calling\n";
    }
}
