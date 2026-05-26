<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\C176;
use PHPUnit\Framework\TestCase;
use stdClass;

class C176Test extends TestCase
{
    public function testC176WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHAVE_NFE_ULT_E = '520604VL1J4ZDW000163550120000007801267301615';
        $std->CHAVE_NFE_RET = '520604VL1J4ZDW000163550120000007801267301615';
        $std->QUANT_ULT_E = 1;
        $std->VL_UNIT_ULT_E = 10;
        $std->VL_UNIT_BC_ST = 100;
        $std->VL_UNIT_BC_ICMS_ULT_E = 80;
        $std->ALIQ_ICMS_ULT_E = 18;
        $std->VL_UNIT_LIMITE_BC_ICMS_ULT_E = 50;
        $std->VL_UNIT_ICMS_ULT_E = 900;
        $std->ALIQ_ST_ULT_E = 10;
        $std->VL_UNIT_RES = 100;

        $element = new C176($std);

        $this->assertEquals('|C176||||||1,000|10,00|100,00|520604VL1J4ZDW000163550120000007801267301615||80,00|18,00|50,00|900,00|10,00|100,00|||520604VL1J4ZDW000163550120000007801267301615||||||||', (string) $element);
    }
}
