<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\C116;
use PHPUnit\Framework\TestCase;
use stdClass;

class C116Test extends TestCase
{
    public function testC116WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHV_CFE = '520604VL1J4ZDW000163550120000007801267301615';

        $element = new C116($std);

        $this->assertEquals('|C116|||520604VL1J4ZDW000163550120000007801267301615|||', (string) $element);
    }
}
