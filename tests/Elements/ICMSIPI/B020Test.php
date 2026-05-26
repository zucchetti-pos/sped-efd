<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\B020;
use PHPUnit\Framework\TestCase;
use stdClass;

class B020Test extends TestCase
{
    public function testB020WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHV_NFE = '520604VL1J4ZDW000163550120000007801267301615';

        $element = new B020($std);

        $this->assertEquals('|B020||||||||520604VL1J4ZDW000163550120000007801267301615|||||||||||||', (string) $element);
    }
}
