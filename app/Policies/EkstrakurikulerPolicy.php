<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Ekstrakurikuler;
use App\Models\User;
// use Illuminate\Auth\Access\HandlesAuthorization;

class EkstrakurikulerPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Ekstrakurikuler $ekstrakurikuler): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Ekstrakurikuler $ekstrakurikuler): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Ekstrakurikuler $ekstrakurikuler): bool
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Ekstrakurikuler $ekstrakurikuler): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Ekstrakurikuler $ekstrakurikuler): bool
    {
        return true;
    }

    // use HandlesAuthorization;
    public function deleteAny(User $user): bool
    {
        // Logika untuk memeriksa apakah pengguna diizinkan untuk melakukan bulk delete
        return true;
    }
}
