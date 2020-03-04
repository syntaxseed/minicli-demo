<?php

namespace App\Command\Hello;

use Minicli\Command\CommandController;

class DefaultController extends CommandController
{
    public function handle()
    {
        if (!$this->handleFlags()) {
            return;
        }

        $name = $this->hasParam('user') ? $this->getParam('user') : 'World';
        $this->getPrinter()->display(sprintf("Hello, %s!", $name));
    }

    public function handleFlags()
    {
        if ($this->hasFlag('--help')) {
            $this->getPrinter()->display("usage: hello [user=<name>]");
            return false; // Whether to continue execution of the command.
        }
        return true;
    }
}
