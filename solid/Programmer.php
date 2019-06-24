<?php

//Hint - Interface Segregation Principle
interface ProjectManagementWorkable
{
    public function canCode();
}
interface ProgrammerWorkable
{
    public function code();
}
interface TesterWorkable
{
    public function test();
}

class Programmer implements ProgrammerWorkable, ProjectManagementWorkable
{
    public function canCode()
    {
        return true;
    }
    public function code()
    {
        return 'coding';
    }
}

class Tester implements TesterWorkable
{
    public function test()
    {
        return 'testing in test server';
    }
}

class ProjectManagement
{
    public function processCode(ProjectManagementWorkable $member)
    {
        if ($member->canCode()) {
            $member->code();
        }
    }
}
