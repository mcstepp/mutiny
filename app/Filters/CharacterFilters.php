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
    protected $filters = ['age', 'faction'];

    /**
     * Filter the query by a given username
     *
     * @param string $direction
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function age($direction = 'desc')
    {
        if ($direction == 'asc') {
            $this->builder->orderByDesc('ic_birth_year');
        }
        else {
            $this->builder->orderBy('ic_birth_year');
        }

        return $this->builder
            ->orderBy('ic_birth_month')
            ->orderBy('ic_birth_day');
    }

    protected function faction()
    {
        return $this->builder
            ->orderBy('faction_id')
            ->orderBy('slug');
    }
}