<?php

use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    public function testHTML()
    {
        Builder::createHTML();
        $this->assertTrue(file_exists("hello.html"));
        system("rm hello.html");
    }
}