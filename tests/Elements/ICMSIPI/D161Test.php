<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\D161;
use PHPUnit\Framework\TestCase;
use stdClass;

class D161Test extends TestCase
{
    public function testD161WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ_CPF_COL = 'VL1J4ZDW000163';
        $std->CNPJ_CPF_ENTG = 'VL1J4ZDW000163';

        $element = new D161($std);

        $this->assertEquals('|D161||VL1J4ZDW000163|||VL1J4ZDW000163|||', (string) $element);
    }
}
