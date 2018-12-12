<?php

namespace App\Filters;

use App\User;

class CharacterFilters extends Filters
{
    /**
     * Registered filters to operate upon
     *
     * @var array
     */
    protected $filters = ['age'];

    /**
     * Filter the query by a given username
     *
     * @return Builder
     */
    protected function age()
    {
        return $this->builder
            ->orderBy('ic_birth_year')
            ->orderBy('ic_birth_month')
            ->orderBy('ic_birth_day');
    }
}