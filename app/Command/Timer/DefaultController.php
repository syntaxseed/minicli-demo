<?php

namespace App\Command\Timer;

use Minicli\Command\CommandController;

class DefaultController extends CommandController
{
    public function handle()
    {
        if (!$this->handleFlags()) {
            return;
        }

        $seconds = 10;

        if($this->hasParam('seconds')){
            $seconds = intval($this->getParam('seconds'));
            if ($seconds < 1) {
                $this->getPrinter()->error("Seconds value must be a positive integer.");
                $this->getPrinter()->newline();
                return;
            }
        }

        $this->getPrinter()->out("00  ");

        for($i = 0; $i <= $seconds; $i++){
            sleep(1);
            $this->getPrinter()->out(sprintf("\r%02d  ", $i));
        }

        $this->getPrinter()->newline();
    }

    public function handleFlags()
    {
        if ($this->hasFlag('--help')) {
            $this->getPrinter()->display("usage: timer [seconds=<number>]");
            return false; // Whether to continue execution of the command.
        }
        return true;
    }
}
