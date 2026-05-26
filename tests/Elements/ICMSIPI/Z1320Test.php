<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\Z1320;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z1320Test extends TestCase
{
    public function testZ1320WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ_INTERV = 'VL1J4ZDW000163';
        $std->VAL_FECHA = 100;
        $std->VAL_ABERT = 10;
        $std->VOL_AFERI = 5;
        $std->VOL_VENDAS = 85;

        $element = new Z1320($std);

        $this->assertEquals('|1320|||||VL1J4ZDW000163||100,000|10,000|5,000|85,000|', (string) $element);
    }
}
