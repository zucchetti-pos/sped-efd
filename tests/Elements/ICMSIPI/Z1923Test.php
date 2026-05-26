<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\Z1923;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z1923Test extends TestCase
{
    public function testZ1923WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHV_DOCE = '520604VL1J4ZDW000163550120000007801267301615';

        $element = new Z1923($std);

        $this->assertEquals('|1923|||||||||520604VL1J4ZDW000163550120000007801267301615|', (string) $element);
    }
}
