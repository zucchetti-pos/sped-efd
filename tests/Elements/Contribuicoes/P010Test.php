<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\P010;
use PHPUnit\Framework\TestCase;
use stdClass;

class P010Test extends TestCase
{
    public function testP010WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ = 'VL1J4ZDW000163';

        $element = new P010($std);

        $this->assertEquals('|P010|VL1J4ZDW000163|', (string) $element);
    }
}
