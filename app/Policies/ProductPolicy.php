<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Product $product
     * @return Response|bool
     */
    public function view(User $user, Product $product): Response|bool
    {
        return Auth::check();
    }

    /**
     * Determine whether the user can store models.
     *
     * @param User $user
     * @return Response|bool
     */
    public function store(User $user): Response|bool
    {
        return Auth::check();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Product $product
     * @return Response|bool
     */
    public function update(User $user, Product $product): Response|bool
    {
        return Auth::check();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Product $product
     * @return Response|bool
     */
    public function delete(User $user, Product $product): Response|bool
    {
        return Auth::check();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Product $product
     * @return Response|bool
     */
    public function restore(User $user, Product $product): Response|bool
    {
        return Auth::check();
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Product $product
     * @return Response|bool
     */
    public function forceDelete(User $user, Product $product): Response|bool
    {
        return Auth::check();
    }
}
