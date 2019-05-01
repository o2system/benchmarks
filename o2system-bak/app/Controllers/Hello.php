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

use O2System\Framework\Http\Controller;

/**
 * Class Hello
 *
 * @package App\Controllers
 */
class Hello extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        echo 'Hello World!';
        require $_SERVER['DOCUMENT_ROOT'].'/benchmarks/libs/output_data.php';
        exit();
    }
}