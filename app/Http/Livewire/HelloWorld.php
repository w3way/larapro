<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = "Parvez";

    public $loud = false;

    public function render()
    {
        return view('livewire.hello-world');
    }
}
