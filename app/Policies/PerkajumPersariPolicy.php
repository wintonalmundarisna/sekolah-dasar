<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\PerkajumPersari;
use App\Models\User;

class PerkajumPersariPolicy
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
    public function view(User $user, PerkajumPersari $perkajumPersari): bool
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
    public function update(User $user, PerkajumPersari $perkajumPersari): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, PerkajumPersari $perkajumPersari): bool
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, PerkajumPersari $perkajumPersari): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, PerkajumPersari $perkajumPersari): bool
    {
        return true;
    }
    public function deleteAny(User $user): bool
    {
        // Logika untuk memeriksa apakah pengguna diizinkan untuk melakukan bulk delete
        return true;
    }
}
