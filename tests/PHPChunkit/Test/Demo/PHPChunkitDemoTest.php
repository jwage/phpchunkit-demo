<?php

namespace PHPChunkit\Test\Demo;

use PHPChunkit\Demo\PHPChunkitDemo;
use PHPUnit_Framework_TestCase;

class PHPChunkitDemoTest extends PHPUnit_Framework_TestCase
{
    public function testPHPChunkitDemo()
    {
        $demo = new PHPChunkitDemo();

        $this->assertTrue($demo->testMethod());
    }

    public function testUnit1()
    {
        $this->assertTrue(true);
    }

    public function testUnit2()
    {
        $this->assertTrue(true);
    }

    public function testUnit3()
    {
        $this->assertTrue(true);
    }

    public function testUnit4()
    {
        $this->assertTrue(true);
    }
}
