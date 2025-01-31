<?php

namespace PatroAPI\Test;

use PHPUnit\Framework\TestCase;

/**
 * @covers NepaliCalendar::
 */
class PatroAPITest extends TestCase
{
    private $Cal;

    protected function setUp(): void
    {
        $this->Cal = new \PatroAPI\NepaliCalendar();
    }


    public function testTwoDateConversions(): void
    {
        $this->assertSame(
            $this->Cal->eng_to_nep(2008,11,23), 
            ['year' => 2065, 'month' => 8, 'date' => 8, 'day' => 'Sunday', 'nmonth' => 'Mangshir', 'num_day' => 1]
        );
        $this->assertSame(
            $this->Cal->nep_to_eng(2065,8,8), 
            ['year' => 2008, 'month' => 11, 'date' => 23, 'day' => 'Sunday', 'emonth' => 'November', 'num_day' => 1]
        );
    }

    protected function tearDown(): void
    {
        $this->Cal = null;
    }
}
