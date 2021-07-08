<?php

namespace App\Policies;

use App\Models\Anuncio;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AnuncioPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user){
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Anuncio  $anuncio
     * @return mixed
     */
    public function view(User $user, Anuncio $anuncio){
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user){
        //
    }

    /**
     * Determine whether the user can edit (which includes update and delete) the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Anuncio  $anuncio
     * @return mixed
     */
    public function edit(User $user, Anuncio $anuncio){
        // solamente el usuario identificado o el usuario con email admin@cifopop pueden hacer edit
        return $user->id == $anuncio->user_id || $user->email== 'admin@cifopop.com';
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Anuncio  $anuncio
     * @return mixed
     */
    public function delete(User $user, Anuncio $anuncio){
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Anuncio  $anuncio
     * @return mixed
     */
    public function restore(User $user, Anuncio $anuncio){
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Anuncio  $anuncio
     * @return mixed
     */
    public function forceDelete(User $user, Anuncio $anuncio){
        //
    }
}
