<?php

namespace App\Traits;

trait Time
{
    protected $startDay = 31;
    protected $startMonth = "May";
    protected $startYear = 150;
    protected $currentDay;
    protected $maxAge = 78;
    protected $minAge = 18;
    protected $months = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    ];

    protected static function bootTime()
    {

    }

    public function getBirthYears()
    {
        $years = [];

        for ($i = $this->startYear - $this->minAge; $i >= $this->startYear - $this->maxAge; $i--) {
            $years[] = $i;
        }

        return $years;
    }

    public function getAges()
    {
        $ages = [];

        for ($i = $this->minAge; $i <= $this->maxAge; $i++) {
            $ages[] = $i;
        }

        return $ages;
    }

    public function getInitiationYears()
    {
        $years = [];

        for ($i = $this->startYear; $i >= $this->startYear-$this->maxAge + $this->minAge; $i--) {
            $years[] = $i;
        }

        return $years;
    }

    public function getMonths()
    {
        return $this->months;
    }
}