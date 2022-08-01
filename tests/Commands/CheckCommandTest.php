<?php

declare(strict_types=1);

namespace Ticketsprinter\TSLogViewer\Tests\Commands;

use Ticketsprinter\TSLogViewer\Tests\TestCase;

/**
 * Class     CheckCommandTest
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class CheckCommandTest extends TestCase
{
    /* -----------------------------------------------------------------
     |  Tests
     | -----------------------------------------------------------------
     */

    /** @test */
    public function it_can_check(): void
    {
        $this->artisan('log-viewer:check')
             ->assertExitCode(0);
    }
}
