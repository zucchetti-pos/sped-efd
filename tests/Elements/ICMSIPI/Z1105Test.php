<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\Z1105;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z1105Test extends TestCase
{
    public function testZ1105WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHV_NFE = '520604VL1J4ZDW000163550120000007801267301615';

        $element = new Z1105($std);

        $this->assertEquals('|1105||||520604VL1J4ZDW000163550120000007801267301615|||', (string) $element);
    }
}
