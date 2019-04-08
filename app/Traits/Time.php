<?php

namespace App\Traits;

trait Time
{
    protected $startDay = 31;
    protected $startMonth = 5;
    protected $startYear = 150;
    protected $endDay = 2;
    protected $endMonth = 7;
    protected $endYear = 150;
    protected $asOfDay = 31;
    protected $asOfMonth = 5;
    protected $asOfYear = 150;
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

    public function getCurrent()
    {
        return [
            'currentDay' => 31,
            'currentMonth' => 5,
            'currentYear' => 150
        ];
    }

    public function getPeriod()
    {
        return [
            'startDay' => $this->startDay,
            'startMonth' => $this->startMonth,
            'startYear' => $this->startYear,
            'endDay' => $this->endDay,
            'endMonth' => $this->endMonth,
            'endYear' => $this->endYear
        ];
    }

    public function getAsOf()
    {
        return [
            'asOfDay' => $this->asOfDay,
            'asOfMonth' => $this->asOfMonth,
            'asOfYear' => $this->asOfYear,
        ];
    }
}