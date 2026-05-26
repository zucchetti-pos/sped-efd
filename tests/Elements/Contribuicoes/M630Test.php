<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\M630;
use PHPUnit\Framework\TestCase;
use stdClass;

class M630Test extends TestCase
{
    public function testM630WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ = 'VL1J4ZDW000163';

        $element = new M630($std);

        $this->assertEquals('|M630|VL1J4ZDW000163||||||', (string) $element);
    }
}
