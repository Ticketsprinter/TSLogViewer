<?php

declare(strict_types=1);

namespace Ticketsprinter\TSLogViewer\Tests\Utilities;

use Ticketsprinter\TSLogViewer\Tests\TestCase;
use Ticketsprinter\TSLogViewer\Utilities\LogMenu;

/**
 * Class     LogMenuTest
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class LogMenuTest extends TestCase
{
    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    /** @var  \Ticketsprinter\TSLogViewer\Utilities\LogMenu */
    private $menu;

    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    protected function setUp(): void
    {
        parent::setUp();

        $this->menu = $this->app->make(\Ticketsprinter\TSLogViewer\Contracts\Utilities\LogMenu::class);
    }

    protected function tearDown(): void
    {
        unset($this->menu);

        parent::tearDown();
    }

    /* -----------------------------------------------------------------
     |  Tests
     | -----------------------------------------------------------------
     */

    /** @test */
    public function it_can_be_instantiated(): void
    {
        static::assertInstanceOf(LogMenu::class, $this->menu);
    }

    /** @test */
    public function it_can_make_menu_with_helper(): void
    {
        $log = $this->getLog('2015-01-01');

        $expected = [
            'all'       => [
                'name'  => 'All',
                'count' => 8,
                'url'   => 'http://localhost/log-viewer/logs/2015-01-01/all',
                'icon'  => '<i class="fa fa-fw fa-list"></i>',
            ],
            'emergency' => [
                'name'  => 'Emergency',
                'count' => 1,
                'url'   => 'http://localhost/log-viewer/logs/2015-01-01/emergency',
                'icon'  => '<i class="fa fa-fw fa-bug"></i>',
            ],
            'alert'     => [
                'name'  => 'Alert',
                'count' => 1,
                'url'   => 'http://localhost/log-viewer/logs/2015-01-01/alert',
                'icon'  => '<i class="fa fa-fw fa-bullhorn"></i>',
            ],
            'critical'  => [
                'name'  => 'Critical',
                'count' => 1,
                'url'   => 'http://localhost/log-viewer/logs/2015-01-01/critical',
                'icon'  => '<i class="fa fa-fw fa-heartbeat"></i>',
            ],
            'error'     => [
                'name'  => 'Error',
                'count' => 1,
                'url'   => 'http://localhost/log-viewer/logs/2015-01-01/error',
                'icon'  => '<i class="fa fa-fw fa-times-circle"></i>',
            ],
            'warning'   => [
                'name'  => 'Warning',
                'count' => 1,
                'url'   => 'http://localhost/log-viewer/logs/2015-01-01/warning',
                'icon'  => '<i class="fa fa-fw fa-exclamation-triangle"></i>',
            ],
            'notice'    => [
                'name'  => 'Notice',
                'count' => 1,
                'url'   => 'http://localhost/log-viewer/logs/2015-01-01/notice',
                'icon'  => '<i class="fa fa-fw fa-exclamation-circle"></i>',
            ],
            'info'      => [
                'name'  => 'Info',
                'count' => 1,
                'url'   => 'http://localhost/log-viewer/logs/2015-01-01/info',
                'icon'  => '<i class="fa fa-fw fa-info-circle"></i>',
            ],
            'debug'     => [
                'name' => 'Debug',
                'count' => 1,
                'url'   => 'http://localhost/log-viewer/logs/2015-01-01/debug',
                'icon'  => '<i class="fa fa-fw fa-life-ring"></i>',
            ],
        ];

        static::assertSame($expected, $menu = log_menu()->make($log));
    }
}
