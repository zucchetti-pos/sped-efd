<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\D180;
use PHPUnit\Framework\TestCase;
use stdClass;

class D180Test extends TestCase
{
    public function testD180WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ_CPF_EMIT = 'VL1J4ZDW000163';
        $std->CNPJ_CPF_TOM = 'VL1J4ZDW000163';

        $element = new D180($std);

        $this->assertEquals('|D180|||VL1J4ZDW000163||||VL1J4ZDW000163||||||||||', (string) $element);
    }
}
