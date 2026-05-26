<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\Z1110;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z1110Test extends TestCase
{
    public function testZ1110WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHV_NFE = '520604VL1J4ZDW000163550120000007801267301615';

        $element = new Z1110($std);

        $this->assertEquals('|1110||||||520604VL1J4ZDW000163550120000007801267301615||||', (string) $element);
    }
}
