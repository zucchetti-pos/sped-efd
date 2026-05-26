<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\D100;
use PHPUnit\Framework\TestCase;
use stdClass;

class D100Test extends TestCase
{
    public function testD100WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHV_CTE = '520604VL1J4ZDW000163550120000007801267301615';
        $std->CHV_CTE_REF = '520604VL1J4ZDW000163550120000007801267301615';

        $element = new D100($std);

        $this->assertEquals('|D100|||||||||520604VL1J4ZDW000163550120000007801267301615||||520604VL1J4ZDW000163550120000007801267301615||||||||||||', (string) $element);
    }
}
