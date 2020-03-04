<?php

namespace App\Command\Timer;

use Minicli\Command\CommandController;

class DefaultController extends CommandController
{
    public function handle()
    {
        $this->getPrinter()->out("00  ");

        for($i = 0; $i <= 60; $i++){
            sleep(1);
            $this->getPrinter()->out(sprintf("\r%02d  ", $i));
        }

    }
}
