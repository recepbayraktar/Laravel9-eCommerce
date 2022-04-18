<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Search extends Component
{
    public $search = '';
    public function render()
    {
        $dataList = Product::where('title', 'like', '%'. $this->search. '%')->get();
        return view('livewire.search', ['dataList' => $dataList, 'query' => $this->search]);
    }
}
