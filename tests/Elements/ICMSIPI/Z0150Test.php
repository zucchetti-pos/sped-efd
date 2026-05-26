<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\Z0150;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z0150Test extends TestCase
{
    public function testZ0150WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ = 'VL1J4ZDW000163';

        $element = new Z0150($std);

        $this->assertEquals('|0150||||VL1J4ZDW000163|||||||||', (string) $element);
    }
}
