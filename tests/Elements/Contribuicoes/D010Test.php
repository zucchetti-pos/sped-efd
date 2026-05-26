<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\D010;
use PHPUnit\Framework\TestCase;
use stdClass;

class D010Test extends TestCase
{
    public function testD010WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ = 'VL1J4ZDW000163';

        $element = new D010($std);

        $this->assertEquals('|D010|VL1J4ZDW000163|', (string) $element);
    }
}
