<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\Z1610;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z1610Test extends TestCase
{
    public function testZ1610WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ = 'VL1J4ZDW000163';
        $std->VL_BC_COFINS = 100;
        $std->ALIQ_COFINS = 10;
        $std->VL_COFINS = 10;

        $element = new Z1610($std);

        $this->assertEquals('|1610|VL1J4ZDW000163|||||100,00|10,0000|10,00|||', (string) $element);
    }
}
