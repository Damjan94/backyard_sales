<?php

namespace App\Providers;

use App\Models\ItemForSale;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class UserAndItemCountServiceProvider extends ServiceProvider {
    
    public function boot() {
        View::share('user_count', User::count());
        View::share('item_for_sale_count', ItemForSale::count());
    }
}
