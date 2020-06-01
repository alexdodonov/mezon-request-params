<?php
namespace Mezon\Transport\Tests;

/**
 * Mock parameter fetcher
 *
 * @author Dodonov A.A.
 * @group baseTests
 */
class MockParamsFetcher implements \Mezon\Transport\RequestParamsInterface
{

    /**
     * Some testing value
     *
     * @var string
     */
    protected $value = false;

    /**
     * Constructor
     *
     * @param string $value
     *            Value to be set
     */
    public function __construct($value = 'value')
    {
        $this->value = $value;
    }

    /**
     * Method returns request parameter
     *
     * @param string $param
     *            parameter name
     * @param mixed $default
     *            default value
     * @return mixed Parameter value
     */
    public function getParam($param, $default = false)
    {
        if (isset($_POST[$param])) {
            return $_POST[$param];
        } elseif (isset($_GET[$param])) {
            return $_GET[$param];
        }

        return $this->value;
    }
}
