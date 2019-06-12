<?php

class Mailer {
    var $mailer;
    var $mail;
    function setMailer ( google_mailer $mailer ) {
        $this->mailer = $mailer;
    }

function compose($to, $from, $body, $subject)
{
    $this->mail = [
        'to' => $to,
        'from' => $from,
        'body' => $body,
        'subject' => $subject
    ];
}

    public function Send() {
        if (!empty($this->mail)) {
            return sprintf('Mail was sent to %s from %s with subject %s and message %s', $this->mail['to'], $this->mail['from'], $this->mail['subject'], $this->mail['body']);
        } else {
            throw new Exception('Mail was not composed');
        }
    }
}

class google_mailer {
    var $settings = [];

    function google_mailer($settings = null) {
        if ($settings) {
            $this->settings['host'] = $settings['host'];
            $this->settings['user'] = $settings['user'];
            $this->settings['password'] = $settings['password'];
        }
    }
    public function Set_host($host)
    {
        $this->settings['host'] = $host;
    }

    function set_user(string $User) {
        $this->settings['user'] = $User;
    }

    public function SetPassword($password)
    {
        $this->settings['password'] = $password;
    }
}

$googleMailer = new google_mailer(['host' => 'smtp.google.com', 'user' => 'test', 'password' => 'testpass']);
$mailer = new Mailer();
$mailer->setMailer($googleMailer);
$mailer->compose('test@mail.com', 'student@mail.com', 'Welcome', 'Welcome message');
echo $mailer->Send();


