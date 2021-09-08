<?php
namespace Mezon\Transport\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Router\Router;

/**
 *
 * @author Dodonov A.A.
 * @psalm-suppress PropertyNotSetInConstructor
 */
class RequestParamsUnitTest extends TestCase
{

    /**
     * Testing constructor
     */
    public function testConstructor(): void
    {
        // setup
        $router = new Router();
        $fetcher = new RequestParamsTest($router);

        // test body
        $newRouter = $fetcher->getRouter();

        // assertions
        $this->assertInstanceOf(Router::class, $newRouter);
        $this->assertEquals($router, $newRouter);
    }

    /**
     * Testing that param was submitted
     */
    public function testWasSubmitted(): void
    {
        // setup
        $router = new Router();
        $fetcher = new RequestParamsTest($router);
        $_GET['param'] = 1;

        // test body
        $value = $fetcher->wasSubmitted('param');

        // assertions
        $this->assertTrue($value);
    }

    /**
     * Testing that param was not submitted
     */
    public function testWasNotSubmitted(): void
    {
        // setup
        $router = new Router();
        $fetcher = new RequestParamsTest($router);
        unset($_GET['param']);

        // test body
        $value = $fetcher->wasSubmitted('param');

        // assertions
        $this->assertFalse($value);
    }
}
