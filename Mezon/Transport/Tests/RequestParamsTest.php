<?php
namespace Mezon\Transport\Tests;

use Mezon\Transport\RequestParams;

class RequestParamsTest extends RequestParams
{

    /**
     *
     * {@inheritdoc}
     * @see \Mezon\Transport\RequestParamsInterface::getParam()
     */
    public function getParam(string $param, $default = false)
    {
        if (isset($_GET[$param])) {
            return $_GET[$param];
        }

        return $default;
    }
}
