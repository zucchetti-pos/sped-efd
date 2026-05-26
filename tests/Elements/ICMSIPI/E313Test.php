<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\E313;
use PHPUnit\Framework\TestCase;
use stdClass;

class E313Test extends TestCase
{
    public function testE313WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHV_DOCE = '520604VL1J4ZDW000163550120000007801267301615';
        $std->VL_AJ_ITEM = 1;

        $element = new E313($std);

        $this->assertEquals('|E313||||||||1,00|520604VL1J4ZDW000163550120000007801267301615|', (string) $element);
    }
}
