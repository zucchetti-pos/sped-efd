<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\C175;
use PHPUnit\Framework\TestCase;
use stdClass;

class C175Test extends TestCase
{
    public function testC175WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ = 'VL1J4ZDW000163';

        $element = new C175($std);

        $this->assertEquals('|C175||VL1J4ZDW000163|||', (string) $element);
    }
}
