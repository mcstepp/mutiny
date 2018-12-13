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
    protected $filters = ['faction'];

    /**
     * Filter the query by a given username
     *
     * @return Builder
     */
    protected function faction()
    {
        return $this->builder
            ->orderBy('faction_id')
            ->orderBy('slug');
    }
}