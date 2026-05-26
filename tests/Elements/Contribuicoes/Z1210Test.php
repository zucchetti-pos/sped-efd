<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\Z1210;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z1210Test extends TestCase
{
    public function testZ1210WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ = 'VL1J4ZDW000163';
        $std->VL_BC_PIS = 100;
        $std->ALIQ_PIS = 10;
        $std->VL_PIS = 10;

        $element = new Z1210($std);

        $this->assertEquals('|1210|VL1J4ZDW000163|||||100,00|10,0000|10,00|||', (string) $element);
    }
}
