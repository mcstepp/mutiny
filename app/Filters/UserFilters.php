<?php

namespace App\Filters;

use App\User;

class UserFilters extends Filters
{
    /**
     * Registered filters to operate upon
     *
     * @var array
     */
    protected $filters = ['name', 'role'];

    /**
     * Filter the query by a given username
     *
     * @param string $direction
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function name($direction = 'asc')
    {
        if ($direction !== 'asc')
        {
            $direction = 'desc';
        }

        return $this->builder->orderBy('slug', $direction);
    }

    protected function role($direction = 'desc')
    {
        if ($direction !== 'desc')
        {
            $direction = 'asc';
        }

        return $this->builder->orderBy('role_id', $direction);
    }
}