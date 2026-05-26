<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\Z1900;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z1900Test extends TestCase
{
    public function testZ1900WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ = 'VL1J4ZDW000163';

        $element = new Z1900($std);

        $this->assertEquals('|1900|VL1J4ZDW000163||||||||||||', (string) $element);
    }
}
