<?php

namespace NFePHP\EFD\Tests\Elements\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI\G130;
use PHPUnit\Framework\TestCase;
use stdClass;

class G130Test extends TestCase
{
    public function testG130WithAlphanumericCnpj()
    {
        $std = new stdClass();
        $std->CHV_NFE_CTE = '520604VL1J4ZDW000163550120000007801267301615';

        $element = new G130($std);

        $this->assertEquals('|G130||||||520604VL1J4ZDW000163550120000007801267301615|||', (string) $element);
    }
}
