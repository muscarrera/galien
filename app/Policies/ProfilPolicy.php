<?php

namespace App\Policies;

use App\Profil;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use PHPUnit\Framework\Constraint\IsTrue;

class ProfilPolicy
{
    use HandlesAuthorization;


    public function before($user, $ability)
{
    if ($user->role === 1) {
        return true;
    }
}

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Profil  $profil
     * @return mixed
     */
    public function view(User $user, Profil $profil)
    {
      return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
      return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Profil  $profil
     * @return mixed
     */
    public function update(?User $user, Profil $profil)
    {
        return optional($user)->id === $profil->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Profil  $profil
     * @return mixed
     */
    public function delete(User $user, Profil $profil)
    {
        return optional($user)->id === $profil->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Profil  $profil
     * @return mixed
     */
    public function restore(User $user, Profil $profil)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Profil  $profil
     * @return mixed
     */
    public function forceDelete(User $user, Profil $profil)
    {
        //
    }
}
