<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\SkPenerimaanPpdb;
use App\Models\User;

class SkPenerimaanPpdbPolicy
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
    public function view(User $user, SkPenerimaanPpdb $skPenerimaanPpdb): bool
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
    public function update(User $user, SkPenerimaanPpdb $skPenerimaanPpdb): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, SkPenerimaanPpdb $skPenerimaanPpdb): bool
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, SkPenerimaanPpdb $skPenerimaanPpdb): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, SkPenerimaanPpdb $skPenerimaanPpdb): bool
    {
        return true;
    }
    public function deleteAny(User $user): bool
    {
        // Logika untuk memeriksa apakah pengguna diizinkan untuk melakukan bulk delete
        return true;
    }
}
