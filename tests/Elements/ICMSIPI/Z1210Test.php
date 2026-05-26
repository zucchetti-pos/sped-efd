<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\Z1210;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z1210Test extends TestCase
{
    public function testZ1210WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHV_DOCE = '520604VL1J4ZDW000163550120000007801267301615';
        $std->VL_CRED_UTIL = 1;

        $element = new Z1210($std);

        $this->assertEquals('|1210|||1,00|520604VL1J4ZDW000163550120000007801267301615|', (string) $element);
    }
}
