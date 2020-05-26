<?php

namespace App\Command\Hello;

use Minicli\App;
use Minicli\Command\CommandController;

class CapsController extends CommandController
{
    /** @var  array */
    protected $command_map = [];

    public function boot(App $app)
    {
        parent::boot($app);
        $this->command_map = $app->command_registry->getCommandMap();
    }

    public function handle()
    {
        if (!$this->handleFlags()) {
            return;
        }

        $name = $this->hasParam('user') ? strtoupper($this->getParam('user')) : 'WORLD';
        $this->getPrinter()->display(sprintf("HELLO, %s!", $name));
    }

    public function handleFlags()
    {
        if ($this->hasFlag('--help')) {
            $this->getPrinter()->display("usage: hello caps [user=<name>]");
            return false; // Whether to continue execution of the command.
        }
        return true;
    }
}
