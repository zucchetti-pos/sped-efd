<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\D160;
use PHPUnit\Framework\TestCase;
use stdClass;

class D160Test extends TestCase
{
    public function testD160WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ_CPF_REM = 'VL1J4ZDW000163';
        $std->CNPJ_CPF_DEST = 'VL1J4ZDW000163';

        $element = new D160($std);

        $this->assertEquals('|D160||VL1J4ZDW000163|||VL1J4ZDW000163|||', (string) $element);
    }
}
