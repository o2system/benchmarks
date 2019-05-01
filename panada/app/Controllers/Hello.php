<?php
namespace Controllers;
use Resources, Models;

class Hello extends Resources\Controller
{
    public function index()
    {
        return echo 'Hello world!';

    }
}
