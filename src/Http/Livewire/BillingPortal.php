<?php

namespace Collector\Http\Livewire;

use Livewire\Component;

class BillingPortal extends Component
{
    public function mount()
    {
        logger("this is rendered");
    }

    public function render()
    {
        return view('collector::livewire.billing', [
            'plans' => config('collector.billables.user.plans') ?? []
        ]);
    }
}