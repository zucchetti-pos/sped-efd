<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\Z0140;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z0140Test extends TestCase
{
    public function testZ0140WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ = 'VL1J4ZDW000163';

        $element = new Z0140($std);

        $this->assertEquals('|0140|||VL1J4ZDW000163||||||', (string) $element);
    }
}
