<?php

namespace App\Command\Hello;

use Minicli\App;
use Minicli\Command\CommandController;

class DefaultController extends CommandController
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
