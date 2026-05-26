<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\C195;
use PHPUnit\Framework\TestCase;
use stdClass;

class C195Test extends TestCase
{
    public function testC195WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ_CPF_PART = 'VL1J4ZDW000163';
        $std->VL_BC_COFINS = 100;
        $std->ALIQ_COFINS = 10;
        $std->QUANT_BC_COFINS = 0;
        $std->VL_COFINS = 1000;

        $element = new C195($std);

        $this->assertEquals('|C195|VL1J4ZDW000163|||||100,00|10,0000|0,000||1000,00||', (string) $element);
    }
}
