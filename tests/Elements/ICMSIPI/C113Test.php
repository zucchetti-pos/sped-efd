<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\C113;
use PHPUnit\Framework\TestCase;
use stdClass;

class C113Test extends TestCase
{
    public function testC113WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHV_DOCE = '520604VL1J4ZDW000163550120000007801267301615';

        $element = new C113($std);

        $this->assertEquals('|C113|||||||||520604VL1J4ZDW000163550120000007801267301615|', (string) $element);
    }
}
