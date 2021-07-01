<?php

namespace App\Policies;

use App\Models\Ropa;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RopaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Ropa  $ropa
     * @return mixed
     */
    public function view(User $user, Ropa $ropa)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Ropa  $ropa
     * @return mixed
     */
    public function update(User $user, Ropa $ropa)
    {
        //
        return $user->id == 2;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Ropa  $ropa
     * @return mixed
     */
    public function delete(User $user, Ropa $ropa)
    {
        //
        return $user->id == 2;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Ropa  $ropa
     * @return mixed
     */
    public function restore(User $user, Ropa $ropa)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Ropa  $ropa
     * @return mixed
     */
    public function forceDelete(User $user, Ropa $ropa)
    {
        //
    }
}
