<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $topmenu = DB::table('menus')
            ->where('status', ACTIVE)
            ->where('type', MENUTYPE1)
            ->orderByRaw(DB::raw("position = '0', position"))
            ->orderBy('name')
            ->get();
        $sidemenu = DB::table('menus')
            ->where('status', ACTIVE)
            ->where('type', MENUTYPE2)
            ->orderByRaw(DB::raw("position = '0', position"))
            ->orderBy('name')
            ->get();
        view()->share('topmenu', $topmenu);
        view()->share('sidemenu', $sidemenu);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
