<?php

namespace App\Livewire;

use Livewire\Component;

class IndexComponent extends Component
{
    public string $name = "";
    public string $email = "";
    
    public function render()
    {
        return view('livewire.index-component');
    }

    public function mount() 
    {
        
    }
}
