<?php

//Hint - Dependency Inversion Principle
abstract class Mailer
{
    public function sendWelcomeMessage();
}

class SendWelcomeMessage
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
    public function message()
    {
    $mail = $this->mailer->sendWelcomeMessage();
    }
}

