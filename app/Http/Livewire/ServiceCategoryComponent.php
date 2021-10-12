<?php

namespace App\Http\Livewire;

use App\Models\ServiceCategory;
use Livewire\Component;

class ServiceCategoryComponent extends Component
{
    public function render()
    {
        $scategories = ServiceCategory::all();
        // dd($scategories);
        return view('livewire.service-category-component',['scategories' => $scategories])->layout('layouts.base');
    }
}
