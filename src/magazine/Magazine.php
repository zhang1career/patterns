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
    protected pre_call;
    protected wrap_call;
    protected post_call;

    /**
     * constructor
     */
    public function __construct()
    {
        $methods = get_class_methods($this);

        forEach ($methods as $method) {
            if ($method != '__construct') {
                $this->{$method}();
//                pre_call();
//                wrap_call($this->{$method}());
//                post_call();
            }
        }
    }
}
