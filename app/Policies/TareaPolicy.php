<?php

namespace App\Policies;

use App\Tarea;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TareaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */

    public function edit (User $user, Tarea $tarea){
        return $user->id === $tarea->user_id;
    }

    public function update (User $user, Tarea $tarea) {
        return $user->id === $tarea->user_id;
    }

    public function destroy (User $user, Tarea $tarea) {
        return $user->id === $tarea->user_id;
    }


    public function __construct()
    {
        //
    }
}
