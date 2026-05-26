<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\M230;
use PHPUnit\Framework\TestCase;
use stdClass;

class M230Test extends TestCase
{
    public function testM230WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ = 'VL1J4ZDW000163';

        $element = new M230($std);

        $this->assertEquals('|M230|VL1J4ZDW000163||||||', (string) $element);
    }
}
