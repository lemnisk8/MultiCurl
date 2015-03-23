<?php

namespace BluePsyduckTests\MultiCurl\Entity;

use BluePsyduck\MultiCurl\Entity\Request;
use BluePsyduckTests\MultiCurl\Assets\TestCase;

/**
 * The PHPUnit test of the request entity.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-2.0 GPL v2
 */
class RequestTest extends TestCase {
    /**
     * Tests the setMethod() method.
     * @covers \BluePsyduck\MultiCurl\Entity\Request::setMethod
     */
    public function testSetMethod() {
        $expected = 'abc';
        $request = new Request();
        $result = $request->setMethod($expected);
        $this->assertEquals($request, $result);
        $this->assertPropertyEquals($expected, $request, 'method');
    }
    
    /**
     * Tests the getMethod() method.
     * @covers \BluePsyduck\MultiCurl\Entity\Request::getMethod
     */
    public function testGetMethod() {
        $expected = 'abc';
        $request = new Request();
        $this->injectProperty($request, 'method', $expected);
        $result = $request->getMethod();
        $this->assertEquals($expected, $result);
    }
    
    /**
     * Tests the setUrl() method.
     * @covers \BluePsyduck\MultiCurl\Entity\Request::setUrl
     */
    public function testSetUrl() {
        $expected = 'abc';
        $request = new Request();
        $result = $request->setUrl($expected);
        $this->assertEquals($request, $result);
        $this->assertPropertyEquals($expected, $request, 'url');
    }
    
    /**
     * Tests the getUrl() method.
     * @covers \BluePsyduck\MultiCurl\Entity\Request::getUrl
     */
    public function testGetUrl() {
        $expected = 'abc';
        $request = new Request();
        $this->injectProperty($request, 'url', $expected);
        $result = $request->getUrl();
        $this->assertEquals($expected, $result);
    }

    /**
     * Provides the data for the setRequestData() test.
     * @return array The data.
     */
    public function provideSetRequestData() {
        return array(
            array('abc=def&ghi=jkl', 'abc=def&ghi=jkl'),
            array(array('abc' => 'def', 'ghi' => 'jkl') , 'abc=def&ghi=jkl')
        );
    }

    /**
     * Tests the setRequestData() method.
     * @param string|array $requestData The request data to set.
     * @param string $expectedRequestData The expected request data.
     * @covers \BluePsyduck\MultiCurl\Entity\Request::setRequestData
     * @dataProvider provideSetRequestData
     */
    public function testSetRequestData($requestData, $expectedRequestData) {
        $request = new Request();
        $result = $request->setRequestData($requestData);
        $this->assertEquals($request, $result);
        $this->assertPropertyEquals($expectedRequestData, $request, 'requestData');
    }
    
    /**
     * Tests the getRequestData() method.
     * @covers \BluePsyduck\MultiCurl\Entity\Request::getRequestData
     */
    public function testGetRequestData() {
        $expected = 'abc=def&ghi=jkl';
        $request = new Request();
        $this->injectProperty($request, 'requestData', $expected);
        $result = $request->getRequestData();
        $this->assertEquals($expected, $result);
    }
    
    /**
     * Tests the setHeaders() method.
     * @covers \BluePsyduck\MultiCurl\Entity\Request::setHeaders
     */
    public function testSetHeaders() {
        $expected = array('abc' => 'def', 'ghi' => 'jkl');
        $request = new Request();
        $result = $request->setHeaders($expected);
        $this->assertEquals($request, $result);
        $this->assertPropertyEquals($expected, $request, 'headers');
    }
    
    /**
     * Tests the getHeaders() method.
     * @covers \BluePsyduck\MultiCurl\Entity\Request::getHeaders
     */
    public function testGetHeaders() {
        $expected = array('abc' => 'def', 'ghi' => 'jkl');
        $request = new Request();
        $this->injectProperty($request, 'headers', $expected);
        $result = $request->getHeaders();
        $this->assertEquals($expected, $result);
    }
    
    /**
     * Tests the setTimeout() method.
     * @covers \BluePsyduck\MultiCurl\Entity\Request::setTimeout
     */
    public function testSetTimeout() {
        $expected = 42;
        $request = new Request();
        $result = $request->setTimeout($expected);
        $this->assertEquals($request, $result);
        $this->assertPropertyEquals($expected, $request, 'timeout');
    }
    
    /**
     * Tests the getTimeout() method.
     * @covers \BluePsyduck\MultiCurl\Entity\Request::getTimeout
     */
    public function testGetTimeout() {
        $expected = 42;
        $request = new Request();
        $this->injectProperty($request, 'timeout', $expected);
        $result = $request->getTimeout();
        $this->assertEquals($expected, $result);
    }
}
