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
    /** @var $skip_funcs */
    private $skip_funcs;
    /** @var $exe_funcs  */
    private $exe_funcs;

    /**
     * Magazine constructor.
     */
    public function __construct()
    {
        $all_funcs = get_class_methods($this);
        $this->skip_funcs = $this->getSkipFuncs();
        list($this->exe_funcs) = Diff::diff($all_funcs, $this->skip_funcs);
    }

    /**
     * Run all executable functions
     */
    public function run()
    {
        foreach ($this->exe_funcs as $func) {
            // preparations
            $ret = $this->before(func_get_args());
            // execute the method
            $ret = $this->{$func}($ret);
            // result handlings
            $this->after($ret);
        }
    }

    /**
     * @return array
     */
    protected function getSkipFuncs()
    {
        return [
            'getSkipFuncs',
            '__construct',
            'before',
            'run',
            'after',
        ];
    }

    /**
     * @param $param
     * @return mixed
     */
    protected function before($param)
    {
        echo "before calling\n";

        return $param;
    }

    /**
     * @param $param
     * @return mixed
     */
    protected function after($param)
    {
        echo "after calling\n";
    }
}
