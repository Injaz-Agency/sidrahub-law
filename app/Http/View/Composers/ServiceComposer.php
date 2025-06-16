<?php

namespace App\Http\View\Composers;

use App\Models\Service;
use Illuminate\View\View;

class ServiceComposer
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }


    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('services', Service::where('is_active', true)->get());
    }
}
