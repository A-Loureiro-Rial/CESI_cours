<?php

use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    public function testHTML()
    {
        Builder::createHTML();
        $this->assertTrue(file_exists("../build/index.html"));
        system("rm ../build/index.html");
    }
}