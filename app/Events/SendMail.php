<?php

namespace App\Events;

use Alza\Event\EventInterface;

class SendMail implements EventInterface
{
    /**
     * This method will be triggered
     * when you called it through event() method.
     *
     * @return mixed
     */
    public function handle(): bool
    {
        return true;
    }
}
