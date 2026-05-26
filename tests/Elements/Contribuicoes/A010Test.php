<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\A010;
use PHPUnit\Framework\TestCase;
use stdClass;

class A010Test extends TestCase
{
    public function testA010WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ = 'VL1J4ZDW000163';

        $element = new A010($std);

        $this->assertEquals('|A010|VL1J4ZDW000163|', (string) $element);
    }
}
