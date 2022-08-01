<?php

declare(strict_types=1);

namespace Ticketsprinter\TSLogViewer\Tests\Commands;

use Ticketsprinter\TSLogViewer\Tests\TestCase;

/**
 * Class     StatsCommandTest
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class StatsCommandTest extends TestCase
{
    /* -----------------------------------------------------------------
     |  Tests
     | -----------------------------------------------------------------
     */

    /** @test */
    public function it_can_display_stats(): void
    {
        $this->artisan('log-viewer:stats')
             ->assertExitCode(0);
    }
}
