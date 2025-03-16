<?php

namespace Connor\PhoneNumbers\Tests\Unit;

use Connor\PhoneNumbers\Helper;
use PHPUnit\Framework\TestCase;

class HelperTest extends TestCase
{
    public function testCleanup()
    {
        $this->assertSame('003630', Helper::cleanup('0036+30'));
        $this->assertSame('003630', Helper::cleanup('  0036+30  '));
        $this->assertSame('+3630', Helper::cleanup('  +36+30--()...'));
    }
}
