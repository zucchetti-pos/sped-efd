<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\C350;
use PHPUnit\Framework\TestCase;
use stdClass;

class C350Test extends TestCase
{
    public function testC350WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ_CPF = 'VL1J4ZDW000163';

        $element = new C350($std);

        $this->assertEquals('|C350|||||VL1J4ZDW000163|||||||', (string) $element);
    }
}
