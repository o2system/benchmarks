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

namespace Octopy\Testing;

use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * @var Octopy\Application
     */
    protected $app;

    /**
     * @return Octopy\Application
     */
    abstract public function createApplication();

    /**
     * @return void
     */
    protected function setUp() : void
    {
        if (! $this->app) {
            $this->app = $this->createApplication();
        }
    }

    /**
     * @return void
     */
    public function testAppCreated() : void
    {
        $this->assertInstanceOf(\Octopy\Application::class, $this->app);
    }
}
