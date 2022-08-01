<?php

use Ticketsprinter\TSLogViewer\Contracts;

if ( ! function_exists('log_viewer')) {
    /**
     * Get the LogViewer instance.
     *
     * @return Ticketsprinter\TSLogViewer\Contracts\LogViewer
     */
    function log_viewer()
    {
        return app(Contracts\LogViewer::class);
    }
}

if ( ! function_exists('log_levels')) {
    /**
     * Get the LogLevels instance.
     *
     * @return Ticketsprinter\TSLogViewer\Contracts\Utilities\LogLevels
     */
    function log_levels()
    {
        return app(Contracts\Utilities\LogLevels::class);
    }
}

if ( ! function_exists('log_menu')) {
    /**
     * Get the LogMenu instance.
     *
     * @return Ticketsprinter\TSLogViewer\Contracts\Utilities\LogMenu
     */
    function log_menu()
    {
        return app(Contracts\Utilities\LogMenu::class);
    }
}

if ( ! function_exists('log_styler')) {
    /**
     * Get the LogStyler instance.
     *
     * @return Ticketsprinter\TSLogViewer\Contracts\Utilities\LogStyler
     */
    function log_styler()
    {
        return app(Contracts\Utilities\LogStyler::class);
    }
}
