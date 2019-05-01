<?php

/**
 *   ___       _
 *  / _ \  ___| |_ ___  _ __  _   _
 * | | | |/ __| __/ _ \| '_ \| | | |
 * | |_| | (__| || (_) | |_) | |_| |
 *  \___/ \___|\__\___/| .__/ \__, |
 *                     |_|    |___/.
 * @author  : Supian M <supianidz@gmail.com>
 * @link    : www.octopy.xyz
 * @license : MIT
 */

namespace Tests;

use Octopy\Container;
use Octopy\HTTP\Kernel;

trait CreateApplication
{
    /**
     * @return Octopy\Application
     */
    public function createApplication()
    {
        $app = Container::make('app');

        $app->make(Kernel::class);

        return $app;
    }
}
