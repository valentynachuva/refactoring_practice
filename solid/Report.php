<?php

//Hint - use Single Responsibility Principle Violation
class Report
{
    protected $title = 'Report Title';

    protected $date = '2016-04-21';

    public function getContents()
    {
        return $content = [
            'title' => $this->title,
            'date' => $this->date,
        ];
    }
}

class FormatJson
{
    private $content;

    public function __construct($content)
    {
        $this->content =$content;
    }
    public function formatJson()
    {
        return json_encode($this->content->getContents());
    }
}

$report = new Report();
$content = new FormatJson($report);
$content->getContents();