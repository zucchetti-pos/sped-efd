<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\Z1500;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z1500Test extends TestCase
{
    public function testZ1500WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ_SUC = 'VL1J4ZDW000163';

        $element = new Z1500($std);

        $this->assertEquals('|1500|||VL1J4ZDW000163|||||||||||||||', (string) $element);
    }
}
