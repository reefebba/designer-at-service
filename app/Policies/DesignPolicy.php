<?php

namespace App\Policies;

use App\User;
use App\Design;
use Illuminate\Auth\Access\HandlesAuthorization;

class DesignPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the design.
     *
     * @param  \App\User  $user
     * @param  \App\Design  $design
     * @return mixed
     */
    public function view(User $user, Design $design)
    {
        //
    }

    /**
     * Determine whether the user can create designs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the design.
     *
     * @param  \App\User  $user
     * @param  \App\Design  $design
     * @return mixed
     */
    public function update(User $user, Design $design)
    {
        if (empty($design->user_id)) return true;
        return $user->id === $design->user_id;
    }

    /**
     * Determine whether the user can delete the design.
     *
     * @param  \App\User  $user
     * @param  \App\Design  $design
     * @return mixed
     */
    public function delete(User $user, Design $design)
    {
        //
    }

    /**
     * Determine whether the user can restore the design.
     *
     * @param  \App\User  $user
     * @param  \App\Design  $design
     * @return mixed
     */
    public function restore(User $user, Design $design)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the design.
     *
     * @param  \App\User  $user
     * @param  \App\Design  $design
     * @return mixed
     */
    public function forceDelete(User $user, Design $design)
    {
        //
    }
}
