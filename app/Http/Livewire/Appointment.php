<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Appointment extends Component
{
    // 
    public $callComponent;

    public function render()
    {
        return view('livewire.appointment');
    }

    public function mount(){
    }

    public function firstTime($answer){
        if($answer == 1){
            $this->callComponent = 1;
        }else{
            $this->callComponent = 0;
        }
    }
    
}
