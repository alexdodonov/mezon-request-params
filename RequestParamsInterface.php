<?php
namespace Mezon\Transport;

/**
 * Interface ServiceRequestParamsInterface
 *
 * @package Service
 * @subpackage ServiceRequestParamsInterface
 * @author Dodonov A.A.
 * @version v.1.0 (2020/05/25)
 * @copyright Copyright (c) 2020, aeon.org
 */

/**
 * Request params fetcher
 */
interface RequestParamsInterface
{

    /**
     * Method returns request parameter
     *
     * @param string $param
     *            parameter name
     * @param mixed $default
     *            default value
     * @return mixed Parameter value
     */
    public function getParam($param, $default = false);
}
