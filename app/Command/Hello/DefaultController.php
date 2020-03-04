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

        //$name = $this->hasParam('user') ? $this->getParam('user') : 'World';
        //$this->getPrinter()->display(sprintf("Hello, %s!", $name));

        $this->getPrinter()->out("81"); sleep(1);
        $this->getPrinter()->out("\r82"); sleep(1);
        $this->getPrinter()->out(sprintf("\r83")); sleep(1);
        $this->getPrinter()->out(sprintf("\r84")); sleep(1);

    }

    public function handleFlags()
    {
        if ($this->hasFlag('--help')) {
            $this->getPrinter()->display("usage: hello [user=<name>]");
            return true; // Whether to continue execution of the command.
        }
        return true;
    }
}
