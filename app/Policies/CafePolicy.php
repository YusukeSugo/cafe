<?php

namespace App\Policies;

use App\Cafe;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CafePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any cafes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the cafe.
     *
     * @param  \App\User  $user
     * @param  \App\Cafe  $cafe
     * @return mixed
     */
    public function view(User $user, Cafe $cafe)
    {
        //
    }

    /**
     * Determine whether the user can create cafes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the cafe.
     *
     * @param  \App\User  $user
     * @param  \App\Cafe  $cafe
     * @return mixed
     */
    public function update(User $user, Cafe $cafe)
    {
        //
        return $user->id === $cafe->user_id;
    }

    /**
     * Determine whether the user can delete the cafe.
     *
     * @param  \App\User  $user
     * @param  \App\Cafe  $cafe
     * @return mixed
     */
    public function delete(User $user, Cafe $cafe)
    {
        //
    }

    /**
     * Determine whether the user can restore the cafe.
     *
     * @param  \App\User  $user
     * @param  \App\Cafe  $cafe
     * @return mixed
     */
    public function restore(User $user, Cafe $cafe)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the cafe.
     *
     * @param  \App\User  $user
     * @param  \App\Cafe  $cafe
     * @return mixed
     */
    public function forceDelete(User $user, Cafe $cafe)
    {
        //
    }
}
