<?php

namespace Collector\Http\Controllers;

use Illuminate\Http\Request;

class BillingPortalController
{
    public function __invoke(Request $request)
    {
        return view('collector::home', [
            'cssPath' => __DIR__.'/../../../public/css/app.css',
            'jsPath' => __DIR__.'/../../../public/js/app.js'
        ]);
    }
}
