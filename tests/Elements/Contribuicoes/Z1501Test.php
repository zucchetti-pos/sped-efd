<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\Z1501;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z1501Test extends TestCase
{
    public function testZ1501WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHV_NFE = '520604VL1J4ZDW000163550120000007801267301615';
        $std->CNPJ = 'VL1J4ZDW000163';
        $std->VL_BC_COFINS = 100;
        $std->ALIQ_COFINS = 10;
        $std->VL_COFINS = 10;

        $element = new Z1501($std);

        $this->assertEquals('|1501||||||||520604VL1J4ZDW000163550120000007801267301615||||||100,00|10,0000|10,00|||||VL1J4ZDW000163|', (string) $element);
    }
}
