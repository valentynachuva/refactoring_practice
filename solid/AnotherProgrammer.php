<?php

//Hint - Open Closed Principle
interface Members
{
    function code();
}

class AnotherProgrammer implements Members
{
   private $member = 'Programmer';

    public function code()
    {
        return 'coding';
    }
}
class Tester implements Members
{
    private $member = 'Tester';

    public function code()
    {
        return 'testing';
    }
}
class ProjectManagement
{
    private $member;

    function __construct(Members $member)
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