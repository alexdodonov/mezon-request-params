<?php
namespace Mezon\Transport\Tests;

use Mezon\Transport\RequestParamsInterface;

/**
 * Mock parameter fetcher
 *
 * @author Dodonov A.A.
 * @group baseTests
 */
class MockParamsFetcher implements RequestParamsInterface
{

    /**
     * Some testing value
     *
     * @var mixed
     */
    protected $value = '';

    /**
     * Constructor
     *
     * @param mixed $value
     *            Value to be set
     */
    public function __construct($value = 'value')
    {
        $this->value = $value;
    }

    /**
     *
     * {@inheritdoc}
     * @see RequestParamsInterface::getParam()
     */
    public function getParam(string $param, $default = false)
    {
        if (isset($_POST[$param])) {
            return $_POST[$param];
        } elseif (isset($_GET[$param])) {
            return $_GET[$param];
        }

        return $this->value;
    }

    /**
     *
     * {@inheritdoc}
     * @see RequestParamsInterface::wasSubmitted()
     */
    public function wasSubmitted(string $param): bool
    {
        return $this->getParam($param, false) !== false;
    }
}
