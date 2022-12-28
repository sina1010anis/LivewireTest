<?php

namespace App\Http\Livewire;

use App\Models\Image;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class ShowComponent extends Component
{
    use WithFileUploads , WithPagination;
    public $numberItem = 0;
    public $countItem = 0;
    public $inputItem = '';
    public $inputItem_DEMO = '';
    public $image;
    protected $paginationTheme = 'bootstrap';
    //public $valiImage = ['image' => 'image|max:1024', ];
    public function export()
    {
        session()->flash('message', 'Post successfully updated.');

        //return Storage::download('3bKQ51OxcxJlB50m24pRa61O5cYfkh6yHbHmpW3u.png');
    }
    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:1024',
        ]);
    }
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
        //$test = $this->image->store('public/photos');
        //Image::create(['name_image'=>$test]);
        foreach($this->image as $image){
            $item = $image->store('public/photos');
            Image::create(['name_image'=>$item]);
        }
    }
    public function render()
    {
        return view('livewire.show-component' , ['users' => User::paginate(10)]);
    }
}
