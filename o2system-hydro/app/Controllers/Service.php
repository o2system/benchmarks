<?php
/**
 * This file is part of the O2System PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Steeve Andrian Salim
 * @copyright      Copyright (c) Steeve Andrian Salim
 */
// ------------------------------------------------------------------------

namespace App\Controllers;

// ------------------------------------------------------------------------

use O2System\Framework\Http\Controllers\Restful as Controller;

/**
 * Class Service
 *
 * @package App\Controllers
 */
class Service extends Controller
{
    public function index()
    {
        //$this->sendPayload('Hello World');
        exit('Hello World!');
    }
}