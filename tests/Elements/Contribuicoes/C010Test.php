<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\C010;
use PHPUnit\Framework\TestCase;
use stdClass;

class C010Test extends TestCase
{
    public function testC010WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ = 'VL1J4ZDW000163';

        $element = new C010($std);

        $this->assertEquals('|C010|VL1J4ZDW000163||', (string) $element);
    }
}
