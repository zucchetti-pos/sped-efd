<?php

namespace NFePHP\EFD\Tests\Elements\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes\C100;
use PHPUnit\Framework\TestCase;
use stdClass;

class C100Test extends TestCase
{
    public function testC100WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHV_NFE = '520604VL1J4ZDW000163550120000007801267301615';

        $element = new C100($std);

        $this->assertEquals('|C100||||||||520604VL1J4ZDW000163550120000007801267301615|||||||||||||||||||||', (string) $element);
    }
}
