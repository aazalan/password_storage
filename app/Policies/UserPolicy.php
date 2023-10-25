<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->email === 'alan@gmail.com';
    }

    /**
     * Determine whether the user can create models.
     */
    public function edit(User $user, User $editableUser): bool
    {
        return (bool) mt_rand(0, 1);
    }
}
