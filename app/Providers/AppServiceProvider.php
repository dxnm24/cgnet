<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use Cache;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        self::getMenus(MENUTYPE1, 'topmenu');
        self::getMenus(MENUTYPE2, 'sidemenu');
    }

    private function getMenus($type, $name)
    {
        $cacheName = 'menu_'.$type.'_'.$name;
        if(Cache::has($cacheName)) {
            $menu = Cache::get($cacheName);
        } else {
            $menu = DB::table('menus')
                ->where('type', $type)
                ->where('status', ACTIVE)
                ->orderByRaw(DB::raw("position = '0', position"))
                ->orderBy('name')
                ->get();
            Cache::forever($cacheName, $menu);
        }
        view()->share($name, $menu);
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
