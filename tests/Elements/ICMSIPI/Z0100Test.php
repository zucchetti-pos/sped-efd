<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\Z0100;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z0100Test extends TestCase
{
    public function testZ0100WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ = 'VL1J4ZDW000163';

        $element = new Z0100($std);

        $this->assertEquals('|0100||||VL1J4ZDW000163||||||||||', (string) $element);
    }
}
