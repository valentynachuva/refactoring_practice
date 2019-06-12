<?php

//Hint - Dependency Inversion Principle
class Mailer
{
}

class SendWelcomeMessage
{
    private $mailer;
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}

