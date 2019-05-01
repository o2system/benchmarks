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

namespace Octopy\Bootstrap;

use Octopy\Application;

class RegisterServiceProvider
{
    /**
     * @param Application $app
     */
    public function bootstrap(Application $app)
    {
        $array = $app->config->get('app', []);

        usort($array['provider'], function ($provider) {
            return substr($provider, 0, 3) === 'App';
        });

        foreach ($array['provider'] as $provider) {
            $app->register($provider, true);
        }

        // Register class aliases
        $app['autoload']->aliases($array['aliases'] ?? []);
    }
}
