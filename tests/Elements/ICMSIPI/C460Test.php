<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\C460;
use PHPUnit\Framework\TestCase;
use stdClass;

class C460Test extends TestCase
{
    public function testC460WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CPF_CNPJ = 'VL1J4ZDW000163';

        $element = new C460($std);

        $this->assertEquals('|C460||||||||VL1J4ZDW000163||', (string) $element);
    }
}
