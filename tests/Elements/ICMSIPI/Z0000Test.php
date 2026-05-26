<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\Z0000;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z0000Test extends TestCase
{
    public function testZ0000WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->cnpj = 'VL1J4ZDW000163';

        $element = new Z0000($std);

        $this->assertEquals('|0000||||||VL1J4ZDW000163|||||||||', (string) $element);
    }
}
