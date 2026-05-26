<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\Z1100;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z1100Test extends TestCase
{
    public function testZ1100WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ_SUC = 'VL1J4ZDW000163';

        $element = new Z1100($std);

        $this->assertEquals('|1100|||VL1J4ZDW000163|||||||||||||||', (string) $element);
    }
}
