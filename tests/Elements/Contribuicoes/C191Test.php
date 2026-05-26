<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\C191;
use PHPUnit\Framework\TestCase;
use stdClass;

class C191Test extends TestCase
{
    public function testC191WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ_CPF_PART = 'VL1J4ZDW000163';

        $element = new C191($std);

        $this->assertEquals('|C191|VL1J4ZDW000163|||||||||||', (string) $element);
    }
}
