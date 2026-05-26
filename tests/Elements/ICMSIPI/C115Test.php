<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\C115;
use PHPUnit\Framework\TestCase;
use stdClass;

class C115Test extends TestCase
{
    public function testC115WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ_COL = 'VL1J4ZDW000163';
        $std->CNPJ_ENTG = 'VL1J4ZDW000163';

        $element = new C115($std);

        $this->assertEquals('|C115||VL1J4ZDW000163||||VL1J4ZDW000163||||', (string) $element);
    }
}
