<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;

class CustomerDashboardComponent extends Component
{
    public function render()
    {
        // return 1;
        return view('livewire.customer.customer-dashboard-component')->layout('layouts.base');
    }
}
