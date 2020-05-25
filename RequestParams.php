<?php
namespace Mezon\Transport;

/**
 * Interface RequestParamsInterface
 *
 * @package Transport
 * @subpackage RequestParamsInterface
 * @author Dodonov A.A.
 * @version v.1.0 (2020/05/25)
 * @copyright Copyright (c) 2020, aeon.org
 */

/**
 * Request params fetcher
 */
abstract class RequestParams implements \Mezon\Transport\RequestParamsInterface
{

    /**
     * Router of the transport
     *
     * @var \Mezon\Router\Router
     */
    private $router = false;

    /**
     * Constructor
     *
     * @param \Mezon\Router\Router $router
     *            Router object
     */
    public function __construct(\Mezon\Router\Router &$router)
    {
        $this->router = $router;
    }

    /**
     * Method returns router
     *
     * @return \Mezon\Router\Router
     */
    public function getRouter(): \Mezon\Router\Router
    {
        return $this->router;
    }
}
