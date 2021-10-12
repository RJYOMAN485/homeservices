<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class SproviderDashboardComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $scategory = ServiceCategory::paginate(10);
        return view('livewire.sprovider.sprovider-dashboard-component',['scategories' => $scategory])->layout('layouts.base');
    }
}
