<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\Z0000;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z0000Test extends TestCase
{
    public function testZ0000WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ = 'VL1J4ZDW000163';

        $element = new Z0000($std);

        $this->assertEquals('|0000||||||||VL1J4ZDW000163||||||', (string) $element);
    }
}
