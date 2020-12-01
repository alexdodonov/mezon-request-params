<?php
namespace Mezon\Transport\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Router\Router;
use Mezon\Transport\RequestParamsInterface;

class ConcreteFetcher extends \Mezon\Transport\RequestParams
{
    //TODO use MockParamsFetcher instead

    public function __construct()
    {
        $router = new Router();

        parent::__construct($router);
    }

    /**
     * 
     * {@inheritDoc}
     * @see \Mezon\Transport\RequestParamsInterface::getParam()
     */
    public function getParam($param, $default = false)
    {
        return 1;
    }
    
    /**
     *
     * {@inheritDoc}
     * @see RequestParamsInterface::wasSubmitted()
     */
    public function wasSubmitted(string $param): bool
    {
        return $this->getParam($param, false) !== false;
    }
}

/**
 *
 * @author Dodonov A.A.
 */
class RequestParamsUnitTest extends TestCase
{

    /**
     * Testing constructor
     */
    public function testConstructor(): void
    {
        $fetcher = new ConcreteFetcher();

        $this->assertEquals(1, $fetcher->getParam('some-param'));
        $this->assertInstanceOf(Router::class, $fetcher->getRouter());
    }
}
