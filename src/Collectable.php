<?php

namespace Collector;

trait Collectable
{
    public function bootCollectable()
    {
        static::created(function ($model) {
            $trialDays = 30;

            $model->forceFill([
                'trial_ends_at' => $trialDays ? now()->addDays($trialDays) : null,
            ])->save();
        });

        static::updated(function ($customer) {
            if ($customer->hasStripeId() && $customer->shouldSyncCustomerDetailsToStripe()) {
                //
            }
        });
    }
}
