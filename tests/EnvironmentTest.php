<?php


namespace Deployee\Components\Environment;


use PHPUnit\Framework\TestCase;

class EnvironmentTest extends TestCase
{
    public function testEnvironment()
    {
        $env = new Environment('foo', '/tmp/bar');
        $this->assertSame('foo', $env->getName());
        $this->assertSame('/tmp/bar', $env->getWorkDir());
    }
}