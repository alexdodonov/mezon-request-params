<?php

class ConcreteFetcher extends \Mezon\Transport\RequestParams
{

    public function __construct()
    {
        $router = new \Mezon\Router\Router();

        parent::__construct($router);
    }

    public function getParam($param, $default = false)
    {
        return 1;
    }
}

/**
 *
 * @author Dodonov A.A.
 */
class RequestParamsUnitTest extends \PHPUnit\Framework\TestCase
{

    /**
     * Testing constructor
     */
    public function testConstructor(): void
    {
        $fetcher = new ConcreteFetcher();

        $this->assertEquals(1, $fetcher->getParam('some-param'));
        $this->assertInstanceOf(\Mezon\Router\Router::class, $fetcher->getRouter());
    }
}
