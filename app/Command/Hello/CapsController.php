<?php

namespace App\Command\Hello;

//use Minicli\Command\CommandController;
use App\Command\Hello\DefaultController;

class CapsController extends DefaultController
{
    public function handle()
    {
        if (!$this->handleFlags()) {
            return;
        }

        $name = $this->hasParam('user') ? strtoupper($this->getParam('user')) : 'WORLD';
        $this->getPrinter()->display(sprintf("HELLO, %s!", $name));
    }
}
