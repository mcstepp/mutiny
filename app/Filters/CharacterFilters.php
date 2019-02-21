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
    protected $filters = ['age', 'faction', 'name'];

    /**
     * Filter the query by a given username
     *
     * @param string $direction
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function age($direction = 'desc')
    {
        if ($direction !== 'desc') {
            $direction = 'asc';
        }

        return $this->builder
            ->orderBy('ic_birth_year', $direction)
            ->orderBy('ic_birth_month', $direction)
            ->orderBy('ic_birth_day', $direction)
            ->orderBy('slug');
    }

    protected function faction()
    {
        return $this->builder
            ->orderBy('faction_id')
            ->orderBy('slug');
    }

    protected function name($direction = 'asc')
    {
        if ($direction !== 'asc') {
            $direction = 'desc';
        }

        return $this->builder->orderBy('slug', $direction);
    }
}

