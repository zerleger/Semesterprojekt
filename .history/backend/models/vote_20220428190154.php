<?php
class Vote
{
    public $optionsnummer;
    public $votingCount;

    function __construct($votingCount, $optionsnummer)
    {
        $this->votingCount = $votingCount;
        $this->optionsnummer = $optionsnummer;
    }
}

//$a = new Appointment("22-02-1234","MEETING","2013-03-15 23:40:00","12:00","13:00",Option["2013-03-15","2013-03-15","2013-03-14"]);



//echo date_format($a->date,"c");;
