<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\C800;
use PHPUnit\Framework\TestCase;
use stdClass;

class C800Test extends TestCase
{
    public function testC800WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CNPJ_CPF = 'VL1J4ZDW000163';
        $std->CHV_CFE = '520604VL1J4ZDW000163550120000007801267301615';

        $element = new C800($std);

        $this->assertEquals('|C800||||||||VL1J4ZDW000163||520604VL1J4ZDW000163550120000007801267301615|||||||', (string) $element);
    }
}
