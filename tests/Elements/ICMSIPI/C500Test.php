<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\C500;
use PHPUnit\Framework\TestCase;
use stdClass;

class C500Test extends TestCase
{
    public function testC500WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHV_DOCe = '520604VL1J4ZDW000163550120000007801267301615';
        $std->CHV_DOCe_REF = '520604VL1J4ZDW000163550120000007801267301615';

        $element = new C500($std);

        $this->assertEquals('|C500|||||||||||||||||||||||||||520604VL1J4ZDW000163550120000007801267301615||520604VL1J4ZDW000163550120000007801267301615|||||||||||', (string) $element);
    }
}
