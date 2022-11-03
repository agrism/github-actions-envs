<?php

namespace Tests\Unit;

use Agrism\GithubActionsEnvs\MultiplierByTwo;
use PHPUnit\Framework\TestCase;

final class MultiplierByTwoTest extends TestCase
{
    public function testSuccess(): void
    {
        $this->assertEquals(8, (new MultiplierByTwo(4))->result());
    }
}