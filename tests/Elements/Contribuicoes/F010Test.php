<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\F010;
use PHPUnit\Framework\TestCase;
use stdClass;

class F010Test extends TestCase
{
    public function testF010WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ = 'VL1J4ZDW000163';

        $element = new F010($std);

        $this->assertEquals('|F010|VL1J4ZDW000163|', (string) $element);
    }
}
