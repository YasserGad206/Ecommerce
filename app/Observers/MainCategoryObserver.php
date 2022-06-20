<?php

namespace App\Observers;

use App\Models\main_categerys;

class MainCategoryObserver
{
    /**
     * Handle the main_categerys "created" event.
     *
     * @param  \App\Models\main_categerys  $main_categerys
     * @return void
     */
    public function created(main_categerys $main_categerys)
    {
        //
    }

    /**
     * Handle the main_categerys "updated" event.
     *
     * @param  \App\Models\main_categerys  $main_categerys
     * @return void
     */
    public function updated(main_categerys $main_categerys)
    {
        //


      /* $main_categerys -> vendor()->update(['active'=>$main_categerys->active]); */

    }

    /**
     * Handle the main_categerys "deleted" event.
     *
     * @param  \App\Models\main_categerys  $main_categerys
     * @return void
     */
    public function deleted(main_categerys $main_categerys)
    {
        //
    }

    /**
     * Handle the main_categerys "restored" event.
     *
     * @param  \App\Models\main_categerys  $main_categerys
     * @return void
     */
    public function restored(main_categerys $main_categerys)
    {
        //
    }

    /**
     * Handle the main_categerys "force deleted" event.
     *
     * @param  \App\Models\main_categerys  $main_categerys
     * @return void
     */
    public function forceDeleted(main_categerys $main_categerys)
    {
        //
    }
}
