<?php
namespace Mezon\Transport;

use Mezon\Router\Router;

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
abstract class RequestParams implements RequestParamsInterface
{

    /**
     * Router of the transport
     *
     * @var \Mezon\Router\Router
     */
    private $router = null;

    /**
     * Constructor
     *
     * @param Router $router
     *            Router object
     */
    public function __construct(Router &$router)
    {
        $this->router = $router;
    }

    /**
     * Method returns router
     *
     * @return Router
     */
    public function getRouter(): ?Router
    {
        return $this->router;
    }
    
    
}
