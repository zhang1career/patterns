<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 12/09/2017
 * Time: 5:03 PM
 */

namespace phplab\patterns\recursion;

class Trampoline extends Base
{
    /** @var $result, 功能方法，实现本质功能 */
    private $result;
    /** @var $iterator, 迭代方法，更新环境变量和参数 */
    private $iterator;
    /** @var $bottom, 条件方法，判断递归是否已经触底 */
    private $bottom;

    /**
     * 配置功能方法、迭代方法、触底条件等方法
     * Trampoline constructor.
     * @param $result
     * @param $iterator
     * @param $bottom
     */
    public function __construct($result, $iterator, $bottom)
    {
        $this->result = $result;
        $this->iterator = $iterator;
        $this->bottom = $bottom;
    }

    /**
     * 执行
     * @param $context
     * @return mixed
     */
    public function run($context)
    {
        return $this->launcher(['Trampoline', 'recursor'], $context);
    }

    /**
     * 启动递归方法
     * @param $c
     * @param array ...$args
     * @return mixed
     */
    protected function launcher($c, ...$args)
    {
        while (is_callable($c)) {
            $c = $c(...$args);
        }

        return $c;
    }

    /**
     * 递归方法
     * @param $context
     * @param null $param
     * @return \Closure|mixed
     */
    protected function recursor($context, $param = null)
    {
        var_dump($context);die();
        if (call_user_func($this->bottom, $context)) {
            return call_user_func($this->result, $context);
        }

        return function () use ($context, $param) {
            list($context, $param) = call_user_func($this->iterator, $context, $param);
            return $this->recursor($context, $param);
        };
    }
}
