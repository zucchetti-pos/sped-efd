<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\Z1101;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z1101Test extends TestCase
{
    public function testZ1101WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHV_NFE = '520604VL1J4ZDW000163550120000007801267301615';
        $std->CNPJ = 'VL1J4ZDW000163';
        $std->VL_BC_PIS = 100;
        $std->ALIQ_PIS = 10;
        $std->VL_PIS = 10;

        $element = new Z1101($std);

        $this->assertEquals('|1101||||||||520604VL1J4ZDW000163550120000007801267301615||||||100,00|10,0000|10,00|||||VL1J4ZDW000163|', (string) $element);
    }
}
