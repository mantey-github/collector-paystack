<?php

namespace Collector\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Inertia\Inertia;

class BillingPortalController
{
    public function __invoke(Request $request)
    {
        // $type = $type ?: $this->guessBillableType();

        //  $billable = $this->billable($type, $id);

        Inertia::setRootView('collector::app');

        View::share([
            'cssPath' => __DIR__.'/../../../public/css/app.css',
            'jsPath' => __DIR__.'/../../../public/js/app.js',
            //   'translations' => static::getTranslations(),
        ]);

        //        if ($request->checkout === 'subscription_started') {
        //            session(['spark.flash.success' => __('Your subscription has been started successfully.')]);
        //        } elseif ($request->checkout === 'payment_method_added') {
        //            session(['spark.flash.success' => __('Your payment method has been added successfully.')]);
        //        }

        // Inertia::share(app(FrontendState::class)->current($type, $billable));

        return Inertia::render('BillingPortal');
    }
}
