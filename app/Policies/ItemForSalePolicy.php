<?php

namespace App\Policies;

use App\Models\ItemForSale;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ItemForSalePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ItemForSale  $itemForSale
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ItemForSale $itemForSale)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ItemForSale  $itemForSale
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ItemForSale $itemForSale)
    {
        return isUserTheOwnerOfItem($user, $itemForSale);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ItemForSale  $itemForSale
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ItemForSale $itemForSale)
    {
        return isUserTheOwnerOfItem($user, $itemForSale);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ItemForSale  $itemForSale
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ItemForSale $itemForSale)
    {
        return isUserTheOwnerOfItem($user, $itemForSale);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ItemForSale  $itemForSale
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ItemForSale $itemForSale)
    {
        return isUserTheOwnerOfItem($user, $itemForSale);
    }
    
    
    private function isUserTheOwnerOfItem(User $user, ItemForSale $itemForSale): bool {
        return $itemForSale->user() === $user;
    }
}
