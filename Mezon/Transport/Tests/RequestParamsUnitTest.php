<?php
namespace Mezon\Transport\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Router\Router;

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
        $fetcher = new MockParamsFetcher();

        $this->assertEquals(1, $fetcher->getParam('some-param'));
        $this->assertInstanceOf(Router::class, $fetcher->getRouter());
    }
}
