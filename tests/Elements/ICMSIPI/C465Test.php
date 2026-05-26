<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\C465;
use PHPUnit\Framework\TestCase;
use stdClass;

class C465Test extends TestCase
{
    public function testC465WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHV_CFE = '520604VL1J4ZDW000163550120000007801267301615';

        $element = new C465($std);

        $this->assertEquals('|C465|520604VL1J4ZDW000163550120000007801267301615||', (string) $element);
    }
}
