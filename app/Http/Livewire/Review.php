<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Review extends Component
{
    public $record, $subject, $review, $product_id, $rate;

    public function mount($id){
        $this->record = Product::findOrFail($id);
        $this->product_id = $this->record->id;
    }

    public function render()
    {
        return view('livewire.review');
    }

    private function resetInput(){
        $this->subject = null;
        $this->review = null;
        $this->rate = null;
        $this->product_id = null;
        $this->IP = null;
    }

    public function store()
    {
        $this->validate([
        'subject' => 'required|min:5',
        'review' => 'required|min:10',
        'rate' => 'required'
        ]);

        \App\Models\Review::create([
        'product_id' => $this->product_id,
        'user_id' => Auth::id(),
        'subject' => $this->subject,
        'review' => $this->review,
        'IP' => $_SERVER['REMOTE_ADDR'],
        'rate' => $this->rate,
        ]);


        session()->flash('message', 'Review send successfully');

        $this->resetInput();
    }
}
