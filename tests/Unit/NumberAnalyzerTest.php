<?php

namespace Connor\PhoneNumbers\Tests\Unit;

use Connor\PhoneNumbers\NumberAnalyzer;
use PHPUnit\Framework\TestCase;

class NumberAnalyzerTest extends TestCase
{
    public function testAnalyze(): void
    {
        $analyzer = new NumberAnalyzer();

        $info = $analyzer->analyze('003630123456789');
        $this->assertSame('HU', $info->country);
        $info = $analyzer->analyze('+3630123456789');
        $this->assertSame('HU', $info->country);

        $info = $analyzer->analyze('+1242123456789');
        $this->assertSame('BS', $info->country);
        $info = $analyzer->analyze('+1000000000000');
        $this->assertSame('US', $info->country);
        $info = $analyzer->analyze('+350123456789');
        $this->assertSame('GI', $info->country);
    }
}
