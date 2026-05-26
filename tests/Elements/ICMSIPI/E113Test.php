<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\E113;
use PHPUnit\Framework\TestCase;
use stdClass;

class E113Test extends TestCase
{
    public function testE113WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHV_DOCE = '520604VL1J4ZDW000163550120000007801267301615';

        $element = new E113($std);

        $this->assertEquals('|E113|||||||||520604VL1J4ZDW000163550120000007801267301615|', (string) $element);
    }
}
