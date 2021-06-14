<?php
namespace Fgsl\Test\Response;

use PHPUnit\Framework\TestCase;
use Fgsl\Response\JsonResponseCors;

/**
 *  test case.
 */
class ResponseTest extends TestCase
{
    public function testInstance()
    {
        $response = new JsonResponseCors([]);
        $this->assertIsObject($response);
    }    
}