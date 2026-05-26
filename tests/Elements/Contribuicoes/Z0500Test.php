<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\Z0500;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z0500Test extends TestCase
{
    public function testZ0500WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ_EST = 'VL1J4ZDW000163';

        $element = new Z0500($std);

        $this->assertEquals('|0500||||||||VL1J4ZDW000163|', (string) $element);
    }
}
