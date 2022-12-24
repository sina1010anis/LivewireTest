<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class ShowComponent extends Component
{
    use WithFileUploads;
    public $numberItem = 0;
    public $countItem = 0;
    public $inputItem = '';
    public $inputItem_DEMO = '';
    public $image;
    public $valiImage = ['image' => 'image|max:1024', ];
    public function updatingInputItem()
    {
        $this->countItem++;
    }
    public function testComponent($id)
    {
        $this->numberItem = $id;
    }
    public function ChangeShowClass(){
        //$this->emit('ChangeShow');
        $this->emit('ChangeShowJs');
    }
    public function fileUpload()
    {
        $this->image->store('photos');
    }
    public function render()
    {
        return view('livewire.show-component');
    }
}
