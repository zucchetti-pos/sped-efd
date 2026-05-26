<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\Z0035;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z0035Test extends TestCase
{
    public function testZ0035WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->COD_SCP = 'VL1J4ZDW000163';

        $element = new Z0035($std);

        $this->assertEquals('|0035|VL1J4ZDW000163|||', (string) $element);
    }
}
