<?php

namespace App\Http\Livewire\Payments;

use Livewire\Component;

class IndexPaymentsPage extends Component
{
    
    public $method, $amount, $phone_number, $agreed;
    public function render()
    {
        // dd('here');
        return view('livewire.payments.index-payments-page');
        // Integrate React Component with Livewire
        // return view('livewire.payments.index-payments-page', [
        //     'reactComponent' => view('react.example-component'),
        // ]);
    }

    public function submit(){
        $request = [
            'method' => $this->method, 
            'amount' => $this->amount, 
            'phone_number' => $this->phone_number
        ];


    }
}
