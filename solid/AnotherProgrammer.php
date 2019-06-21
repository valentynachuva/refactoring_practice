<?php

//Hint - Open Closed Principle
interface Members
{
    function code();
}

class AnotherProgrammer implements Members
{
   public $member = 'Programmer';

    public function code()
    {
        return 'coding';
    }
}
class Tester
{
    public $member = 'Tester';

    public function code()
    {
        return 'testing';
    }
}
class ProjectManagement
{
    public $member;

    function __construct($member)
    {
        $this->member = $member;
    }
    function process($member)
    {
        switch ($member)
        {
            case ($this->member instanceof AnotherProgrammer): return $member->code();
                breake;
            case ($this->member instanceof Tester): return $member->code();
                breake;
        }
        throw new Exception('Invalid input member');
    }
}

$projectManagement = new ProjectManagement();
$projectManagement->process('Tester');