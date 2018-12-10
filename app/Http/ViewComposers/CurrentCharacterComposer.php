<?php

namespace App\Http\ViewComposers;

use App\User;
use Illuminate\View\View;

class CurrentCharacterComposer
{
    /**
     * The user repository implementation.
     *
     * @var $user;
     */
    protected $user;

    /**
     * Create a new profile composer.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        // Dependencies automatically resolved by service container...
        $this->user = $user;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('current_character', $this->users->count());
    }
}