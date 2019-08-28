<?php

namespace App\Policies;

use App\User;
use App\Project;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the project.
     *
     * @param \App\User $user
     * @param \App\Project $project
     * @return mixed
     */
    public function update(User $user, Joueurs $joueurs)
    {
        //
        return $joueurs->owner_id == $user->id;
    }
}
    /**
     * Determine whether the user can create projects.
     *
     * @param  \App\User  $user
     * @return mixed
     */

