<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\E531;
use PHPUnit\Framework\TestCase;
use stdClass;

class E531Test extends TestCase
{
    public function testE531WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHV_NFE = '520604VL1J4ZDW000163550120000007801267301615';

        $element = new E531($std);

        $this->assertEquals('|E531|||||||||520604VL1J4ZDW000163550120000007801267301615|', (string) $element);
    }
}
